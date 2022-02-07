<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'bornDate',
        'description',
        'gender',
        'select',
        'agrement' => 'boolean',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
