<?php

namespace Database\Seeders;

use App\Models\Budget;
use App\Models\BudgetList;
use App\Models\SessionYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $session_year = SessionYear::find(1);
        Budget::create([
            "session_id"     => $session_year->id,
            "budget"         => 1000000.00,
            "created_at"     => Carbon::now(),
        ]);


        $head_list = ["Salary", "Bill", "Upoboti", "Tea"];
        $code = [0000001, 0000002, 0000003, 0000004];
        $budget = [2000, 50000, 40000, 10000];


        for ($col = 0; $col < 4; $col++) {
            $budget_list = new BudgetList();
            $budget_list->budget_id      = Budget::find(1)->id;
            $budget_list->head_name      = $head_list[$col];
            $budget_list->code           = $code[$col];
            $budget_list->budget         = $budget[$col];
            $budget_list->save();
        }


    }
}
