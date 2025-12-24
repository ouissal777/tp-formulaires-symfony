<?php
// src/Form/CartType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add("quantity", IntegerType::class, [
                "label" => "Quantity",
                "attr" => [
                    "class" => "form-control",
                    "min" => 1,
                    "max" => 10,
                    "style" => "max-width: 100px;"
                ],
                "data" => 1,
            ])
            ->add("color", ChoiceType::class, [
                "label" => "Select Color",
                "choices" => [
                    "Matte Black" => "black",
                    "Pearl White" => "white",
                    "Silver" => "silver",
                ],
                "attr" => [
                    "class" => "form-select",
                    "style" => "max-width: 200px;"
                ],
            ])
            ->add("submit", SubmitType::class, [
                "label" => "Add to Cart",
                "attr" => [
                    "class" => "btn btn-primary btn-lg"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
