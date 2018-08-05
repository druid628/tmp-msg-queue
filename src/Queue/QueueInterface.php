<?php

namespace PeacHPope\MessageQueue\Queue;

use PeacHPope\MessageQueue\Model\MessageInterface;

/**
 * @author Micah Breedlove <micah.breedlove@iostudio.com>
 */
interface QueueInterface
{
    /**
     * Set the queue to use
     *
     * @param mixed $queue
     *
     * @return $this
     */
    public function setQueue($queue);

    /**
     * Get the queue currently in use
     *
     * @return mixed
     */
    public function getQueue();

    /**
     * Send message to queue
     *
     * @param MessageInterface $message
     * @param                  $messageType
     *
     * @return mixed
     */
    public function send(MessageInterface $message, $messageType);

    public function pull();

    public function poll();
}