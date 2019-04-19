<?php

namespace LogicBundle\Command;

use Swift_Message;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Exception\Exception;

class PasswordUsuariosCommand extends Command
{

    protected function configure()
    {
        $this
            // the name of the command (the part after "app/console")
            ->setName('aranda:cambiar-clave-usuarios')
            // the short description shown while running "php app/console list"
            ->setDescription('Encriptar contraseñas de los usuarios')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Encriptar contraseñas de los usuarios');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getApplication()->getKernel()->getContainer();
        $em = $container->get('doctrine')->getManager("default");
        $usuarios = $em->getRepository('ApplicationSonataUserBundle:User')->findAll();
        foreach ($usuarios as $usuario) {
            $encoder = $container->get('security.encoder_factory')->getEncoder($usuario);
            $claveTemporal = $usuario->getUsuClaveTemp();
            $new_pwd_encoded = $encoder->encodePassword($claveTemporal, $usuario->getSalt());
            $usuario->setSalt($usuario->getSalt());
            $usuario->setPassword($new_pwd_encoded);
            $em->persist($usuario);
        }
        $em->flush();

        $output->writeln('Proceso Terminado Correctamente.');
    }

}
