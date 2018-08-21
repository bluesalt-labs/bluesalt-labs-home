<?php

namespace App\Http\Controllers;

use App\Models\DataItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataItemsController extends Controller
{
    public function index() {

    }

    public function create() {
        return view('temp.data-item.create');
    }

    public function store(Request $request) {
        $user = Auth::user();
        $dataItem = new DataItem([
            'user_id'   => intval($user->id),
            'type_id'   => intval($request->type_id),
            'json_data' => $request->json_data,
        ]);

        $dataItem->save();

        return redirect()->route('data-items.create');
    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {
        $user = Auth::user();
        $dataItem = DataItem::findOrFail($id);

        if(intval($dataItem->user_id) === intval($user->id)) {
            $dataItem->delete();
        }

        return redirect()->route('data-items.create');
    }
}