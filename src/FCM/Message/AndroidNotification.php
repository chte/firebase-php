<?php
namespace Plokko\Firebase\FCM\Message;

use JsonSerializable;

/**
 * Class AndroidNotification
 * @package Plokko\PhpFcmV1\Message
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#AndroidNotification
 */
class AndroidNotification implements JsonSerializable
{
    const
        VISIBILITY_UNSPECIFIED='VISIBILITY_UNSPECIFIED',
        PRIVATE='PRIVATE',    
        PUBLIC='PUBLIC',    
        SECRET='SECRET';    
    
    public
        /**@var string**/
        $title,
        /**@var string**/
        $body,
        /**@var string**/
        $icon,
        /**@var string**/
        $color,
        /**@var string**/
        $sound,
        /**@var string**/
        $tag,
        /**@var string**/
        $click_action,
        /**@var string**/
        $body_loc_key,
        /**@var array**/
        $body_loc_args,
        /**@var string**/
        $title_loc_key,
        /**@var array**/
        $title_loc_args,
        /**@var string**/
        $channel_id;
        /**@var boolean**/
        $sticky,   
        /**@var ENUM**/
        $visibility = self::VISIBILITY_UNSPECIFIED,
        /**@var string**/
        $image;   
     
    function __get($k){return $this->{$k};}
    function __set($k,$v){$this->{$k}=$v;}

     /**
     * @param string $v
     * @throws InvalidArgumentException
     * @return AndroidNotification
     */
    function setVisibility($v){
        switch ($v){
            default:
                throw new InvalidArgumentException('Invalid Android message visibility!');
            case self::VISIBILITY_UNSPECIFIED:
            case self::PRIVATE:
            case self::PUBLIC:
            case self::SECRET:
                $this->visibility=$v;
        }
        return $this;
    }
    
    public function jsonSerialize()
    {
        return array_filter([
            'title' => $this->title,
            'body' => $this->body,
            'icon' => $this->icon,
            'color' => $this->color,
            'sound' => $this->sound,
            'tag' => $this->tag,
            'click_action' => $this->click_action,
            'body_loc_key' => $this->body_loc_key,
            'body_loc_args' => $this->body_loc_args,
            'title_loc_key' => $this->title_loc_key,
            'title_loc_args' => $this->title_loc_args,
            'channel_id' => $this->channel_id,
            'sticky' => $this->sticky,
            'visibility' => $this->visibility,
            'image' => $this->image,
        ]);
    }
}
