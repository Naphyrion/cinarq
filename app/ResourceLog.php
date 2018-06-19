<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceLog extends Model
{
    /* The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'description',
       'pme_action',
       'project',
       'extracurricular_activitie',
       'director_authorized',
       'management_authorized'

   ];
   //
   public function resources()
   {
       return $this->belongsToMany(Resource::class,'resource_in_resource_log','resource_log_id', 'resource_id');
   }
}
