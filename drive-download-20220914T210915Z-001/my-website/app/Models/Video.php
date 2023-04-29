<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = ['name', 'viewers'];
    //$table->timestamp('added_on')->nullable()->default(time());

    public $timestamps = false;

}
