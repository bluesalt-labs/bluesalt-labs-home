<?php

namespace App\Models;

class Task extends BaseModel
{
    protected $fillable = ['user_id', 'title', 'json_data'];

    public function taskList() {
        return $this->belongsTo(TaskList::class);
    }
}
