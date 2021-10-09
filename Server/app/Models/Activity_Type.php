<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity_Type extends Model
{
    use HasFactory;

    protected $table = "activity_type";
    protected $primaryKey = "id";

    protected $fillable = [
        'type',
    ];

    protected $guarded = [];

    public function activities()
    {
        return this->hasMany(Activity::class,'type_id');
    }
}
