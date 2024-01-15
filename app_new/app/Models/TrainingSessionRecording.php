<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingSessionRecording extends Model
{
    protected $table = "training_sessions_recordings";
    public static function getBest() {
        $results = self::orderBy('created_at')->limit(5);
        return $results->get();
    }
}
