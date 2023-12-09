<?php

namespace App\Form;

use App\Entity\EventType;
use App\Entity\Events;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'attr' => ['class' => 'form-control', "id" => "eventname", "placeholder" => "Please type event name!"],
            ])
            ->add('date_time_start', null, [
                'attr' => ['class' => 'form-control'],
                "widget" => "single_text",
            ])
            ->add('description', null, [
                'attr' => ['class' => 'form-control', "placeholder" => "Please type Event description!"],
            ])
            ->add('picture', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Add url to pictre']
            ])
            ->add('capacity', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter capacity']
            ])
            ->add('email', EmailType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter valid email address']
            ])
            ->add('phone_number', null, [
                'attr' => ['class' => 'form-control', "placeholder" => "Enter valid phone number"],
            ])
            ->add('address_street', null, [
                'attr' => ['class' => 'form-control', "placeholder" => "Please enter Streetname of Address"],
            ])
            ->add('address_street_number', null, [
                'attr' => ['class' => 'form-control', "placeholder" => "Please enter Streetnumber"],
            ])
            ->add('address_zipcode', null, [
                'attr' => ['class' => 'form-control', "placeholder" => "Please enter Zipcode"],
            ])
            ->add('address_city', null, [
                'attr' => ['class' => 'form-control', "placeholder" => "Please enter Cityname"],
            ])
            ->add('extURL', null, [
                'attr' => ['class' => 'form-control', "placeholder" => "Link to Event URL"],
            ])
            ->add('fk_event_type', EntityType::class, [
                'class' => EventType::class,
                'label' => 'Event type',
                'choice_label' => 'name',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
