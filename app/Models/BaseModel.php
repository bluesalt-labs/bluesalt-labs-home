<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $dates        = ['deleted_at'];
    protected $primaryKey   = 'id';

    /**
     * BaseModel constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = []) {
        $this->casts['json_data']   = 'array';

        parent::__construct($attributes);
    }
}
