<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetObject extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'target_object';
    // 在 '' 內輸入你想要對應的資料表名稱

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['obj_key', 'title'];

    protected $casts = [
//        'created_at' => 'date:Y-m-d',
        'created_at' => 'datetime:Y-m-d H:i:s.u',
//        'joined_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:i:s.u',
    ];
}
