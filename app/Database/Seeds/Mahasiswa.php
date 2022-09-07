<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [

            'npm' => '2017051062',
            'nama' => 'YOGI ANDARU',
            'alamat' => 'Metro',
            'created_at'                 => date('Y-m-d H:i:s'),
            'updated_at'                 => '',
        ],
        [
            'npm' => '2017051061',
            'nama' => 'MUHAY',
            'alamat' => 'Bandar Lampung',
            'created_at'                 => date('Y-m-d H:i:s'),

        ],
        [
            'npm' => '2017051060',
            'nama' => 'JOJO',
            'alamat' => 'Metro',
            'created_at'                 => date('Y-m-d H:i:s'),
        ]
        ];
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}