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
                    'deskripsi' => $faker->text(100),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}



// $data = [
//     [
//         'npm' => '1234567890',
//         'nama' => 'John Doe',
//         'alamat' => 'Jl. Lorem Ipsum',
//         'created_at' => date('Y-m-d H:i:s'),
//         'updated_at' => date('Y-m-d H:i:s'),
//     ],
//     [
//         'npm' => '0987654321',
//         'nama' => 'Jane Doe',
//         'alamat' => 'Jl. Lorem Ipsum',
//         'created_at' => date('Y-m-d H:i:s'),
//         'updated_at' => date('Y-m-d H:i:s'),
//     ],
// ];
// (new ModelsMahasiswa())->insertBatch($data);