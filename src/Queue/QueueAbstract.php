<?php

namespace PeacHPope\MessageQueue\Queue;

use PeacHPope\MessageQueue\Model\MessageInterface;

/**
 * @author Micah Breedlove <druid628@gmail.com>
 */
abstract class QueueAbstract implements QueueInterface
{

    protected $queue;

    /**
     * {@inheritdoc}
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * {@inheritdoc}
     */
    public function setQueue($queue)
    {
        $this->queue = msg_get_queue($queue);

        return $this;
    }

    public function poll()
    {
        // TODO: Implement poll() method.
    }

    public function pull()
    {
        // TODO: Implement pull() method.
    }

    /**
     * {@inheritdoc}
     */
    public function send(MessageInterface $message, $messageType)
    {
        return msg_send($this->queue, $messageType, $message);
    }
}