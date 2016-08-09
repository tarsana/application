<?php namespace Tarsana\Command\Commands;

use Tarsana\Command\Command;
use Tarsana\Command\SubCommand;
use Tarsana\Syntax\Factory as S;


class VersionCommand extends SubCommand {

    protected function init ()
    {
        $this
            ->name('Version')
            ->version('0.0.1')
            ->description('Shows the version of the command');
    }

    protected function execute ()
    {
        $c = $this->parent();
        $this->console
             ->green()->inline($c->name())
             ->white()->inline(' version ')
             ->yellow()->out($c->version());
    }
}
