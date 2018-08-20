<?php

namespace App\Models;

class Note extends BaseModel
{
    protected $fillable = ['user_id', 'title', 'content', 'json_data'];
}
