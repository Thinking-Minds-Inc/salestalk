<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingSession extends Model
{
    protected $table = "training_sessions";
    //protected $fillable = ['user_id'];
    protected $guarded = ['id'];
    public static function getBest() {
        $results = self::orderBy('created_at')->limit(5);
        return $results->get();
    }
}
