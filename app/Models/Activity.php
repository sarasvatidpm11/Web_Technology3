<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    public $primaryKey = 'act_id';
    protected $table = "activities";
    protected $fillable = ['act_name', 'act_img', 'act_desc'];
}
