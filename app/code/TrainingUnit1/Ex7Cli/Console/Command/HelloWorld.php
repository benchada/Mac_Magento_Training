<?php
/**
 * Short description for class
 *
 * Long description for class (if any)...
 *
 * @package    magento-twotwoseven.dev
 * @author     Rico Neitzel, Buro 71a <info@buro71a.de>
 * @copyright  2019 Buro 71a, Rico Neitzel und Tobias Klose GbR
 */

namespace TrainingUnit1\Ex7Cli\Console\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    protected function configure()
    {
        $this->setName('hello:world');
        $this->setDescription('CLI module for Unit 1 of Essentials course');
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Hello World</info>');
    }

}
