<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbltools extends Model
{
    protected $table ='tbltools';
    protected $primaryKey ='id';
    public $incrementing = true;
    public $timestemp = true;
    public $fillable = ['id','name','Rate_Per_Day','Rate_Per_Month' ,'Rate_Per_Year',' Rate_Per_Hour_With_Operator','Discription','cat_id','Location','img'];
}
