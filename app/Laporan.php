<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
      'name', 'email','laporan','id-user','status',
  ];
}

