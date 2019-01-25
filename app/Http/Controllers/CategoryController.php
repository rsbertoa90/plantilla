<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Metadata;
use App\ProductImage;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function uploadImage(Request $request)
    {
        $category = Category::find($request->id);
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $path = $file->storeAs('/images/categories',$category->slug.'.'.$ext);
        $category->image = '/storage/'.$path;
        $category->save();
        return $category;
    }

    public static function detail($slug)
    {   
       $category = Category::where('slug','/'.$slug)->get()->first();
        if ($category){
           $meta = new Metadata([
               'metatitle'=>$category->metatitle,
               'metadescription'=>$category->metadescription
               ]);
          
           return view('category',compact('category','meta'));
        }
        return redirect('/');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Category::create(['name'=>$request->name]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAll()
    {
        return Category::with('products.images')->with('products.category')->orderBy('name')->get();
    }

    public function update(Request $request)
    {
        $field = $request->field;
        $category = Category::find($request->id);
        $category->$field = $request->value;
        $category->save();
        return $category;
    }
}
