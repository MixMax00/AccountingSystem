<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\GeneralSettings;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class GeneralSettingsController extends Controller
{
    public function general()
    {
        return view('backend.generalSetting.generalSetting');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            "site_name" => "required|string",
            "currency"  => "required|string",
        ]);

        $general_seting = GeneralSettings::find(1);

        if($general_seting){
            if($request->file('site_icon')){
                if($general_seting->site_icon){
                    unlink($general_seting->site_icon);
                }

                $width  = 16;
                $height = 16;
                $directory = 'assets/images/';
                $db_url = image_upload($request->site_icon, $width,$height,$directory);

                $general_seting->site_name = $request->site_name;
                $general_seting->time_zone = $request->time_zone;
                $general_seting->site_icon = $request->$db_url;
                $general_seting->currency  = $request->currency;

            }else{
                $general_seting->site_name = $request->site_name;
                $general_seting->time_zone = $request->time_zone;
                $general_seting->currency  = $request->currency;
            }

        }else{

            $general = new GeneralSettings();
            if($request->file('site_icon')){

                $width  = 16;
                $height = 16;
                $directory = 'assets/images/';
                $db_url = image_upload($request->site_icon, $width,$height,$directory);
                $general->site_name = $request->site_name;
                $general->time_zone = $request->time_zone;
                $general->site_icon = $request->$db_url;
                $general->currency  = $request->currency;

            }else{
                $general->site_name = $request->site_name;
                $general->time_zone = $request->time_zone;
                $general->currency  = $request->currency;
            }
        }

        Alert::success("Save", "General setting save successfully!!!");
        return back();
    }
}
