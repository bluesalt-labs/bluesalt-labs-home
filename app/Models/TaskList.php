<?php

namespace App\Models;

class TaskList extends BaseModel
{
    //

    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
