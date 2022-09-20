<?php

namespace App\Database\Seeds;

use App\Models\Mahasiswa as ModelsMahasiswa;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Mahasiswa extends Seeder{
    public function run(){
        $faker = Factory::create('id_ID');       
        $mahasiswa = new ModelsMahasiswa();
        for($i = 0 ; $i < 100 ; $i++){
            $mahasiswa->save(
                [
                    'npm' => $faker->unique()->numberBetween(1000000000, 9999999999),
                    'nama' => $faker->name(),
                    'alamat' => $faker->address(),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}

// $data = [
//     [

//     'npm' => '2017051062',
//     'nama' => 'YOGI ANDARU',
//     'alamat' => 'Metro',
//     'created_at'                 => date('Y-m-d H:i:s'),
//     'updated_at'                 => '',
// ],
// [
//     'npm' => '2017051061',
//     'nama' => 'MUHAY',
//     'alamat' => 'Bandar Lampung',
//     'created_at'                 => date('Y-m-d H:i:s'),

// ],
// [
//     'npm' => '2017051060',
//     'nama' => 'JOJO',
//     'alamat' => 'Metro',
//     'created_at'                 => date('Y-m-d H:i:s'),
// ]
// ];
// (new ModelsMahasiswa())->insertBatch($data);<!-- <?php