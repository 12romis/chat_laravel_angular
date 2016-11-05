<?php
/**
 * Created by PhpStorm.
 * User: Romis
 * Date: 31.10.16
 * Time: 17:51
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
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

        return $this->hasMany('App\models\Message', 'chat_room_id');
    }




}