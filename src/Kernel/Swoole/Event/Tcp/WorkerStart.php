<?php


namespace Kernel\Swoole\Event\Tcp;

use Kernel\Swoole\Event\Event;
use Kernel\Swoole\Event\EventTrait;

class WorkerStart implements Event
{
        use EventTrait;
        public function doEvent()
        {
                // TODO: Implement doEvent() method.
        }
}