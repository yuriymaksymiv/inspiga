<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    protected $primaryKey = "id";

    protected $fillable =[
        'name',
        'phone',
        'email',
        'message'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
