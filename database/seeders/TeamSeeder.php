<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            // Llave 1
            ['name' => 'Alemania', 'fifa_code' => 'GER', 'flag_url' => 'images/flags/GER.png'],
            ['name' => 'Paraguay', 'fifa_code' => 'PAR', 'flag_url' => 'images/flags/PAR.png'],
            ['name' => 'Francia', 'fifa_code' => 'FRA', 'flag_url' => 'images/flags/FRA.png'],
            ['name' => 'Suecia', 'fifa_code' => 'SWE', 'flag_url' => 'images/flags/SWE.png'],
            // Llave 2
            ['name' => 'Sudáfrica', 'fifa_code' => 'RSA', 'flag_url' => 'images/flags/RSA.png'],
            ['name' => 'Canadá', 'fifa_code' => 'CAN', 'flag_url' => 'images/flags/CAN.png'],
            ['name' => 'Países Bajos', 'fifa_code' => 'NED', 'flag_url' => 'images/flags/NED.png'],
            ['name' => 'Marruecos', 'fifa_code' => 'MAR', 'flag_url' => 'images/flags/MAR.png'],
            // Llave 3
            ['name' => 'Portugal', 'fifa_code' => 'POR', 'flag_url' => 'images/flags/POR.png'],
            ['name' => 'Croacia', 'fifa_code' => 'CRO', 'flag_url' => 'images/flags/CRO.png'],
            ['name' => 'España', 'fifa_code' => 'ESP', 'flag_url' => 'images/flags/ESP.png'],
            ['name' => 'Austria', 'fifa_code' => 'AUT', 'flag_url' => 'images/flags/AUT.png'],
            // Llave 4
            ['name' => 'Estados Unidos', 'fifa_code' => 'USA', 'flag_url' => 'images/flags/USA.png'],
            ['name' => 'Bosnia y Herzegovina', 'fifa_code' => 'BIH', 'flag_url' => 'images/flags/BIH.png'],
            ['name' => 'Bélgica', 'fifa_code' => 'BEL', 'flag_url' => 'images/flags/BEL.png'],
            ['name' => 'Senegal', 'fifa_code' => 'SEN', 'flag_url' => 'images/flags/SEN.png'],
            // Llave 5
            ['name' => 'Brasil', 'fifa_code' => 'BRA', 'flag_url' => 'images/flags/BRA.png'],
            ['name' => 'Japón', 'fifa_code' => 'JPN', 'flag_url' => 'images/flags/JPN.png'],
            ['name' => 'Costa de Marfil', 'fifa_code' => 'CIV', 'flag_url' => 'images/flags/CIV.png'],
            ['name' => 'Noruega', 'fifa_code' => 'NOR', 'flag_url' => 'images/flags/NOR.png'],
            // Llave 6
            ['name' => 'México', 'fifa_code' => 'MEX', 'flag_url' => 'images/flags/MEX.png'],
            ['name' => 'Ecuador', 'fifa_code' => 'ECU', 'flag_url' => 'images/flags/ECU.png'],
            ['name' => 'Inglaterra', 'fifa_code' => 'ENG', 'flag_url' => 'images/flags/ENG.png'],
            ['name' => 'RD Congo', 'fifa_code' => 'COD', 'flag_url' => 'images/flags/COD.png'],
            // Llave 7
            ['name' => 'Argentina', 'fifa_code' => 'ARG', 'flag_url' => 'images/flags/ARG.png'],
            ['name' => 'Islas de Cabo Verde', 'fifa_code' => 'CPV', 'flag_url' => 'images/flags/CPV.png'],
            ['name' => 'Australia', 'fifa_code' => 'AUS', 'flag_url' => 'images/flags/AUS.png'],
            ['name' => 'Egipto', 'fifa_code' => 'EGY', 'flag_url' => 'images/flags/EGY.png'],
            // Llave 8
            ['name' => 'Suiza', 'fifa_code' => 'SUI', 'flag_url' => 'images/flags/SUI.png'],
            ['name' => 'Argelia', 'fifa_code' => 'ALG', 'flag_url' => 'images/flags/ALG.png'],
            ['name' => 'Colombia', 'fifa_code' => 'COL', 'flag_url' => 'images/flags/COL.png'],
            ['name' => 'Ghana', 'fifa_code' => 'GHA', 'flag_url' => 'images/flags/GHA.png'],
        ];

        foreach ($teams as $team) {
            Team::updateOrCreate(
                ['fifa_code' => $team['fifa_code']],
                $team
            );
        }
    }
}
