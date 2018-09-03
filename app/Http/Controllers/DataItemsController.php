<?php

namespace App\Http\Controllers;

use App\Models\DataItem;
use App\Models\DataItemType;

class DataItemsController extends Controller
{
    public function showTypes() {
        return view('temp.data-item.index');
    }

    public function index($type) {
        return redirect()->route('data-items.create', ['type' => $type]);
    }

    public function create($typeSlug) {
        $user = auth()->user();
        $typeID = 0;

        switch($typeSlug) {
            case "star-rating":
                $typeID = 1;    // todo: Temp!
                break;
            case "time-journal-entry":
                $typeID = 2;    // todo: Temp!
                break;
        }

        if($typeID > 0) {
            $type = DataItemType::find($typeID);

            return view('temp.data-item.'.$typeSlug.'.create')
                ->with('user', $user)
                ->with('dataItemType', $type)
                ->with('dataItems', $user->dataItems()->where('type_id', '=', $type->id)->get());
        }

        // If type not found, show 404
        abort(404);
    }

    public function store() {
        $user = auth()->user();
        $dataItem = new DataItem([
            'user_id'   => intval($user->id),
            'type_id'   => intval(request()->type_id),
            'json_data' => request()->json_data,
        ]);



        $dataItem->save();

        return back()->with('success', 'Data Item created successfully.');
    }

    public function show($type, $id) {
        return redirect()->route('data-items.create', ['type' => $type]);
    }

    public function edit($type, $id) {
        return redirect()->route('data-items.create', ['type' => $type]);
    }

    public function update($type, $id) {
        return redirect()->route('data-items.create', ['type' => $type]);

        //return back()->with('success', 'Data Item updated successfully.');
    }

    public function destroy($type, $id) {
        $user = auth()->user();
        $dataItem = DataItem::where('type_id', '=', $type)
                        ->where('id', '=', $id)->findOrFail();

        if(intval($dataItem->user_id) === intval($user->id)) {
            $dataItem->delete();
        }

        return back()->with('success', 'Data Item deleted successfully.');
    }
}