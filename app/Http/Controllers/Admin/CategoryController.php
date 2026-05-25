<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $categories = Category::withCount('events')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'LIKE', '%' . $search . '%');
            })
            ->get();

        return view('admin.categories.index', compact('categories', 'search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
        ]);

        $name = $request->nama_kategori;
        $slug = $request->filled('slug') 
            ? Str::slug($request->slug) 
            : Str::slug($name);

        // Ensure uniqueness of slug
        $originalSlug = $slug;
        $count = 1;
        while (Category::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        Category::create([
            'name' => $name,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
        ]);

        $slug = $request->filled('slug') 
            ? Str::slug($request->slug) 
            : Str::slug($request->name);

        // Ensure uniqueness of slug
        $originalSlug = $slug;
        $count = 1;
        while (Category::where('slug', $slug)->where('id', '!=', $category->id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $category->update([
            'name' => $request->name,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
