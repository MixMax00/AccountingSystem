<?php

namespace App\Http\Controllers\backend;

use App\Models\Heads;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class HeadController extends Controller
{

    public function index()
    {

        return view('backend.heads.list',[
            "datas" => Heads::tree(),
        ]);
    }

    public function create()
    {
        return view('backend.heads.create',[
            'heads' => Heads::where('status', 1)->get(),
        ]);
    }

    public function store(Request $request)
    {
        //return $request->all();

        $this->validate($request, [
            "head_name"  => "required|string",
            "type"       => "required|string",
        ]);




        if($request->parent == "whenNull"){

            $head = Heads::all();
            if($head->isEmpty()){
                $newOrderId = "00001";
            }else{
                $lastorderId = Heads::where('parent_id', null)->orderBy('id', 'desc')->first()->id;
                $lastIncreament = substr($lastorderId, -1);
                $newOrderId = str_pad($lastIncreament + 1, 5, 0, STR_PAD_LEFT);
            }

            Heads::create([
                "head_name"    => $request->head_name,
                "type"         => $request->type,
                "code"         => $newOrderId,
                "payable"      => $request->applicable,
                "details"      => $request->note,
            ]);

        }else{
            $headCode = Heads::where('id', $request->parent)->first()->code;
            $parent = Heads::where('parent_id', $request->parent)->first();

            if($parent){
                $lastorderCode = Heads::where('parent_id', $request->parent)->orderBy('id', 'desc')->first()->code;
                $last = substr($lastorderCode, -2);
                $lastIncreament = $headCode . str_pad($last + 1, 2, 0, STR_PAD_LEFT);
            }else{
                $lastIncreament = $headCode."01";
            }

            $head = Heads::create([
                "head_name"    => $request->head_name,
                "parent_id"   =>  $request->parent,
                "code"        =>  $lastIncreament,
                "type"         => $request->type,
                "payable"      => $request->applicable,
                "details"      => $request->note,
            ]);
        }


        Alert::success('Created', "Head created successfully!!!");
        return redirect()->route('admin.head.list');
    }

    public function edit($id)
    {
        $edit = Heads::find($id);
        return view('backend.heads.edit',[
            "edit" => $edit,
        ]);
    }

    public function update(Request $request)
    {
        Heads::where('id', $request->id)->update([
            "head_name"    => $request->head_name,
            "payable"      => $request->applicable,
            "details"      => $request->note,
        ]);

        Alert::success('Created', "Head created successfully!!!");
        return redirect()->route('admin.head.list');
    }
}
