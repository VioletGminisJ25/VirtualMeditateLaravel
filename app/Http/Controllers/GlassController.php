<?php

namespace App\Http\Controllers;

use App\Models\Glass;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GlassRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GlassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $glasses = Glass::paginate();

        return view('glass.index', compact('glasses'))
            ->with('i', ($request->input('page', 1) - 1) * $glasses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $glass = new Glass();

        return view('glass.create', compact('glass'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GlassRequest $request): RedirectResponse
    {
        Glass::create($request->validated());

        return Redirect::route('glasses.index')
            ->with('success', 'Glass created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $glass = Glass::find($id);

        return view('glass.show', compact('glass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $glass = Glass::find($id);

        return view('glass.edit', compact('glass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GlassRequest $request, Glass $glass): RedirectResponse
    {
        $glass->update($request->validated());

        return Redirect::route('glasses.index')
            ->with('success', 'Glass updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Glass::find($id)->delete();

        return Redirect::route('glasses.index')
            ->with('success', 'Glass deleted successfully');
    }
}
