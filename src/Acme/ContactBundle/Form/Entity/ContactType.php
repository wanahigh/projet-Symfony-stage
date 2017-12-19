<?php

namespace Acme\ContactBundle\Form\Entity;

use  Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Nom:', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Organisation',TextType::class)
            ->add('Email',TextType::class)
            ->add('Sujet',TextType::class)
            ->add('Message',TextType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\ContactBundle\Entity\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'acme_contactbundle_entity_contact';
    }


}
