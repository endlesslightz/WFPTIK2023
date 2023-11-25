<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class UsersSeeder extends Seeder
{
    public function run()
    {


        
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i <100 ; $i++) { 
            $data = [
                'nama'=>  $faker->name,
                'alamat'=>$faker->address,
                'tanggal_lahir'=>$faker->date($format='Y-m-d', $max='now'),
                'tempat_lahir'=>$faker->city,
                'jenis_kelamin'=>$faker->randomElement(['laki-laki','perempuan']),
                'telepon'=> $faker->phoneNumber,
                'avatar'=>$faker->imageUrl($width =640, $height =480),
                'username' => $faker->username,
                'password' => $faker->password,
                'email'    => $faker->email,
                'created_at'=> Time::now(),
                'updated_at'=> Time::now(),
            ];
            $this->db->table('users')->insert($data);        }


        $data = [
            'nama'=> 'Budi Waluyo',
            'alamat'=>'Jl. Kenangan',
            'tanggal_lahir'=>'2022-09-09',
            'tempat_lahir'=>'Solo',
            'jenis_kelamin'=>'laki-laki',
            'telepon'=> '13120312',
            'avatar'=>'123.jpg',
            'username' => 'admin',
            'password' => '21232f297a57a5a743894a0e4a801fc3',
            'email'    => 'darth@theempire.com',
            'created_at'=> Time::now(),
            'updated_at'=> Time::now(),
        ];
        $this->db->table('users')->insert($data);

        // $this->db->query('INSERT INTO userss (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        // $this->db->table('userss')->insertBatch($data);
    }
}
