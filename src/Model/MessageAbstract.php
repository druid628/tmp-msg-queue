<?php

namespace PeacHPope\MessageQueue\Model;

use PeacHPope\MessageQueue\Constants;

/**
 * Abstract Message class that should be inherited from
 *
 * @abstract
 * @copyright 2018-05-14
 * @author Micah Breedlove <druid628@gmail.com>
 */
abstract class MessageAbstract implements MessageInterface
{

    public function __call($method, $arguments)
    {
        $verb = substr($method, 0, 3);
        if (in_array($verb, array('set', 'get'))) {
            $name = substr($method, 3);
        }

        if (method_exists($this, $verb)) {
            if (property_exists($this, $name)) {
                return call_user_func_array(array($this, $verb), array_merge(array($name), $arguments));
            } elseif (property_exists($this, lcfirst($name))) {
                return call_user_func_array(array($this, $verb), array_merge(array(lcfirst($name)), $arguments));
            } else {
                throw new \Exception("Cannot call $verb on member $name", Constants::ERROR_MEMBER_NOT_FOUND);
            }
        }
    }

    /**
     * Generic Getter
     *
     * @param string $member
     *
     * @return mixed
     */
    protected function get($member)
    {
        return $this->$member;
    }

    /**
     * Generic Setter
     *
     * @param string $member
     * @param mixed  $value
     *
     * @return $this
     */
    protected function set($member, $value)
    {
        $this->$member = $value;

        return $this;
    }

}