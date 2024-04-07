<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;

class ServicesController extends Controller
{
    /**
     * Display services page
     */
    public function index($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return services page
        return view('services.services');
    }

    /**
     * Display service web development
     */
    public function web($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return service web development
        return view('services.web-development');
    }

    /**
     * Display service webshops
     */
    public function webshops($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return service design
        return view('services.webshops');
    }

    /**
     * Display service social media
     */
    public function socialmedia($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return service social media
        return view('services.social-media');
    }

    /**
     * Display service design
     */
    public function design($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return service design
        return view('services.design');
    }

    /**
     * Display service hosting
     */
    public function hosting($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return service hosting
        return view('services.hosting');
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
    public function store(StoreServicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicesRequest $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        //
    }
}
