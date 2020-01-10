<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
  /**
   * Mass assignable properties
   *
   */
   protected $fillable = [
     'first_name',
     'last_name',
     'dob'
   ]

} ?>
