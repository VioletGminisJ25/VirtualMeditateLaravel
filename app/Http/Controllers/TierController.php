<?php

namespace App\Http\Controllers;

use App\Models\Tier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TierRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tiers = Tier::paginate();

        return view('tier.index', compact('tiers'))
            ->with('i', ($request->input('page', 1) - 1) * $tiers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tier = new Tier();

        return view('tier.create', compact('tier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TierRequest $request): RedirectResponse
    {
        Tier::create($request->validated());

        return Redirect::route('tiers.index')
            ->with('success', 'Tier created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tier = Tier::find($id);

        return view('tier.show', compact('tier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tier = Tier::find($id);

        return view('tier.edit', compact('tier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TierRequest $request, Tier $tier): RedirectResponse
    {
        $tier->update($request->validated());

        return Redirect::route('tiers.index')
            ->with('success', 'Tier updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Tier::find($id)->delete();

        return Redirect::route('tiers.index')
            ->with('success', 'Tier deleted successfully');
    }
}
