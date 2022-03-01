<?php

namespace App\Http\Controllers;
use App\Models\sales;
use App\Models\product;
use Illuminate\Http\Request;

class SalesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = sales::all();
        return view('sales.sales', compact('sales'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=product::all();
        return view('sales.create', compact('products'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|max:255',
            'costprice' => 'required|numeric',
            'sellingprice' => 'required|max:255',
        ]);
        $sales = sales::create($storeData);
        return redirect('/sales')->with('completed', 'sales has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales = sales::findOrFail($id);
        return view('sales.edit', compact('sales'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|max:255',
            'costprice' => 'required|numeric',
            'sellingprice' => 'required|max:255',
        ]);
        sales::whereId($id)->update($updateData);
        return redirect('/sales')->with('completed', 'sales has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sales = sales::findOrFail($id);
        $sales->delete();
        return redirect('/sales')->with('completed', 'sales has been deleted');
    }
}
