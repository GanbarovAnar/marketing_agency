<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function addNewsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect('/');
    }


    public function emails()
    {
        $emails = Newsletter::orderBy('created_at', 'asc')->get();

        return view('emails', [
            'emails' => $emails
        ]);
    }
}
