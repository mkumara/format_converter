<?php
/**
 * @copyright Copyright (c) 2017, StoneEagle.com
 */

namespace App\Command;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

/**
 * 
 */
class DataConvert extends Command
{
    protected function configure()
    {
        $this->setDescription('Convert Data from one format to another');
        $this->addArgument('input-file', InputOption::VALUE_REQUIRED, 'input file path');
        $this->addOption('format', 'o', InputOption::VALUE_REQUIRED, 'output format (json|xml)', 'json');
        
        $this->setHelp(<<<EOF
The <info>%command.name%</info> command accepts an input file and outputs the converted data in the specified output format

Example:
    <info>php %command.full_name% source/file/name --output-format xml</info>
EOF
       );
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $file = $input->getArgument('input-file');
        if (! $file || ! realpath($file)) {
            $output->writeln("Input file not found");
            return 1;
        }
        
        $format = $input->getOption('format');
        if (!in_array($format, ['xml', 'json'])) {
            $output->writeln("Format invalid");
            return 1;
        }
        
        $output->writeln("Converting: '$file' to $format");
        
        $convertedData = "set this variable to the converted data";
        
        $output->writeln($convertedData);
        
        return 0;
    }
}
