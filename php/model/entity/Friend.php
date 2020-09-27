<?php

class Friend
{
    private int $caller;
    private int $receiver;
    private bool $is_pending;

    /**
     * Friend constructor.
     * @param int $caller
     * @param int $receiver
     * @param bool $is_pending = true
     */
    public function __construct(int $caller, int $receiver, bool $is_pending = true)
    {
        $this->caller = $caller;
        $this->receiver = $receiver;
        $this->is_pending = $is_pending;
    }

    /**
     * @return int
     */
    public function getCaller(): int
    {
        return $this->caller;
    }

    /**
     * @param int caller
     */
    public function setCaller(int $caller): void
    {
        $this->caller = $caller;
    }

    /**
     * @return int
     */
    public function getReceiver(): int
    {
        return $this->receiver;
    }

    /**
     * @param int $receiver
     */
    public function setReceiver(int $receiver): void
    {
        $this->receiver = $receiver;
    }

    /**
     * @return bool
     */
    public function isIsPending(): bool
    {
        return $this->is_pending;
    }

    /**
     * @param bool $is_pending = true
     */
    public function setIsPending(bool $is_pending = true): void
    {
        $this->is_pending = $is_pending;
    }

}