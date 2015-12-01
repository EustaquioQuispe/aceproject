<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {


	protected $table = 'tasks';

	protected $fillable = ['name', 'description','deadline','state','id_user','id_project'];

	protected $guarded = ['id'];

	public function user()
	{
    	return $this->belongsTo('App\User', 'id_user');
	}

	public function project()
	{
    	return $this->belongsTo('App\Project', 'id_project');
	}

}
