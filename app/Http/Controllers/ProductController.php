<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(int $id) : View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "price" => "required"
        ]);

        Product::create($request->only(["name","price"]));

        return back();

    }

    public function create(): View
    {
        $viewData = [];
        $viewData["title"] = "Create Product - Online Store";
        $viewData["subtitle"] = "Create a product";
        return view('product.create')->with("viewData", $viewData);
    }

    public function delete(int $id): RedirectResponse
    {
        Product::destroy($id);

        return back();
    }
}