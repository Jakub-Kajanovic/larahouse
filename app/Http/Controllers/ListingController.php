<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    public function index()
    {
        return inertia('Listing/Index',[
            'listings' => Listing::all(),
        ]);
    }


    public function create()
    {
        return inertia('Listing/Create');

    }

    public function store(Request $request)
    {
        Listing::create($request->validate([
            'beds' => 'required|integer|min:0|max:20',
            'baths' => 'required|integer|min:0|max:20',
            'area' => 'required|integer|min:15|max:1500',
            'city' => 'required|string|min:3|max:50',
            'code' => 'required|string|min:1|max:50',
            'street_nr' => 'required|integer|min:1|max:1000',
            'price' => 'required|integer|min:10000|max:10000000',
            'street' => 'required|string|min:3|max:50',
        ]));

        return redirect()->route('listing.index')->with('success', 'Your listing has been created!.');
    }

    public function show(Listing $listing)
    {
        return inertia('Listing/Show',[
            'listing' => $listing,
        ]);
    }


    public function edit(Listing $listing)
    {
        return inertia('Listing/Edit',[
            'listing' => $listing,
        ]);
    }


    public function update(Request $request, Listing $listing)
    {
       $listing->update($request->validate([
            'beds' => 'required|integer|min:0|max:20',
            'baths' => 'required|integer|min:0|max:20',
            'area' => 'required|integer|min:15|max:1500',
            'city' => 'required|string|min:3|max:50',
            'code' => 'required|string|min:1|max:50',
            'street_nr' => 'required|integer|min:1|max:1000',
            'price' => 'required|integer|min:10000|max:10000000',
            'street' => 'required|string|min:3|max:50',
        ]));

        return redirect()->route('listing.index')->with('success', 'Your listing has been updated!.');
    }


    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->back()->with('success', 'Your listing has been deleted!.');
    }
}
