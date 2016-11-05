<?php
/**
 * Created by PhpStorm.
 * User: 12rom
 * Date: 01.11.2016
 * Time: 21:20
 */

namespace App\Http\Controllers;


use App\models\ChatRoom;
use Illuminate\Support\Facades\Input;

class ChatRoomController extends BaseController
{
    /**
     * @param ChatRoom $chatRooms
     */
    public function __construct(ChatRoom $chatRooms){
        $this->chatRooms = $chatRooms;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->chatRooms->all();
    }

    /**
     * @param ChatRoom $chatRoom
     * @return ChatRoom
     */
    public function show(ChatRoom $chatRoom)
    {
        return $chatRoom;
    }

    public function create(){

        return $this->chatRooms->create(Input::all());
    }
}