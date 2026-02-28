<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::all();
        return view('DaftarCustomer', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'test_text' => 'required',
            'test_gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Simpan file ke storage/app/public/tests
        $path = $request->file('test_gambar')->store('tests', 'public');

        Test::create([
            'test_text' => $request->test_text,
            'test_gambar' => $path,
        ]);

        return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        return view('tests.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        return view('tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        $request->validate([
            'test_text' => 'required',
            'test_gambar' => 'nullable|image|max:2048'
        ]);

        $test->test_text = $request->test_text;

        if ($request->hasFile('test_gambar')) {
            if ($test->test_gambar && Storage::disk('public')->exists($test->test_gambar)) {
                Storage::disk('public')->delete($test->test_gambar);
            }

            $path = $request->file('test_gambar')->store('tests', 'public');
            $test->test_gambar = $path;
        }
        $test->save();
        return redirect()->route('tests.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return redirect()->route('tests.index');
    }
}
