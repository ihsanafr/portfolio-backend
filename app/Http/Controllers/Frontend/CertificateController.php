<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->get();
        return view('frontend.certificates.index', compact('certificates'));
    }
}