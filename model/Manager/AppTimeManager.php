<?php

namespace model\Manager;

use DateTime;
use model\Abstract\AbstractManager;

class AppTimeManager extends AbstractManager
{
    public function getAppTime($amount = 0) : string
    {
        $seconds = $amount * 3600;
        $time = new DateTime();
        $time->modify('+' . $this->getTimeOffset() + $seconds);
        return $time->format('Y-m-d H:i:s');
    }

    private function getTimeOffset() : int
    {
        return $_SESSION["time_offset"] ?? 0;
    }
}