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
      'event_location',
      'event_image',
      'event_author',
  ];
}
