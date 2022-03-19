<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable=['SupplierName','SupplierMobile','SupplierEmail','SupplierAddress','SupplierDetails','SupplierNationalIDCard'];
    use HasFactory;
}
