<?php

use Illuminate\Database\Seeder;
use App\Location;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['name' => 'Ain (01)', 'value' => '01'],
            ['name' => 'Aisne (02)', 'value' => '02'],
            ['name' => 'Allier (03)', 'value' => '03'],
            ['name' => 'Alpes de Hautes-Provence (04)', 'value' => '04'],
            ['name' => 'Alpes-Maritimes (06)', 'value' => '06'],
            ['name' => 'Ardennes (08)', 'value' => '08'],
            ['name' => 'Ardéche (07)', 'value' => '07'],
            ['name' => 'Ariége (09)', 'value' => '09'],
            ['name' => 'Aube (10)', 'value' => '10'],
            ['name' => 'Aude (11)', 'value' => '11'],
            ['name' => 'Aveyron (12)', 'value' => '12'],
            ['name' => 'Bas-Rhin (67)', 'value' => '67'],
            ['name' => 'Bouches-du-Rhône (13)', 'value' => '13'],
            ['name' => 'Calvados (14)', 'value' => '14'],
            ['name' => 'Cantal (15)', 'value' => '15'],
            ['name' => 'Charente (16)', 'value' => '16'],
            ['name' => 'Charente-Maritime (17)', 'value' => '17'],
            ['name' => 'Cher (18)', 'value' => '18'],
            ['name' => 'Corréze (19)', 'value' => '19'],
            ['name' => 'Corse (20)', 'value' => '20'],
            ['name' => 'Creuse (23)', 'value' => '23'],
            ['name' => 'Côte-d\'Or (21)', 'value' => '21'],
            ['name' => 'Côtes d\'Armor (22)', 'value' => '22'],
            ['name' => 'Deux-Sévres (79)', 'value' => '79'],
            ['name' => 'Dordogne (24)', 'value' => '24'],
            ['name' => 'Doubs (25)', 'value' => '25'],
            ['name' => 'Drôme (26)', 'value' => '26'],
            ['name' => 'Essonne (91)', 'value' => '91'],
            ['name' => 'Eure (27)', 'value' => '27'],
            ['name' => 'Eure-et-Loir (28)', 'value' => '28'],
            ['name' => 'Finistére (29)', 'value' => '29'],
            ['name' => 'Gard (30)', 'value' => '30'],
            ['name' => 'Gers (32)', 'value' => '32'],
            ['name' => 'Gironde (33)', 'value' => '33'],
            ['name' => 'Haut-Rhin (68)', 'value' => '68'],
            ['name' => 'Haute-Garonne (31)', 'value' => '31'],
            ['name' => 'Haute-Loire (43)', 'value' => '43'],
            ['name' => 'Haute-Marne (52)', 'value' => '52'],
            ['name' => 'Haute-Savoie (74)', 'value' => '74'],
            ['name' => 'Haute-Saône (70)', 'value' => '70'],
            ['name' => 'Haute-Vienne (87)', 'value' => '87'],
            ['name' => 'Hautes-Alpes (05)', 'value' => '05'],
            ['name' => 'Hautes-Pyrénées (65)', 'value' => '65'],
            ['name' => 'Hauts-de-Seine (92)', 'value' => '92'],
            ['name' => 'Hérault (34)', 'value' => '34'],
            ['name' => 'Ille-et-Vilaine (35)', 'value' => '35'],
            ['name' => 'Indre (36)', 'value' => '36'],
            ['name' => 'Indre-et-Loire (37)', 'value' => '37'],
            ['name' => 'Isére (38)', 'value' => '38'],
            ['name' => 'Jura (39)', 'value' => '39'],
            ['name' => 'Landes (40)', 'value' => '40'],
            ['name' => 'Loir-et-Cher (41)', 'value' => '41'],
            ['name' => 'Loire (42)', 'value' => '42'],
            ['name' => 'Loire-Atlantique (44)', 'value' => '44'],
            ['name' => 'Loiret (45)', 'value' => '45'],
            ['name' => 'Lot (46)', 'value' => '46'],
            ['name' => 'Lot-et-Garonne (47)', 'value' => '47'],
            ['name' => 'Lozére (48)', 'value' => '48'],
            ['name' => 'Maine-et-Loire (49)', 'value' => '49'],
            ['name' => 'Manche (50)', 'value' => '50'],
            ['name' => 'Marne (51)', 'value' => '51'],
            ['name' => 'Mayenne (53)', 'value' => '53'],
            ['name' => 'Meurthe-et-Moselle (54)', 'value' => '54'],
            ['name' => 'Meuse (55)', 'value' => '55'],
            ['name' => 'Morbihan (56)', 'value' => '56'],
            ['name' => 'Moselle (57)', 'value' => '57'],
            ['name' => 'Niévre (58)', 'value' => '58'],
            ['name' => 'Nord (59)', 'value' => '59'],
            ['name' => 'Oise (60)', 'value' => '60'],
            ['name' => 'Orne (61)', 'value' => '61'],
            ['name' => 'Paris / Ile de France (75)', 'value' => '75'],
            ['name' => 'Pas-de-Calais (62)', 'value' => '62'],
            ['name' => 'Puy-de-Dôme (63)', 'value' => '63'],
            ['name' => 'Pyrénées-Atlantiques (64)', 'value' => '64'],
            ['name' => 'Pyrénées-Orientales (66)', 'value' => '66'],
            ['name' => 'Rhône (69)', 'value' => '69'],
            ['name' => 'Sarthe (72)', 'value' => '72'],
            ['name' => 'Savoie (73)', 'value' => '73'],
            ['name' => 'Saône-et-Loire (71)', 'value' => '71'],
            ['name' => 'Seine-Maritime (76)', 'value' => '76'],
            ['name' => 'Seine-Saint-Denis (93)', 'value' => '93'],
            ['name' => 'Seine-et-Marne (77)', 'value' => '77'],
            ['name' => 'Somme (80)', 'value' => '80'],
            ['name' => 'Tarn (81)', 'value' => '81'],
            ['name' => 'Tarn-et-Garonne (82)', 'value' => '82'],
            ['name' => 'Territoire-de-Belfort (90)', 'value' => '90'],
            ['name' => 'Val-d\'Oise (95)', 'value' => '95'],
            ['name' => 'Val-de-Marne (94)', 'value' => '94'],
            ['name' => 'Var (83)', 'value' => '83'],
            ['name' => 'Vaucluse (84)', 'value' => '84'],
            ['name' => 'Vendée (85)', 'value' => '85'],
            ['name' => 'Vienne (86)', 'value' => '86'],
            ['name' => 'Vosges (88)', 'value' => '88'],
            ['name' => 'Yonne (89)', 'value' => '89'],
            ['name' => 'Yvelines (78)', 'value' => '78'],
        ]);
    }
}