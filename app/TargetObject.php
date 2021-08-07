<?php

namespace App;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class TargetObject extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'target_object';
    
}
