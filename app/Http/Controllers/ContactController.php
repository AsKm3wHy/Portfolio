<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'fullName' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string'],
        ]);

        $normalizedData = [
            'name' => $data['name'] ?? $data['fullName'] ?? '',
            'fullName' => $data['name'] ?? $data['fullName'] ?? '',
            'email' => $data['email'],
            'message' => $data['message'],
        ];

        try {
            Mail::to(config('mail.from.address', 'contact@example.com'))->send(new ContactFormMail($normalizedData));
        } catch (\Throwable $e) {
            Log::error('Contact mail failed to send.', [
                'exception' => $e,
            ]);
        }

        return redirect()->route('contact.show')->with('contact', $normalizedData);
    }
}
