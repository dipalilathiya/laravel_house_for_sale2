<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblcontact extends Model
{
    protected $table ='tblregister';
    protected $primaryKey ='id';
    public $incrementing = true;
    public $timestemp = true;
    public $fillable = ['id','name','email','Message'];
}
