<?php

namespace App\Http\Controllers;

use App\Models\Terms;
use App\Http\Requests\StoreTermsRequest;
use App\Http\Requests\UpdateTermsRequest;

class TermsController extends Controller
{
    /**
     * Display terms and conditions page
     */
    public function index($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return portfolio page
        return view('terms');
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
    public function store(StoreTermsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Terms $terms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terms $terms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTermsRequest $request, Terms $terms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terms $terms)
    {
        //
    }
}
