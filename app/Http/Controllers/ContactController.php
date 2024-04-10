<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display contact page
     */
    public function index($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return contact page
        return view('contact');
    }

    /**
     * Send a contact email
     */
    public function submit(ContactRequest $request)
    {
        Mail::to('simon@sowedia.com')->send(new ContactMail($request->name, $request->company_name, $request->email, $request->phone, $request->contact_subject, $request->budget, $request->domainname_and_hosting, $request->corporate_identity, $request->message, ));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
