<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

public function Contact()
{
    return view('Contact');
}
/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
public function ContactPost(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);
    Contact::create($request->all());
    return back()->with('success', 'Merci de nous avoir contacté!');
}
}
