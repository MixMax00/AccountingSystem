<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Budget;
use App\Models\SessionYear;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function list()
    {
        return view('backend.budget.list',[
            "datas"  => Budget::all(),
        ]);
    }


    public function create()
    {
        return view('backend.budget.create',[
            "budget_years" => SessionYear::all(),
        ]);
    }
}
