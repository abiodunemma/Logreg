<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;

    protected  $fillable = [
        'userid',
        'Amount',
        'Card_no',
        'ED',
        'cvv',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
