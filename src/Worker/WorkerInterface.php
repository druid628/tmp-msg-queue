<?php

namespace PeacHPope\MessageQueue\Worker;


/**
 * @author Micah Breedlove <>
 */
interface WorkerInterface
{

    /**
     * @param array|string $queue
     *
     * @return array|string
     */
    public function addQueue();

    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return array|string
     */
    public function getQueue();

    /**
     * @return mixed
     */
    public function getSupportedTypes();

    /**
     * @param string $name
     */
    public function setName();

    /**
     * @param array|string $queue
     *
     * @return $this
     */
    public function setQueue();
}