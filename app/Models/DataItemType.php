<?php

namespace App\Models;

class DataItemType extends BaseModel
{
    protected $fillable = ['user_id', 'name', 'json_data'];

    public function slug() {
        return $this->json_data['slug'];
    }
}
