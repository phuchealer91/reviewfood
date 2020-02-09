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
            'class' => 'badge badge-success'
        ],
        0 => [
            'st_name' => 'Private',
            'class' => 'badge badge-danger'
        ]
    ];
    public function getStatus(){
        return array_get($this->status, $this->st_active,'[N\A]');
        //có thể sử dụng $this->c_active == 1 ? '1.st_name' : '0.name' thay cho ['name'] bên trang index
    }
    public function relation_area(){
        return $this->belongsTo(Area::class,'st_area_id');
    }
    public function relation_category(){
        return $this->belongsTo(Category::class,'st_category_id');
    }
}
