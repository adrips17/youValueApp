<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LugarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreLugar')
            ->add('descripcionLugar')
            ->add('ubicacionLugar')
            ->add('categoriaLugar')
            ->add('notaMediaLugar')
            ->add('Enviar', SubmitType::class)
        ;
    }
}
