/**
 * Created by 12rom on 04.11.2016.
 */

'use strict';

angular.module('chatApp')

    .factory('ChatRoom', function(WebService) {

        return {
            getAll: function() {
                return WebService.get('chat-rooms');
            },
            show: function(id) {
                return WebService.get('chat-rooms/' + id);
            },
            create: function(chatRoom) {
                return WebService.post('chat-rooms', chatRoom);
            }
        }

    });