<?php

namespace App\Form;

use App\Entity\Corporations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CorporationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Abreviation')
            ->add('VilleCorpo')
            ->add('CountryCorpo')
            ->add('Date')
            ->add('Logo')
            ->add('Resume')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Corporations::class,
        ]);
    }
}
