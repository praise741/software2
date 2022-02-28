<?php

namespace App\Http\Controllers;

use App\Models\Crate;
use Illuminate\Http\Request;

/**
 * Class CrateController
 * @package App\Http\Controllers
 */
class CrateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crates = Crate::paginate();

        return view('crate.index', compact('crates'))
            ->with('i', (request()->input('page', 1) - 1) * $crates->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crate = new Crate();
        return view('crate.create', compact('crate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Crate::$rules);

        $crate = Crate::create($request->all());

        return redirect()->route('crates.index')
            ->with('success', 'Crate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crate = Crate::find($id);

        return view('crate.show', compact('crate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crate = Crate::find($id);

        return view('crate.edit', compact('crate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Crate $crate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crate $crate)
    {
        request()->validate(Crate::$rules);

        $crate->update($request->all());

        return redirect()->route('crates.index')
            ->with('success', 'Crate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $crate = Crate::find($id)->delete();

        return redirect()->route('crates.index')
            ->with('success', 'Crate deleted successfully');
    }
}
