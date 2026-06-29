<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Team;
use App\Models\WorldCupMatch;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matches = [
            ['match_number' => 'P73', 'team1_fifa_code' => 'RSA', 'team2_fifa_code' => 'CAN'],
            ['match_number' => 'P74', 'team1_fifa_code' => 'GER', 'team2_fifa_code' => 'PAR'],
            ['match_number' => 'P75', 'team1_fifa_code' => 'NED', 'team2_fifa_code' => 'MAR'],
            ['match_number' => 'P76', 'team1_fifa_code' => 'BRA', 'team2_fifa_code' => 'JPN'],
            ['match_number' => 'P77', 'team1_fifa_code' => 'FRA', 'team2_fifa_code' => 'SWE'],
            ['match_number' => 'P78', 'team1_fifa_code' => 'CIV', 'team2_fifa_code' => 'NOR'],
            ['match_number' => 'P79', 'team1_fifa_code' => 'MEX', 'team2_fifa_code' => 'ECU'],
            ['match_number' => 'P80', 'team1_fifa_code' => 'ENG', 'team2_fifa_code' => 'COD'],
            ['match_number' => 'P81', 'team1_fifa_code' => 'USA', 'team2_fifa_code' => 'BIH'],
            ['match_number' => 'P82', 'team1_fifa_code' => 'BEL', 'team2_fifa_code' => 'SEN'],
            ['match_number' => 'P83', 'team1_fifa_code' => 'POR', 'team2_fifa_code' => 'CRO'],
            ['match_number' => 'P84', 'team1_fifa_code' => 'ESP', 'team2_fifa_code' => 'AUT'],
            ['match_number' => 'P85', 'team1_fifa_code' => 'SUI', 'team2_fifa_code' => 'ALG'],
            ['match_number' => 'P86', 'team1_fifa_code' => 'ARG', 'team2_fifa_code' => 'CPV'],
            ['match_number' => 'P87', 'team1_fifa_code' => 'COL', 'team2_fifa_code' => 'GHA'],
            ['match_number' => 'P88', 'team1_fifa_code' => 'AUS', 'team2_fifa_code' => 'EGY'],
            ['match_number' => 'P89', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'], // Placeholder for future matches
            ['match_number' => 'P90', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P91', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P92', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P93', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P94', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P95', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P96', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P97', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P98', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P99', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P100', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P101', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P102', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P103', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null'],
            ['match_number' => 'P104', 'team1_fifa_code' => 'null', 'team2_fifa_code' => 'null']

        ];

        foreach ($matches as $match) {
            $team1 = Team::where('fifa_code', $match['team1_fifa_code'])->first();
            $team2 = Team::where('fifa_code', $match['team2_fifa_code'])->first();

            if ($team1 && $team2) {
                WorldCupMatch::create([
                    'match_number' => $match['match_number'],
                    'team1_id' => $team1->id,
                    'team2_id' => $team2->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                // Log or handle the case where a team wasn't found
                WorldCupMatch::create([
                    'match_number' => $match['match_number'],
                    'team1_id' => $team1 ? $team1->id : 0,
                    'team2_id' => $team2 ? $team2->id : 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
               
            }
            

        }
    }
}