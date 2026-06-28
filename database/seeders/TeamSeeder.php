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
            ['name' => 'Alemania', 'fifa_code' => 'GER', 'flag_url' => 'https://flagcdn.com/w40/ger.png'],
            ['name' => 'Paraguay', 'fifa_code' => 'PAR', 'flag_url' => 'https://flagcdn.com/w40/par.png'],
            ['name' => 'Francia', 'fifa_code' => 'FRA', 'flag_url' => 'https://flagcdn.com/w40/fra.png'],
            ['name' => 'Suecia', 'fifa_code' => 'SWE', 'flag_url' => 'https://flagcdn.com/w40/swe.png'],
            // Llave 2
            ['name' => 'Sudáfrica', 'fifa_code' => 'RSA', 'flag_url' => 'https://flagcdn.com/w40/rsa.png'],
            ['name' => 'Canadá', 'fifa_code' => 'CAN', 'flag_url' => 'https://flagcdn.com/w40/can.png'],
            ['name' => 'Países Bajos', 'fifa_code' => 'NED', 'flag_url' => 'https://flagcdn.com/w40/ned.png'],
            ['name' => 'Marruecos', 'fifa_code' => 'MAR', 'flag_url' => 'https://flagcdn.com/w40/mar.png'],
            // Llave 3
            ['name' => 'Portugal', 'fifa_code' => 'POR', 'flag_url' => 'https://flagcdn.com/w40/por.png'],
            ['name' => 'Croacia', 'fifa_code' => 'CRO', 'flag_url' => 'https://flagcdn.com/w40/cro.png'],
            ['name' => 'España', 'fifa_code' => 'ESP', 'flag_url' => 'https://flagcdn.com/w40/esp.png'],
            ['name' => 'Austria', 'fifa_code' => 'AUT', 'flag_url' => 'https://flagcdn.com/w40/aut.png'],
            // Llave 4
            ['name' => 'Estados Unidos', 'fifa_code' => 'USA', 'flag_url' => 'https://flagcdn.com/w40/usa.png'],
            ['name' => 'Bosnia y Herzegovina', 'fifa_code' => 'BIH', 'flag_url' => 'https://flagcdn.com/w40/bih.png'],
            ['name' => 'Bélgica', 'fifa_code' => 'BEL', 'flag_url' => 'https://flagcdn.com/w40/bel.png'],
            ['name' => 'Senegal', 'fifa_code' => 'SEN', 'flag_url' => 'https://flagcdn.com/w40/sen.png'],
            // Llave 5
            ['name' => 'Brasil', 'fifa_code' => 'BRA', 'flag_url' => 'https://flagcdn.com/w40/bra.png'],
            ['name' => 'Japón', 'fifa_code' => 'JPN', 'flag_url' => 'https://flagcdn.com/w40/jpn.png'],
            ['name' => 'Costa de Marfil', 'fifa_code' => 'CIV', 'flag_url' => 'https://flagcdn.com/w40/civ.png'],
            ['name' => 'Noruega', 'fifa_code' => 'NOR', 'flag_url' => 'https://flagcdn.com/w40/nor.png'],
            // Llave 6
            ['name' => 'México', 'fifa_code' => 'MEX', 'flag_url' => 'https://flagcdn.com/w40/mex.png'],
            ['name' => 'Ecuador', 'fifa_code' => 'ECU', 'flag_url' => 'https://flagcdn.com/w40/ecu.png'],
            ['name' => 'Inglaterra', 'fifa_code' => 'ENG', 'flag_url' => 'https://flagcdn.com/w40/eng.png'],
            ['name' => 'RD Congo', 'fifa_code' => 'COD', 'flag_url' => 'https://flagcdn.com/w40/cod.png'],
            // Llave 7
            ['name' => 'Argentina', 'fifa_code' => 'ARG', 'flag_url' => 'https://flagcdn.com/w40/arg.png'],
            ['name' => 'Islas de Cabo Verde', 'fifa_code' => 'CPV', 'flag_url' => 'https://flagcdn.com/w40/cpv.png'],
            ['name' => 'Australia', 'fifa_code' => 'AUS', 'flag_url' => 'https://flagcdn.com/w40/aus.png'],
            ['name' => 'Egipto', 'fifa_code' => 'EGY', 'flag_url' => 'https://flagcdn.com/w40/egy.png'],
            // Llave 8
            ['name' => 'Suiza', 'fifa_code' => 'SUI', 'flag_url' => 'https://flagcdn.com/w40/sui.png'],
            ['name' => 'Argelia', 'fifa_code' => 'ALG', 'flag_url' => 'https://flagcdn.com/w40/alg.png'],
            ['name' => 'Colombia', 'fifa_code' => 'COL', 'flag_url' => 'https://flagcdn.com/w40/col.png'],
            ['name' => 'Ghana', 'fifa_code' => 'GHA', 'flag_url' => 'https://flagcdn.com/w40/gha.png'],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
