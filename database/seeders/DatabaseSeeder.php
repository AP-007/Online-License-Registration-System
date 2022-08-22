<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\District;
use App\Models\State;
use App\Models\Zone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            'Province 1',
            'Province 2',
            'Bagmati Province',
            'Gandaki Province',
            'Lumbini Province',
            'Karnali Province',
            'Sudurpashchim Province',
        ];

        $categories = [
            [
                'symbol' => 'A',
                'name' => 'Motorcycle, Scooter, Moped'
            ],
            [
                'symbol' => 'B',
                'name' => 'Car, jeep, Delivery Van'
            ],[
                'symbol' => 'C',
                'name' => 'Tempo, Autorickshaw'
            ],[
                'symbol' => 'C1',
                'name' => 'ERickshaw'
            ],[
                'symbol' => 'D',
                'name' => 'Powertiller'
            ],[
                'symbol' => 'E',
                'name' => 'Tractor, Trailer Tractor (Low Bed)'
            ],[
                'symbol' => 'H',
                'name' => 'Road Toller, Dozer'
            ],[
                'symbol' => 'H1',
                'name' => 'DOZER'
            ],[
                'symbol' => 'H2',
                'name' => 'ROAD ROLLER'
            ],[
                'symbol' => 'I',
                'name' => 'Crane, Fire brigade, Loader'
            ],[
                'symbol' => 'I1',
                'name' => 'CRANE, MOBILE CRANE, CRANE MOUNTED TRUCK'
            ],[
                'symbol' => 'I2',
                'name' => 'FIRE BRIGADE'
            ],[
                'symbol' => 'I3',
                'name' => 'LOADER'
            ],[
                'symbol' => 'J1',
                'name' => 'EXCAVATOR'
            ],[
                'symbol' => 'J2',
                'name' => 'BACKHOE LOADER'
            ],[
                'symbol' => 'J3',
                'name' => 'GRADER'
            ],[
                'symbol' => 'J4',
                'name' => 'FORKLIFT'
            ],[
                'symbol' => 'J5',
                'name' => 'Other'
            ],[
                'symbol' => 'K',
                'name' => 'Scooter, Moped'
            ],
        ];
        $districts = [
            [
                "id"=> 1,
                "name"=> "Bhojpur",
                "zone_id"=> 7
            ],
            [
                "id"=> 2,
                "name"=> "Dhankuta",
                "zone_id"=> 7
            ],
            [
                "id"=> 3,
                "name"=> "Ilam ",
                "zone_id"=> 10
            ],
            [
                "id"=> 4,
                "name"=> "Jhapa ",
                "zone_id"=> 10
            ],
            [
                "id"=> 5,
                "name"=> "Khotang ",
                "zone_id"=> 13
            ],
            [
                "id"=> 6,
                "name"=> "Morang ",
                "zone_id"=> 7
            ],
            [
                "id"=> 7,
                "name"=> "Okhaldhunga ",
                "zone_id"=> 13
            ],
            [
                "id"=> 8,
                "name"=> "Panchthar ",
                "zone_id"=> 10
            ],
            [
                "id"=> 9,
                "name"=> "Sankhuwasabha ",
                "zone_id"=> 7
            ],
            [
                "id"=> 10,
                "name"=> "Solukhumbu ",
                "zone_id"=> 13
            ],
            [
                "id"=> 11,
                "name"=> "Sunsari ",
                "zone_id"=> 7
            ],
            [
                "id"=> 12,
                "name"=> "Taplejung ",
                "zone_id"=> 10
            ],
            [
                "id"=> 13,
                "name"=> "Terhathum ",
                "zone_id"=> 7
            ],
            [
                "id"=> 14,
                "name"=> "Udayapur",
                "zone_id"=> 13
            ],
            [
                "id"=> 15,
                "name"=> "\tBara",
                "zone_id"=> 11
            ],
            [
                "id"=> 16,
                "name"=> "Dhanusha",
                "zone_id"=> 5
            ],
            [
                "id"=> 17,
                "name"=> "Mahottari",
                "zone_id"=> 5
            ],
            [
                "id"=> 18,
                "name"=> "Parsa",
                "zone_id"=> 11
            ],
            [
                "id"=> 19,
                "name"=> "Rautahat",
                "zone_id"=> 11
            ],
            [
                "id"=> 20,
                "name"=> "Saptari",
                "zone_id"=> 13
            ],
            [
                "id"=> 21,
                "name"=> "Sarlahi",
                "zone_id"=> 5
            ],
            [
                "id"=> 22,
                "name"=> "Siraha",
                "zone_id"=> 13
            ],
            [
                "id"=> 23,
                "name"=> "Bhaktapur",
                "zone_id"=> 1
            ],
            [
                "id"=> 24,
                "name"=> "Chitwan ",
                "zone_id"=> 11
            ],
            [
                "id"=> 25,
                "name"=> "Dhading ",
                "zone_id"=> 1
            ],
            [
                "id"=> 26,
                "name"=> "Dolakha ",
                "zone_id"=> 5
            ],
            [
                "id"=> 27,
                "name"=> "Kathmandu ",
                "zone_id"=> 1
            ],
            [
                "id"=> 28,
                "name"=> "Kavrepalanchok ",
                "zone_id"=> 1
            ],
            [
                "id"=> 29,
                "name"=> "Lalitpur ",
                "zone_id"=> 1
            ],
            [
                "id"=> 30,
                "name"=> "Makwanpur ",
                "zone_id"=> 11
            ],
            [
                "id"=> 31,
                "name"=> "Nuwakot ",
                "zone_id"=> 1
            ],
            [
                "id"=> 32,
                "name"=> "Ramechhap ",
                "zone_id"=> 5
            ],
            [
                "id"=> 33,
                "name"=> "Rasuwa ",
                "zone_id"=> 1
            ],
            [
                "id"=> 34,
                "name"=> "Sindhuli ",
                "zone_id"=> 5
            ],
            [
                "id"=> 35,
                "name"=> "Sindhupalchok ",
                "zone_id"=> 1
            ],
            [
                "id"=> 36,
                "name"=> "Baglung",
                "zone_id"=> 3
            ],
            [
                "id"=> 37,
                "name"=> "Gorkha",
                "zone_id"=> 4
            ],
            [
                "id"=> 38,
                "name"=> "Kaski",
                "zone_id"=> 4
            ],
            [
                "id"=> 39,
                "name"=> "Lamjung",
                "zone_id"=> 4
            ],
            [
                "id"=> 40,
                "name"=> "Manang",
                "zone_id"=> 3
            ],
            [
                "id"=> 41,
                "name"=> "Mustang",
                "zone_id"=> 3
            ],
            [
                "id"=> 42,
                "name"=> "Myagdi",
                "zone_id"=> 3
            ],
            [
                "id"=> 43,
                "name"=> "Nawalparasi",
                "zone_id"=> 8
            ],
            [
                "id"=> 44,
                "name"=> "Parbat",
                "zone_id"=> 3
            ],
            [
                "id"=> 45,
                "name"=> "Syangja",
                "zone_id"=> 4
            ],
            [
                "id"=> 46,
                "name"=> "Tanahun",
                "zone_id"=> 4
            ],
            [
                "id"=> 47,
                "name"=> "Arghakhanchi",
                "zone_id"=> 8
            ],
            [
                "id"=> 48,
                "name"=> "Banke",
                "zone_id"=> 2
            ],
            [
                "id"=> 49,
                "name"=> "Bardiya",
                "zone_id"=> 2
            ],
            [
                "id"=> 50,
                "name"=> "Dang Deukhuri",
                "zone_id"=> 12
            ],
            [
                "id"=> 51,
                "name"=> "Eastern Rukum",
                "zone_id"=> 8
            ],
            [
                "id"=> 52,
                "name"=> "Gulmi",
                "zone_id"=> 8
            ],
            [
                "id"=> 53,
                "name"=> "Kapilvastu",
                "zone_id"=> 8
            ],
            [
                "id"=> 54,
                "name"=> "Parasi",
                "zone_id"=> 8
            ],
            [
                "id"=> 55,
                "name"=> "Palpa",
                "zone_id"=> 8
            ],
            [
                "id"=> 56,
                "name"=> "Pyuthan",
                "zone_id"=> 12
            ],
            [
                "id"=> 57,
                "name"=> "Rolpa",
                "zone_id"=> 12
            ],
            [
                "id"=> 58,
                "name"=> "Rupandehi",
                "zone_id"=> 8
            ],
            [
                "id"=> 59,
                "name"=> "Dailekh",
                "zone_id"=> 6
            ],
            [
                "id"=> 60,
                "name"=> "Dolpa",
                "zone_id"=> 6
            ],
            [
                "id"=> 61,
                "name"=> "Humla",
                "zone_id"=> 6
            ],
            [
                "id"=> 62,
                "name"=> "Jajarkot",
                "zone_id"=> 6
            ],
            [
                "id"=> 63,
                "name"=> "Jumla",
                "zone_id"=> 6
            ],
            [
                "id"=> 64,
                "name"=> "Kalikot",
                "zone_id"=> 6
            ],
            [
                "id"=> 65,
                "name"=> "Mugu",
                "zone_id"=> 6
            ],
            [
                "id"=> 66,
                "name"=> "Salyan",
                "zone_id"=> 12
            ],
            [
                "id"=> 67,
                "name"=> "Surkhet",
                "zone_id"=> 6
            ],
            [
                "id"=> 68,
                "name"=> "Western Rukum",
                "zone_id"=> 6
            ],
            [
                "id"=> 69,
                "name"=> "Achham",
                "zone_id"=> 14
            ],
            [
                "id"=> 70,
                "name"=> "Baitadi",
                "zone_id"=> 9
            ],
            [
                "id"=> 71,
                "name"=> "Bajhang",
                "zone_id"=> 14
            ],
            [
                "id"=> 72,
                "name"=> "Bajura",
                "zone_id"=> 14
            ],
            [
                "id"=> 73,
                "name"=> "Dadeldhura",
                "zone_id"=> 9
            ],
            [
                "id"=> 74,
                "name"=> "Darchula",
                "zone_id"=> 9
            ],
            [
                "id"=> 75,
                "name"=> "Doti",
                "zone_id"=> 14
            ],
            [
                "id"=> 76,
                "name"=> "Kailali",
                "zone_id"=> 14
            ],
            [
                "id"=> 77,
                "name"=> "Kanchanpur",
                "zone_id"=> 9
            ]
        ];

        $zones = [
            [
                'name' => "bagmati",
                'has_office' => 1
            ],[
                'name' => "bheri",
                'has_office' => 1
            ],[
                'name' => "dhawalagiri",
                'has_office' => 1
            ],[
                'name' => "gandaki",
                'has_office' => 1
            ],[
                'name' => "janakpur",
                'has_office' => 1
            ],[
                'name' => "karnali",
                'has_office' => 0
            ],[
                'name' => "koshi",
                'has_office' => 1
            ],[
                'name' => "lumbini",
                'has_office' => 1
            ],[
                'name' => "mahakali",
                'has_office' => 1
            ],[
                'name' => "mechi",
                'has_office' => 1
            ],[
                'name' => "narayani",
                'has_office' => 1
            ],[
                'name' => "rapti",
                'has_office' => 1
            ],[
                'name' => "sagarmatha",
                'has_office' => 1
            ],[
                'name' => "seti",
                'has_office' => 1
            ],

        ];

         \App\Models\User::factory(10)->create();
         foreach ($states as $item) {
             $state = new State;
             $state->name = $item;
             $state->save();
         }
         foreach ($zones as $item) {
             $zone = new Zone;
             $zone->name = $item['name'];
             $zone->has_office = $item['has_office'];
             $zone->save();
         }
         foreach ($categories as $item) {
             $category = new Category;
             $category->name = $item['name'];
             $category->symbol = $item['symbol'];
             $category->save();
         }
         foreach ($districts as $item) {
             $district = new District;
             $district->name = $item['name'];
             $district->zone_id = $item['zone_id'];
             $district->save();
         }
    }
}
