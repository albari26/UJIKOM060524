<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Kategori extends Model
{
    use HasFactory;
    // ngasih tau laravel buat yang
    // dipake itu tabel kategori bukan kategoris pake s
    protected $table = "kategori";
    // buat ngilangin created_at dan update_at

    //ini buat ngasih tau nama tabel yang dipake
    //melupakan konsep plular dan singular
    public $timestamps = false;
    protected $fillable = ['nama_kategori'];
    public function buku(){
        return $this->hasMany(Buku::class, 'kategori_id',  'id');
    }
}
