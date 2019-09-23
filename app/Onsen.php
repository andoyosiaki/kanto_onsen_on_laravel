<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onsen extends Model
{
  protected $table = 'onsens';

  protected $guarded = [
    'id',
    'updated_at',
    'created_at'
];
}
