<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPeserta extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function allData()
    {
        return DB::table('data_pesertas')->get();
    }

    public function detailData($id)
    {
        return DB::table('data_pesertas')->where('id', $id)->first();
    }

    public function addData($data)
    {
        DB::table('data_pesertas')->insert($data);
    }

    public function editData($id, $data)
    {
        DB::table('data_pesertas')
            ->where('id', $id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('data_pesertas')
            ->where('id', $id)
            ->delete();
    }
}
