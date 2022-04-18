<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pgateway_txn extends Model
{
    use HasFactory;
public $table="pgateway_txn";
    protected $fillable = [
        'txn_id', 
      'customer_id'
    ];
     
}
