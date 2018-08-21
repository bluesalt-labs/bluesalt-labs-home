<?php

namespace App\Models;

class DataItem extends BaseModel
{
    protected $fillable = ['user_id', 'type_id', 'json_data'];
}
