<?php

namespace Database\Seeders;

use App\Models\Allocation;
use App\Models\AllowcationList;
use App\Models\SessionYear;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AllowcationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $session_year = SessionYear::find(1);
        Allocation::create([
            "session_id"     => $session_year->id,
            "allowcation"    => 1000000.00,
            "created_at"     => Carbon::now(),
        ]);


        $head_list = ["Salary", "Bill", "Upoboti", "Tea"];
        $code = [0000001, 0000002, 0000003, 0000004];
        $budget = [2000, 50000, 40000, 10000];


        for ($col = 0; $col < 4; $col++) {
            $budget_list = new AllowcationList();
            $budget_list->allowcation_id = Allocation::find(1)->id;
            $budget_list->head_name      = $head_list[$col];
            $budget_list->code           = $code[$col];
            $budget_list->allowcation     = $budget[$col];
            $budget_list->save();
        }
    }
}
