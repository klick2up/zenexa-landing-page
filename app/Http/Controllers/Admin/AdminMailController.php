<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\MarketingMail;
use Illuminate\Support\Facades\Mail;

class AdminMailController extends Controller
{
    public function index()
    {
        return view('admin.mail.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'to_email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            $recipientData = ['email' => $request->to_email, 'name' => 'Customer'];
            \App\Jobs\SendQuickMailJob::dispatchSync($recipientData, $request->subject, $request->message);

            return redirect()->route('admin.mail')
                ->with('success', 'Quick Mail sent successfully to ' . $request->to_email . '.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email. Error: ' . $e->getMessage());
        }
    }
}
