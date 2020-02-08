<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'st_name' => 'Public',
            'class' => 'btn btn-success'
        ],
        0 => [
            'st_name' => 'Private',
            'class' => 'btn btn-danger'
        ]
    ];
    public function getStatus(){
        return array_get($this->status, $this->st_active,'[N\A]');
        //có thể sử dụng $this->c_active == 1 ? '1.st_name' : '0.name' thay cho ['name'] bên trang index
    }
}
