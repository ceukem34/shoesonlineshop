<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{

public $primaryKey = 'id_sepatu';

protected $table = 't_sepatu';

protected $fillable = ['nama', 'merek', 'harga', 'stock','foto'];

}
