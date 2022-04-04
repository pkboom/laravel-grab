<?php

namespace Pkboom\Grab;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class GrabCommand extends Command
{
    protected $signature = 'grab {search?}';

    public function handle()
    {
        $commands = collect($this->getApplication()->all())
            ->keys()
            ->filter(function ($command) {
                return str_contains($command, $this->argument('search'));
            })
            ->values()
            ->pipe(function ($commands) {
                $range = range(1, $commands->count());

                $combined = array_combine($range, $commands->toArray());

                return $combined;
            });

        $command = $this->choice(
            'Select command: ',
            $commands
        );

        beginning:

        $argument = $this->ask('Arguments or options?');

        Process::fromShellCommandline("php artisan $command $argument")
            ->setTty(true)
            ->mustRun(function ($type, $line) {
                $this->output->write($line);
            });

        if ($argument === '-h') {
            goto beginning;
        }

        return 0;
    }
}
