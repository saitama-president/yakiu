<?php

namespace yakiu\Event;

interface EventHandler{
    public function event(Event $e);
}