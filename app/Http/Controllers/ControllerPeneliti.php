<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ControllerPeneliti extends Controller
{
    public function api()
    {
        $data['klas'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/kategori/2022/')->json();
        $data['bidang'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/bidangilmu/')->json();
        $data['tema'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/ref_subarkan/')->json();
        $data['luaran'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/luaran/')->json();
        // dd($data);
        return view('/peneliti/add_proposal', $data);
    }

    public function proposal2()
    {
        $data['klas'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/kategori/2022/')->json();
        $data['bidang'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/bidangilmu/')->json();
        $data['tema'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/ref_subarkan/')->json();
        $data['luaran'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/luaran/')->json();
        // dd($data);
        return view('/peneliti/proposal-2', $data);
    }

    public function proposal3()
    {
        $data['klas'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/kategori/2022/')->json();
        $data['bidang'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/bidangilmu/')->json();
        $data['tema'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/ref_subarkan/')->json();
        $data['luaran'] = Http::get('https://litapdimas.kemenag.go.id/index.php/api/luaran/')->json();
        // dd($data);
        return view('/peneliti/proposal-3', $data);
    }
}
