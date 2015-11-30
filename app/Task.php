<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {


	protected $table = 'tasks';

	protected $fillable = ['name', 'description','deadline','state','id_user','id_project'];

	protected $guarded = ['id'];

}
