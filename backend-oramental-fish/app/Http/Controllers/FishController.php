<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function index() {
        $ikan = Fish::get();
        return $this->sendJson($ikan, 'Data absensi berhasil ditampilkan.');
    }
}
