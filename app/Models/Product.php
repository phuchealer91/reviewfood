<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'pro_name' => 'Public',
            'class' => 'btn btn-success'
        ],
        0 => [
            'pro_name' => 'Private',
            'class' => 'btn btn-danger'
        ]
    ];
    public function getStatus(){
        return array_get($this->status, $this->pro_active,'[N\A]');
        //có thể sử dụng $this->c_active == 1 ? '1.pro_name' : '0.name' thay cho ['name'] bên trang index
    }
}
