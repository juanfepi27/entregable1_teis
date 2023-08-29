<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class OffersController extends Controller
{
    public function index(): View
    {
        return view('offers.index');
    }

    public function create(): View
    {
        return view('offers.create');
    }

    public function insert(Request $request): RedirectResponse
    {
        $request->validate([
            'publishDate' => ['required', 'date'],
            'price' => ['required', 'decimal:0,2'],
            'status' => ['required', Rule::in(['SENT', 'ACCEPTED', 'REJECTED'])],
        ]);

        Offer::create($request->only('publishDate', 'price', 'status'));

        session()->flash('success', 'Created Offer!');

        return back();
    }

    public function list(): View
    {
        $viewData = [];
        $viewData['offers'] = Offer::all();

        return view('offers.list')->with('viewData', $viewData);
    }

    public function delete(int $id): RedirectResponse
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();

        return redirect()->route('offers.list');
    }

    public function show(int $id): View
    {
        $viewData = [];
        $offer = Offer::findOrFail($id);
        $viewData['offer'] = $offer;
        $publishDate = strtotime($offer['publishDate']);
        $viewData['formatDate'] = date('Y/m/d h:i A', $publishDate);

        return view('offers.show')->with('viewData', $viewData);
    }
}
