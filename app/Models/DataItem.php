<?php

namespace App\Models;

class DataItem extends BaseModel
{
    protected $fillable = ['user_id', 'type_id', 'json_data'];

    public function dataItemList() {
        return $this->belongsTo(DataItemList::class);
    }

    public function type() {
        return $this->hasOne(DataItemType::class);
    }
}
