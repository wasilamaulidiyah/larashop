<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KucingRemaja extends Model
{
    protected $fillable = [
        'user_id',
        'soal1', 
        'soal2', 
        'soal3', 
        'soal4', 
        'soal5',
        'soal6',
        'soal7',
        'feedback'
    ];
    
    public static function types()
    {
        return [
            'text' => 'Text',
        ];
    }

    

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
