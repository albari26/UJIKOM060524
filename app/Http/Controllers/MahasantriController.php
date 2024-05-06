<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\DsPairStub;

class MahasantriController extends Controller
    {
        public function index($id)
        {
            $idd = $id; 
    
            $mahasantri = [
                [
                    'id' => 1,
                    'nama' => 'Samsul'
                ],
                [
                    'id' => 2,
                    'nama' => 'Asep'
                ],
                [
                    'id' => 3,
                    'nama' => 'Bopak'
                ],
            ];
    
            return view('mahasantri/edit', compact('mahasantri', 'cari')); #untuk redirect
    
        }

    }

    public function cari(Request $request){
        $cari = $request
        return view ('mahasantri.cari', compact('cari'));
    



        















// public function index($mahasantri)
// {
//     $mahasantri =[ [
//         "id" => 1,
//         "nama" => "Ahmad Syaifullah"
//     ],
//     [
//         "id" => 2,
//         "nama" => "asep"
//     ],
//     [
//         "id" => 3,
//         "nama" => "bopak"
//     ],
// ];
//         return view('mahasantri.index',compact('mahasantri'));
//     }
// }
    // public function getid($id, $nama)
    // {
    //     $idd = $id;
        
    //     // return view('mahasanteri/edit', compact('idd'));

    //     return view('mahasanteri.edit', [
    //         'id' => $idd,
    //         'asep' => $nama
    //         ]);
        
    // }
    
    
    

