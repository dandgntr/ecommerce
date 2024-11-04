<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // Sesuaikan dengan nama view form kontak Anda
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Kirim email atau simpan pesan ke database
        Mail::send('emails.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ], function ($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('admin@example.com')->subject('New Contact Message');
        });

        return back()->with('success', 'Pesan Anda telah dikirim.');
    }
}
