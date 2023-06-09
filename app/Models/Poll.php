<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $table = "poll";
    protected $fillable = ['title', 'description', 'deadline'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
