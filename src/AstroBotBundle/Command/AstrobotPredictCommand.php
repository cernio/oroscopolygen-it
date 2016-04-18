<?php

namespace AstroBotBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AstrobotPredictCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('astrobot:predict')
            ->setDescription('...')
            ->addArgument('sign', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sign = $input->getArgument('sign');
        
        if(!empty($sign) && in_array($sign))

        if ($input->getOption('option')) {
            // ...
        }

        $output->writeln('Command result.');
    }

}
