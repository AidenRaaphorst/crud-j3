<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use App\Models\MerchItem;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = MerchItem::all();
        return View("merch.index", ['items' => $items]);
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
    public function store(Request $request)
    {
        $invoice = new Invoice();
        $invoice->address = $request->input('address');
        $invoice->zipcode = $request->input('zipcode');
        $invoice->merch_id = $request->input('merch-id');
        $invoice->user_id = Auth::id();

        $invoice->save();

        return redirect()->route('merch.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = MerchItem::find($id);
        return view('merch.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
