<?php

namespace yakiu\Event;

interface EventListener{
    public function event(Event $e);
}