<?php
namespace Plokko\Firebase\FCM\Message;

use JsonSerializable;

/**
 * Class Notification
 * @package Plokko\PhpFcmV1\Message
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#Notification
 */
class Notification implements JsonSerializable
{
    public
        /**@var string The notification's title.*/
        $title,
        /**@var string The notification's body text.*/
        $body,
        /**@var string The notification's image.*/
        $image;
    
    function __construct($title='',$body='',$image='')
    {
        $this->title = $title;
        $this->body = $body;
        $this->image = $image;
    }


    function setTitle($title){
        $this->title = $title;
        return $this;
    }

    function setBody($body){
        $this->body = $body;
        return $this;
    }
    
    function setImage($image){
        $this->body = $body;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'title' => $this->title,
            'body'  => $this->body,
            'image'  => $this->image,
        ];
    }
}
