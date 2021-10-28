<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'nik' => '198273',
            'nama' => 'fahruz',
            'jns_kelamin' => 'Laki-Laki',
            'tmpt_lahir' => 'Kendal',
            'tgl_lahir' => '03-02-2001',
            'alamat' => 'jl Pangeran Djuminah no 25',
            'jns_cek' => 'Rapid',
            'hasil' => 'Negatif'

        ]
    );

    DB::table('pasien')->insert([
        'nik' => '738201',
        'nama' => 'Nia',
        'jns_kelamin' => 'Perempuan',
        'tmpt_lahir' => 'Jepara',
        'tgl_lahir' => '13-06-2002',
        'alamat' => 'Jl Pakuojo Selatan no 29',
        'jns_cek' => 'Swap',
        'hasil' => 'Negatif'

        ]
    );


    DB::table('pasien')->insert([
        'nik' => '3456321',
        'nama' => 'Hanung',
        'jns_kelamin' => 'Laki-Laki',
        'tmpt_lahir' => 'Kendal',
        'tgl_lahir' => '09-12-2000',
        'alamat' => 'Jl Boja no 19',
        'jns_cek' => 'Rapid',
        'hasil' => 'Negatif'

          ]
    );

    DB::table('pasien')->insert([
        'nik' => '771823',
        'nama' => 'Rezha',
        'jns_kelamin' => 'Laki-Laki',
        'tmpt_lahir' => 'Demak',
        'tgl_lahir' => '09-05-2001',
        'alamat' => 'Dk Sawungan no 10',
        'jns_cek' => 'Rapid',
        'hasil' => 'Negatif'

          ]
    );

    DB::table('pasien')->insert([
        'nik' => '998212',
        'nama' => 'Sari',
        'jns_kelamin' => 'Perempuan',
        'tmpt_lahir' => 'Kendal',
        'tgl_lahir' => '01-04-2001',
        'alamat' => 'Ds Kaliwungu no 25',
        'jns_cek' => 'Rapid',
        'hasil' => 'Negatif'

        ]
    );

    DB::table('pasien')->insert([
        'nik' => '872613',
        'nama' => 'Daniel',
        'jns_kelamin' => 'Laki-Laki',
        'tmpt_lahir' => 'Semarang',
        'tgl_lahir' => '03-09-1992',
        'alamat' => 'Jl Kembang lama no 01',
        'jns_cek' => 'Swap',
        'hasil' => 'Positif'

          ]
    );

    DB::table('pasien')->insert([
        'nik' => '112321',
        'nama' => 'Lena',
        'jns_kelamin' => 'Perempuan',
        'tmpt_lahir' => 'Semarang',
        'tgl_lahir' => '18-07-2002',
        'alamat' => 'Jl Manggis no 12',
        'jns_cek' => 'Rapid',
        'hasil' => 'Positif'

          ]
    );

    DB::table('pasien')->insert([
        'nik' => '665212',
        'nama' => 'Keny',
        'jns_kelamin' => 'Laki-Laki',
        'tmpt_lahir' => 'Jakarta',
        'tgl_lahir' => '09-02-2001',
        'alamat' => 'Jl Kemayoran lama no 11',
        'jns_cek' => 'Swap',
        'hasil' => 'Negatif'

          ]
    );

    DB::table('pasien')->insert([
        'nik' => '998212',
        'nama' => 'Lailatul',
        'jns_kelamin' => 'Perempuan',
        'tmpt_lahir' => 'Jepara',
        'tgl_lahir' => '29-12-1999',
        'alamat' => 'Jl Raden Patah no 182',
        'jns_cek' => 'Rapid',
        'hasil' => 'Positif'

          ]
    );

    DB::table('pasien')->insert([
        'nik' => '55412',
        'nama' => 'Intan',
        'jns_kelamin' => 'Perempuan',
        'tmpt_lahir' => 'Kendal',
        'tgl_lahir' => '03-02-2001',
        'alamat' => 'Jl Pasuruan no 112',
        'jns_cek' => 'Swap',
        'hasil' => 'Positif'

          ]
    );
    }
}
