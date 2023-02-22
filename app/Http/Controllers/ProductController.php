<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($page = 1)
    {
        
        $products = Product::paginate(5,['*'],'page',$page);
       // dd($products);
        return view('products',
        [
            'products' => $products,
            'current_page' => $products->currentPage(),
            'last_page' => $products->lastPage(),
            
        ]);
    }

    public function create()
    {
        return view('products_create');
    }
    /**
     * Store a newly created resource in storage.
     * 
     * 
     */
    public function store(\App\Http\Requests\StoreProductRequest $request)
    {
        $request->validated();

        $name = $request->name;
        $price = $request->price;
        $type = $request->type;
        $description = $request->description;

        $new_product = Product::create
        (
            [
                'name'=>$name,
                'price'=>$price,
                'type'=>$type,
                'description'=>$description
            ]
        );
        return redirect('/product/'.$new_product->id);


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product',
        [
            'product' => $product
        ]);
    }

    public function search(Request $request)
    {
        $products = null;
        $query_to_check = $request->q;
        
        if($query_to_check)
        {
            $products = Product::where('name','LIKE','%'.$query_to_check.'%')->orWhere('type','LIKE','%'.$query_to_check.'%')->orWhere('description','LIKE','%'.$query_to_check.'%')->get();
        }
        
        return view('view_search',
        [
            'products' => $products,   
        ]);
    }

    public function update_view($id)
    {
        $product = Product::find($id);
        return view('products_update',
        [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\StoreProductRequest $request)
    {
        $is_validated = $request->validated();

        $name = $request->name;
        $price = $request->price;
        $type = $request->type;
        $description = $request->description;
        $id = $request->id;

        Product::where('id',$id )
        ->update
        (
            [
                'name'=>$name,
                'price'=>$price,
                'type'=>$type,
                'description'=>$description
            ]
        );

        if($is_validated)
        {
            return redirect('/product/'.$id);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product)
        {
            $product->delete();
        }

        return redirect('/products');
    }
}
