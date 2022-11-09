<?php
declare(strict_types=1);

namespace App\Command;

use App\Message\StatusUpdate;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class SendStatusCommand extends Command
{
 protected static $defaultName='app:send';
 protected MessageBusInterface $messageBus;
    public function __construct(MessageBusInterface $messageBus, string $name = null)
    {
        parent::__construct($name);
        $this->messageBus=$messageBus;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $status = "Worker X assigned to Y";

        $this->messageBus->dispatch(
            new StatusUpdate($status)
        );

        return Command::SUCCESS;
    }
}
