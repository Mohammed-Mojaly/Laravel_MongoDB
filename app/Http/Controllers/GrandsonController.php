<?php

namespace App\Http\Controllers;

use App\Models\Grandson;
use Illuminate\Http\Request;

class GrandsonController extends Controller
{

    public function index()
    {
        $sonId = \request()->has('son_id') && \request()->input('son_id') !== '' ? \request()->input('son_id') : null;
        if (!$sonId) {
            $grandsons = collect([]);
            auth()->user()->sons()->each(function ($son) use ($grandsons) {
                $grandsons->add($son->grandsons);
            });

            $grandsons = collect($grandsons->flatten())->paginate(5);
        } else {
            $grandsons = auth()->user()->sons()->with('grandsons')
                ->where('_id', $sonId)->first()->grandsons->paginate(5);
        }
        return view('grandsons.index', compact('grandsons'));
    }


    public function create()
    {
        $sons = auth()->user()->sons;
        return view('grandsons.create', compact('sons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'son_id' => 'required',
            'name' => 'required',
            'birth_date' => 'required|date_format:Y-m-d'
        ]);

        Grandson::create([
            'son_id' => $request->input('son_id'),
            'name' => $request->input('name'),
            'birth_date' => $request->input('birth_date'),
        ]);

        return back()->with('status', 'Grandson is created suceccefuly');
    }


    public function show($id)
    {
        //
    }


    public function edit(Grandson $grandson)
    {
        $sons = auth()->user()->sons;
        return view('grandsons.edit', compact('sons', 'grandson'));
    }

    public function update(Request $request, Grandson $grandson)
    {
        $request->validate([
            'son_id' => 'required',
            'name' => 'required',
            'birth_date' => 'required|date_format:Y-m-d'
        ]);

        $grandson->update([
            'son_id' => $request->input('son_id'),
            'name' => $request->input('name'),
            'birth_date' => $request->input('birth_date'),
        ]);

        return back()->with('status', 'Grandson is updated suceccefuly');
    }


    public function destroy(Grandson $grandson)
    {
        $grandson->delete();
        return back()->with('status', 'Grandson is deleted suceccefuly');
    }
}
