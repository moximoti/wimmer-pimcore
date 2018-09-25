<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class, [
                'label'    => 'Anrede',
                'required' => true,
                'choices'  => [
                    'Frau' => 'Frau',
                    'Herr' => 'Herr'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label'    => 'Vorname',
                'required' => true
            ])
            ->add('lastname', TextType::class, [
                'label'    => 'Nachname',
                'required' => true
            ])
            ->add('company', TextType::class, [
                'label'    => 'Firma',
            ])
            ->add('email', EmailType::class, [
                'label'    => 'E-Mail',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'email@example.com'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label'    => 'Ihre Nachricht',
                'required' => true
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Senden'
            ]);
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    }
}
