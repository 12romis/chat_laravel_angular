<?php
/**
 * Created by PhpStorm.
 * User: Romis
 * Date: 31.10.16
 * Time: 17:51
 */

namespace App\models;


class ChatRoom
{
    /**
     * @var string
     */
    protected $table = 'chat_rooms';

    /**
     * @var array
     */
    protected $fillable = array('name');

    /**
     * @return mixed
     */
    public function messages(){
        return $this->hasMany('Message', 'chat_room_id');
    }




}