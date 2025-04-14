<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Access extends Model {

  use HasFactory, SoftDeletes;

  protected $table = 'model_has_roles';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

}
