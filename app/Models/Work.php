<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'user_id',
        'training_id',
        'leps',
        'weight',
        ];
    public function training() {
        return $this->belongsTo(Training::class);
    }
}
