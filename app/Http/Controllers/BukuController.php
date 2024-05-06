<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $buku;
    public function __construct()
    {
        $this->buku = new Buku();
    }

    public function index()
    {

        // $data = DB::table('buku')
        // // ->orWhere('jumlah', 'LIKE', "%$cari%") // inii buat nyari lebihdari satu field table database
        // ->paginate(5);


        $data = Buku::all();
        return view('buku.index', compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // ngabil data keseluruhan dari table kategori
        $kategori = Kategori::all();
        return view('buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules =[
            //maX:ukuran_file(kb)
            'sampul'=>'required|mimes:jpg,png|max:201',
            'judul'=>'required|max:20'

        ];
        $messages = [
            'required' => ':attribute gak boleh kosong maseeh',
            'min' => ':attribute minimal harus 3 huruf',
            'max' => ':attribute ukuran/jumlah tidak sesuai',
            'mimes' => ':attribute ekstensi file tidak didukung, silahkan gunakan (.jpg/.png)'
        ];

        $this -> validate($request,$rules,$messages);

        // dd($request->all());
        // rename nama gambar
        // $gambar = getClientOriginalExtension();
        $gambar = $request->sampul;
        // time() buat ngasih tahu waktu nya random
        // rand() buat ngasih tau kode" random
        // $namaFile = buat bikin yang sampul buku
        $namaFile = time() . rand() . "." . $gambar->getClientOriginalExtension();
        $this->buku->sampul = $namaFile;
        // $this->nama_table = $request->nama dari formnya
        $this->buku->judul = $request->judul;
        $this->buku->penulis = $request->penulis;
        $this->buku->deskripsi = $request->deskripsi;
        $this->buku->kategori_id = $request->kategori;
        // pindahllan
        $gambar->move(public_path().'/upload', $namaFile);
        $this->buku->save();

        return redirect()->route('books');
        // getClientOriginalExtension() ini adalah untuk  mengambil format file yang diupload, misal jpg atau png

    }

    /**
     * Display the specified resource.
     */
    public function show($buku)
    {
        $buku = Buku::findOrFail($buku);
        //  data ke kirim atau gk (method dd)
        // dd($kategori);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}