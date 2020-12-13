<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelAnjing extends Model
{
    protected $fillable = 
    [
        'id',
        'user_id',
        'judul', 
        'author', 
        'konten', 
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
