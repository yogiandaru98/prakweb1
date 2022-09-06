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
            'created_at'                 => 'Time::now()',
            'updated_at'                 => '',
        ],
        [
            'npm' => '2017051061',
            'nama' => 'MUHAY',
            'alamat' => 'Bandar Lampung',
            'created_at'                 => 'Time::now()',
            
        ],
        [
            'npm' => '2017051060',
            'nama' => 'JOJO',
            'alamat' => 'Metro',
            'created_at'                 => 'Time::now()',
        ]
        ];
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        
    }
    
}