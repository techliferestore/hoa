<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepient extends Model
{

    protected $fillable = ['firstname', 'lastname','user_id','company','phone','business_email','company_address','gst','zipcode','city','state'];

    
}
