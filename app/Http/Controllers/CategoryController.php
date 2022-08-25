<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoundationRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

     public function __construct()
     {
        $this->middleware('auth');
     }
    public function index()
    {
        $categorys =Category::all();
        return view('admin.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoundationRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'description' => $request->description,
            'with_doses'  =>$request->with_doses,
        ]);

        return redirect()->route('category.index')->with('message','Added Successfully');
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
        $category=Category::find($id);
        return view('admin.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoundationRequest $request, $id)
    {
        Category::where('id','=',$id)
        ->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'description' => $request->description,
            'with_doses'  =>$request->with_doses,
        ]);
        return redirect()->route('category.index')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =Category::find($id);
        $category->destroy($id);
        return redirect()->route("category.index")->with('delete','Deleted Successfully');
    }
    public function show_all_foundations(){

        $categorys = Category::all();
        return view('interface.foundation', compact('categorys'));
    }
}
