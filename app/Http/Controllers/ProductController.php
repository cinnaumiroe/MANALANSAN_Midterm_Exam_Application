<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function restaurants() {
        $restos = [
            'Yayoi',
            'Chaya',
            'Tenya',
            'Botejyu',
            'Sumosam'
        ];

        return view('resto', ['restos' => $restos]);
    }
}
