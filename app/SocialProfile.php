<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
   protected $fillable = [
        'user_id', 'social_network','social_network_user_id', 'avatars', 'password',
    ];

   public function user()
   {
   	return $this->belongsTo('App\User');
   }
}
