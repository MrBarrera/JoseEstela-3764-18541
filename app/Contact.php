<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent;

class Contact extends Providers
{
    use HasFactory;
    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];
}
