<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // just incase its called different
//	protected $table = 'id';

protected  $fillable = [
	'title',
	'content'


];
	

}
