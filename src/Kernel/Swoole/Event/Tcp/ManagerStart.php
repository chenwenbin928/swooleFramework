<?php


namespace Kernel\Swoole\Event\Tcp;

use Kernel\Swoole\Event\Event;
use Kernel\Swoole\Event\EventTrait;

class ManagerStart implements Event
{
        use EventTrait;
        public function doEvent()
        {
                echo "ManagerStart\r\n";
                // TODO: Implement doEvent() method.
        }

}