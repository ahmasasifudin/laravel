<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;

class GenerateController extends Controller
{
    public function tampilProcessImage()
    {
        return view('/dashboard/qc-in/image');
    }

    public function processImage(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Menggunakan Tesseract OCR untuk mengenali teks dari gambar
        $ocrHasil = (new TesseractOCR($request->file('image')->getPathname()))
            ->lang('eng') // Menggunakan bahasa Inggris (ganti sesuai bahasa gambar Anda)
            ->run();

        // return redirect('/dashboard/qc-in/image', compact('ocrHasil'));
        // return view('/dashboard/qc-in/image', compact('ocrHasil'));
        return view('dashboard.qc-in.image', compact('ocrHasil'));
    }

    public function generate(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Menggunakan Tesseract OCR untuk mengenali teks dari gambar
        $ocrHasil = (new TesseractOCR($request->file('image')->getPathname()))
            ->lang('eng') // Menggunakan bahasa Inggris (ganti sesuai bahasa gambar Anda)
            ->run();

        // return redirect('/dashboard/qc-in/image', compact('ocrHasil'));
        // return view('/dashboard/qc-in/image', compact('ocrHasil'));
        return view('dashboard.qc-in', compact('ocrHasil'));
    }
}
