<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use App\Http\Requests\StorePrivacyRequest;
use App\Http\Requests\UpdatePrivacyRequest;

class PrivacyController extends Controller
{
    /**
     * Display privacy page
     */
    public function index($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return privacy page
        return view('privacy');
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
    public function store(StorePrivacyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Privacy $privacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrivacyRequest $request, Privacy $privacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Privacy $privacy)
    {
        //
    }
}
