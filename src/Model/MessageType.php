<?php

namespace PeacHPope\MessageQueue\Model;

/**
 * @author Micah Breedlove <druid628@gmail.com>
 */
class MessageType
{

    /** @var int $id */
    protected $id;

    /** @var string $name */
    protected $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return MessageType
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return MessageType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}