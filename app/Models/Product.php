<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    const STATUS_ON = 1;
    const STATUS_OFF = 0;
    protected $status = [
        1 => [
            'pro_name' => 'Public',
            'class' => 'badge badge-success'
        ],
        0 => [
            'pro_name' => 'Private',
            'class' => 'badge badge-danger'
        ]
    ];
    protected $hot = [
        1 => [
            'name' => 'hot',
            'class' => 'badge badge-danger'
        ],
        0 => [
            'name' => 'not',
            'class' => 'badge badge-secondary'
        ]
    ];

    public function getStatus(){
        return array_get($this->status, $this->pro_active,'[N\A]');
        //có thể sử dụng $this->c_active == 1 ? '1.pro_name' : '0.name' thay cho ['name'] bên trang index
    }
    public function getHot(){
        return array_get($this->hot,$this->pro_hot,'[N\A]');
    }
    public function relation_store()
    {
        return $this->belongsTo(Store::class,'pro_typeStore_id');
    }
}
