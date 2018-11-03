<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreUsuario')
            ->add('passwordUsuario')
            ->add('nombreUser')
            ->add('apellidosUser')
            ->add('sexoUser')
            ->add('fechaNacimientoUser')
            ->add('Enviar', SubmitType::class)
        ;
    }
}
