<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Http\Requests\StoreReviewsRequest;
use App\Http\Requests\UpdateReviewsRequest;

class ReviewsController extends Controller
{
    /**
     * Display reviews page
     */
    public function index($locale)
    {
         if (!in_array($locale, ['en', 'nl'])) {
            abort(400);
        }

        app()->setLocale($locale);

        // Return reviews page
        return view('reviews');
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
    public function store(StoreReviewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewsRequest $request, Reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews)
    {
        //
    }
}
