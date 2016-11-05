<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * @var string
     */
    protected $table = 'messages';

    /**
     * @var array
     */
    protected $with = array('user');

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
        return $this->belongsTo('App\models\ChatRoom', 'chat_room_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\models\User', 'user_id');
    }


}
