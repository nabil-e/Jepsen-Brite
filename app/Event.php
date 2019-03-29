<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $fillable = [
    'id',
    'event_title',
    'event_time',
    'event_description',
    'event_city',
    'event_location',
    'event_image',
    'event_author',
  ];

  public function author()
  {
    return $this->belongsTo('App\User', 'event_author');
  }

  public function attendees()
  {
    return $this->hasManyThrough(
      'App\User',
      'App\Attendees',
      'event_id', // Foreign key on Attendees table...
      'id', // Foreign key on User table...
      'id', // Local key on Event table...
      'user_id' // Local key on Attendees table...
    );
  }
}
