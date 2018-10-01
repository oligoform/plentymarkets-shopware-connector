<?php

namespace PlentyConnector\Connector\Logger;

use Exception;

interface ClassNameFormatterInterface
{
    /**
     * @param mixed $command
     */
    public function logCommandReceived($command);

    /**
     * @param mixed $command
     * @param mixed $returnValue
     */
    public function logCommandProcessed($command, $returnValue);

    /**
     * @param mixed     $command
     * @param Exception $e
     */
    public function logCommandFailed($command, Exception $e);
}
