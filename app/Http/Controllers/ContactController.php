<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('welcome');
    }

    public function sendEmail(Request $request)
    {
    // Validasi input
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect()->route('contact.form')
            ->withErrors($validator)
            ->withInput();
    }

    // Kirim email
    try {
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('wahidnurrohman5544@gmail.com')
                    ->subject('Pesan dari ' . $request->name)
                    ->from($request->email);
        });
    } catch (\Exception $e) {
        return redirect()->route('contact.form')->with('error', 'Gagal mengirim pesan: ' . $e->getMessage());
    }

    return redirect()->route('contact.form')->with('success', 'Pesan berhasil terkirim!');
    }

}



