<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\AiTool;
use Illuminate\Http\Request;

class AiToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aitools = Aitool::with('tags')->get();
        return view('aitools.index', compact('aitools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('aitools.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $hasFreePlan = $request->has('hasFreePlan');
        if ($hasFreePlan) {
            $request->merge(['hasFreePlan' => true]);
        }

        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string|min:10',
            'link' => 'required|url',
            'hasFreePlan' => 'boolean',
            'price' => 'nullable|numeric',
        ]);

        $aitool = Aitool::create($request->all());
        $aitool->tags()->attach($request->tags);

        return redirect()->route('aitools.index')->with('success', 'Az AI eszköz sikeresen hozzáadva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aitool = Aitool::with('tags')->find($id);
        return view('aitools.show', compact('aitool'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
