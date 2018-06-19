<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ResourceLog;

class Resource extends Model
{
    /* The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'name', 
       'description',
       'cost'
   ];
   //
   public function resourceLogs()
   {
       return $this->belongsToMany(ResourceLog::class,'resource_in_resource_log', 'resource_id', 'resource_log_id');
   }
}
