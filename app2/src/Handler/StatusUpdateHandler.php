<?php
declare(strict_types=1);

namespace App\Handler;

use App\Message\StatusUpdate;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class StatusUpdateHandler
{
    private  LoggerInterface $logger;

    public function __construct(
          LoggerInterface $logger
    ) {
        $this->logger=$logger;
    }

    public function __invoke(StatusUpdate $statusUpdate): void
    {
        $statusDescription = $statusUpdate->getStatus();

        $this->logger->warning('APP2: {STATUS_UPDATE} - '.$statusDescription);
        
        ## business logic, i.e. sending internal notification or queueing some other systems
    }
}
