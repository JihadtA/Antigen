<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasien')->insert([
            'no_lab'        =>  'A001',
            'no_rm'         =>  '872631',
            'nama'          =>  'fahruz',
            'nama_dok'      =>  'Dr. Tirta',
            'jns_kelamin'   =>  'Laki-Laki',
            'umur'          =>  '20',
            'tgl_lahir'     =>  '03/02/2001',
            'alamat'        =>  'jl Pangeran Djuminah no 25',
            'no_hp'         =>  '089121738213',
            'lokasi'        =>  'laboratorium',
            'tgl_tes'       =>  '09/11/2021',
            'igm'           =>  'Negatif',
            'igg'           =>  'Negatif',
            'metode'        =>  'Rapid',

        ]
    );

    DB::table('pasien')->insert([
        'no_lab'            =>  'A0001',
        'no_rm'             =>  '1092827',
        'nama'              =>  'Nia',
        'nama_dok'          =>  'Dr Durjana',
        'jns_kelamin'       =>  'Perempuan',
        'umur'              =>  '19',
        'tgl_lahir'         =>  '13/06/2002',
        'alamat'            =>  'Jl Pakuojo Selatan no 29',
        'no_hp'             =>  '0982132123',
        'lokasi'            =>  'laboratorium',
        'tgl_tes'           =>  '11/11/2021',
        'igm'               =>  'Negatif',
        'igg'               =>  'Negatif',
        'metode'            =>  'Rapid',

        ]
    );


    DB::table('pasien')->insert([
        'no_lab'            =>  'A0002',
        'no_rm'             =>  '8765216',
        'nama'              =>  'Hanung',
        'nama_dok'          =>  'Dr Kusmanto',
        'jns_kelamin'       =>  'Laki-Laki',
        'umur'              =>  '21',
        'tgl_lahir'         =>  '09/12/2000',
        'alamat'            =>  'Jl Boja no 19',
        'no_hp'             =>  '0812313214',
        'lokasi'            =>  'Laboratorium',
        'tgl_tes'           =>  '10/11/2021',
        'igm'               =>  'Negatif',
        'igg'               =>  'Negatif',
        'metode'            =>  'Swab',

          ]
    );

    DB::table('pasien')->insert([
        'no_lab'            =>  'A0002',
        'no_rm'             =>  '8872313',
        'nama'              =>  'Rezha',
        'nama_dok'          =>  'Dr Suseno',
        'jns_kelamin'       =>  'Laki-Laki',
        'umur'              =>  '20',
        'tgl_lahir'         =>  '09/05/2001',
        'alamat'            =>  'Dk Sawungan no 10',
        'no_hp'             =>  '0818762131',
        'lokasi'            =>  'Laboratorium',
        'tgl_tes'           =>  '08/11/2021',
        'igm'               =>  'Negatif',
        'igg'               =>  'Negatif',
        'metode'            =>  'Rapid',

          ]
    );

    DB::table('pasien')->insert([
        'no_lab'            =>  'A0002',
        'no_rm'             =>  '998212',
        'nama'              =>  'Sari',
        'nama_dok'          =>  'Dr Mujiyono',
        'jns_kelamin'       =>  'Perempuan',
        'umur'              =>  '20',
        'tgl_lahir'         =>  '01/04/2001',
        'alamat'            =>  'Ds Kaliwungu no 25',
        'no_hp'             =>  '0818803219',
        'lokasi'            =>  'Laboratorium',
        'tgl_tes'           =>  '08/11/2021',
        'igm'               =>  'Negatif',
        'igg'               =>  'Negatif',
        'metode'            =>  'Rapid'

        ]
    );

    DB::table('pasien')->insert([
        'no_lab'            =>  'A0002',
        'no_rm'             =>  '872613',
        'nama'              =>  'Daniel',
        'nama_dok'          =>  'Dr Arjuna',
        'jns_kelamin'       =>  'Laki-Laki',
        'umur'              =>  '28',
        'tgl_lahir'         =>  '03/09/1992',
        'alamat'            =>  'Jl Kembang lama no 01',
        'no_hp'             =>  '0819321321',
        'lokasi'            =>  'Laboratorium',
        'tgl_tes'           =>  '08/11/2021',
        'igm'               =>  'Positif',
        'igg'               =>  'Positif',
        'metode'            =>  'Swab'

          ]
    );

    DB::table('pasien')->insert([
        'no_lab'            =>  'A0003',
        'no_rm'             =>  '112321',
        'nama'              =>  'Lena',
        'nama_dok'          =>  'Dr Roy',
        'jns_kelamin'       =>  'Perempuan',
        'umur'              =>  '19',
        'tgl_lahir'         =>  '18-07-2002',
        'alamat'            =>  'Jl Manggis no 12',
        'no_hp'             =>  '0834567728',
        'lokasi'            =>  'Laboratorium',
        'tgl_tes'           =>  '09/11/2021',
        'igm'               =>  'Positif',
        'igg'               =>  'Positif',
        'metode'            =>  'Rapid'

          ]
    );

    DB::table('pasien')->insert([
        'no_lab'            =>  'A0003',
        'no_rm'             =>  '665212',
        'nama'              =>  'Keny',
        'nama_dok'          =>  'Dr Paul',
        'jns_kelamin'       =>  'Laki-Laki',
        'umur'              =>  '20',
        'tgl_lahir'         =>  '09/02/2001',
        'alamat'            =>  'Jl Kemayoran lama no 11',
        'no_hp'             =>  '0836738217',
        'lokasi'            =>  'Laboratorium',
        'tgl_tes'           =>  '09/11/2021',
        'igm'               =>  'Negatif',
        'igg'               =>  'Negatif',
        'metode'            =>  'Swab'

          ]
    );

    DB::table('pasien')->insert([
        'no_lab'            =>  'A0003',
        'no_rm'             =>  '998212',
        'nama'              =>  'Lailatul',
        'nama_dok'          =>  'Dr Heri',
        'jns_kelamin'       =>  'Perempuan',
        'umur'              =>  '21',
        'tgl_lahir'         =>  '29/12/1999',
        'alamat'            =>  'Jl Raden Patah no 182',
        'no_hp'             =>  '087831721',
        'lokasi'            =>  'Laboratorium',
        'tgl_tes'           =>  '11/11/2021',
        'igm'               =>  'Positif',
        'igg'               =>  'Positif',
        'metode'            =>  'Rapid'

          ]
    );

    DB::table('pasien')->insert([
        'no_lab'            =>  'A0001',
        'no_rm'             =>  '55412',
        'nama'              =>  'Intan',
        'nama_dok'          =>  'Dr Keny',
        'jns_kelamin'       =>  'Perempuan',
        'umur'              =>  '19',
        'tgl_lahir'         =>  '03/02/2001',
        'alamat'            =>  'Jl Pasuruan no 112',
        'no_hp'             =>  '087831721',
        'lokasi'            =>  'Laboratorium',
        'tgl_tes'           =>  '10/11/2021',
        'igm'               =>  'Positif',
        'igg'               =>  'Positif',
        'metode'            =>  'Swab'

          ]
    );
    }
}
