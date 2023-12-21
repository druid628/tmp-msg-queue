<?php

namespace PeacHPope\MessageQueue\Worker;

/**
 * @author Micah Breedlove <druid628@gmail.com>
 */
class Worker
{
    protected $queue;

    protected $name;

    public function __construct($name = null, $queue = null)
    {
        $this->name  = $name;
        $this->queue = $queue;
    }

    /**
     * @param array|string $queue
     *
     * @return array|string
     */
    public function addQueue($queue)
    {
        if (is_string($this->queue)) {
            $newQueue    = [$this->queue];
            $this->queue = $newQueue;
        }

        $this->queue[] = $queue;

        return $this;
    }

    /**
     * Do work here
     * {@inheritdoc}
     */
    public function execute()
    {
        throw new \Exception("Method Not Implemented");
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array|string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * @param array|string $queue
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupportedTypes()
    {
        return $this->queue;
    }
}