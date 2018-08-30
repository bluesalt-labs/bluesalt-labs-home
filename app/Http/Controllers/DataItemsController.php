<?php

namespace App\Http\Controllers;

use App\Models\DataItem;

class DataItemsController extends Controller
{
    public function index() {
        return redirect()->route('data-items.create');
    }

    public function create() {
        return view('temp.data-item.create');
    }

    public function store() {
        $user = auth()->user();
        $dataItem = new DataItem([
            'user_id'   => intval($user->id),
            'type_id'   => intval(request()->type_id),
            'json_data' => request()->json_data,
        ]);

        $dataItem->save();

        return redirect()->route('data-items.create');
    }

    public function show($id) {
        return redirect()->route('data-items.create');
    }

    public function edit($id) {
        return redirect()->route('data-items.create');
    }

    public function update(Request $request, $id) {
        return redirect()->route('data-items.create');
    }

    public function destroy($id) {
        $user = auth()->user();
        $dataItem = DataItem::findOrFail($id);

        if(intval($dataItem->user_id) === intval($user->id)) {
            $dataItem->delete();
        }

        return redirect()->route('data-items.create');
    }
}