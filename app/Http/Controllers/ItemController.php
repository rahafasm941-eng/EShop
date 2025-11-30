<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
       public function index()
    {
        $Items=Item::all();
        return response()->json($Items,200);
    }
 
    public function store(StoreItemRequest $request)
    {
        $item=Item::create($request->validated());
        return response()->json($item,201);
    }
public function show($id)
    {
        $item=Item::findOrFail($id);
        return response()->json($item,200);
    }
    public function edit(UpdateItemRequest $request ,$id)
    {
        $item=Item::findOrFail($id);
        $item->update($request->only(['name','description','price','quantity']));
        return response()->json($item,200);
    }
    public function destroy($id)
    {
        $item=Item::findOrFail($id);
        $item->delete();
        return response()->json(null,204);
}
}
