<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
  // protected $table = "users";

	protected $fillable = [
		'data',
		'local',
		'valor',
	];
}
