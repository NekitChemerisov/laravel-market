<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.index', compact ('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories_id = Category::all();
        return view('admin.create', ['categories_id'=>$categories_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {   
        
        $data = request()->validate([
            'product_name'=>'string',
            'discription'=>'string',
            'price'=>'integer',
            'category_id'=>'integer',
        ]);

        Product::create($data);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product= Product::findOrFail($id);
        return view('admin.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        $data = request()->validate([
            'product_name'=>'string',
            'discription'=>'string',
            'price'=>'integer',
            'category_id'=>'integer',
        ]);
        dd($data);
        // $product->update($data);
        // return redirect()->route('admin.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function delete(){
        $product=Product::withTrashed()->find(2);
        $product->restore();
    }
    
     public function destroy($id)
    {
        $ans = Product::find($id);
        $ans->delete();
       return redirect()->route('admin.index')
                       ->with('success','post deleted successfully');
    }
}
