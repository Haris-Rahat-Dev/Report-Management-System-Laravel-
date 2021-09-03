<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function create()
    {
        $categories = Category::all();
        return view('category.create', [ 'categories' => $categories ]);
    }


    public function store()
    {
        Category::create([
            'category' => trim(\request('category'))
        ]);
        $categories = Category::all();
        return view('category.create', [ 'categories' => $categories ]);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', [ 'category' => $category ]);
    }

    public function update($id)
    {
        $category = Category::find($id);
        $category->category = trim(\request('category'));
        $category->save();
        $categories = Category::all();
        return view('category.create', [ 'categories' => $categories ]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        $categories = Category::all();
        return view('category.create', [ 'categories' => $categories ]);
    }
}
