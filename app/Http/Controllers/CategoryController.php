<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __contruct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create(){
        return view('category.form');
    }

    public function store(Request $request){
        $new_category = Category::create([
            'name' => $request['name']
        ]);

        return redirect('/categories');
    }

    public function edit($id){
        $category = Category::find($id)->where('id',$id)->first();
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $file = Category::find($id)->where('id',$id)->first();
        $file->name=$request->get('name');
        $file->save();

        return redirect('/categories');
    }

    public function destroy($id){
        $file = Category::find($id);

        $file->delete();

        return redirect('/categories');
    }
}
