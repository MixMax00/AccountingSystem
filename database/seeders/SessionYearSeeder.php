<?php

namespace Database\Seeders;

use App\Models\SessionYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SessionYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SessionYear::create([
            "year"              => 2023,
            "string_month"      => Carbon::now(),
            "ending_month"      => Carbon::create(2023, 1, 31, 0, 0, 0)->addMonth(),
            "note"              => "2023-2024 session year",
            "created_at"        => Carbon::now(),
        ]);
    }
}
