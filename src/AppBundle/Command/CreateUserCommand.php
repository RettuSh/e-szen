<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Enity\User;

class CreateUserCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('app:user:create');

        $this->addOption('username', null, InputOption::VALUE_OPTIONAL, 'Login', 'tomhaj');
        $this->addOption('password', null, InputOption::VALUE_OPTIONAL, 'Login', 'password');
        $this->addOption('email', null, InputOption::VALUE_OPTIONAL, 'Login', 'tomhaj@goldenline.pl');
        $this->addOption('firstname', null, InputOption::VALUE_OPTIONAL, 'Login', 'tomhaj@goldenline.pl');
        $this->addOption('lastname', null, InputOption::VALUE_OPTIONAL, 'Login', 'tomhaj@goldenline.pl');
        $this->addOption('active', null, InputOption::VALUE_NONE, 'Login');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $um = $this->getContainer()->get('fos_user.user_manager');

        $username = $input->getOption('username');
        $password = $input->getOption('password');
        $email = $input->getOption('email');
        $firstname = $input->getOption('firstname');
        $lastname = $input->getOption('lastname');
        $active = (bool) $input->getOption('active');

        $user = $um->createUser();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPlainPassword($password);
        $user->setEnabled($active);
        $user->setUserfirstname($firstname);
        $user->setUserlastname($lastname);
        $um->updateUser($user);
    }
}
