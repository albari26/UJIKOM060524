<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kategori extends Model
{
    use HasFactory;

    //ngasih tau laravel tabel yang saya pakai bukan kategoris
    //tapi kategori maksdunya laravel default nya 
    //plural(jama) dan singular(single)jadi saya ganti 
    //jadi kategori dari kategoris
    protected $table = "kategori";
    //buat ngilangin create_at dan update_at dan delete_at
    public $timestamps = false;
}
