<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeQuality extends Model
{
    protected $table = 'type_qualitys';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'tq_name' => 'Public',
            'class' => 'btn btn-success'
        ],
        0 => [
            'tq_name' => 'Private',
            'class' => 'btn btn-danger'
        ]
    ];
    public function getStatus()
    {
        return array_get($this->status, $this->tq_active, '[N\A]');
        //có thể sử dụng $this
    }
}
