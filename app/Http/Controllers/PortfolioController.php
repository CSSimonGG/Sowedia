<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;

class PortfolioController extends Controller
{
    /**
     * Display portfolio page
     */
    public function index($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return portfolio page
        return view('portfolio.portfolio');
    }

    /**
     * Display project sowedia page
     */
    public function sowedia($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return project sowedia page
        return view('portfolio.sowedia');
    }

    /**
     * Display project telecombinatie page
     */
    public function telecombinatie($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return project telecombinatie page
        return view('portfolio.telecombinatie');
    }
    
    /**
     * Display project csr summa college page
     */
    public function summa($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return project csr summa college page
        return view('portfolio.csr-summa-college');
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
    public function store(StorePortfolioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
