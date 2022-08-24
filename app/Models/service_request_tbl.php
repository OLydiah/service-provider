<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_request_tbl extends Model
{
    use HasFactory;
    protected $fillable = [
        'username', 
        'email', 
        'phoneno', 
        'service',
        'serviceID',
        'isAdminApproved'
    ];
}
