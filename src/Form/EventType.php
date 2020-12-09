<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array ('attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('date', DateType::class, array ('attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('description', TextType::class, array( 'attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('image', TextType::class, array( 'attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('capacity', TextType::class, array( 'attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('email', TextType::class, array( 'attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('phone', TextType::class, array( 'attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('adress', TextType::class, array( 'attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('url', TextType::class, array( 'attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
            ->add('type', TextType::class, array( 'attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}