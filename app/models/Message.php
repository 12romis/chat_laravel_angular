<?php

namespace App\models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Message extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * @var string
     */
    protected $table = 'message';

    protected $fillable = array('body');

    /**
     * @param $query
     * @param $lastId
     * @return mixed
     */
    public function scopeAfterId($query, $lastId)
    {
        return $query->where('id', '>', $lastId);
    }
    /**
     * @param $query
     * @param $chatRoom
     * @return mixed
     */
    public function scopeByChatRoom($query, $chatRoom)
    {
        return $query->where('chat_room_id', $chatRoom->id);
    }

    public function chatRoom(){
        return $this->belongsTo('ChatRoom', 'chat_room_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('User', 'user_id');
    }


}
