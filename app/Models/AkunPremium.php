<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AkunPremium extends Model
{
    protected $fillable = [
        'id',
        'voucher',
        'is_required',
    ];
    
    public static function types()
    {
        return [
            'text' => 'Text',
        ];
    }
    
}
