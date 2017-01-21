<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Model\NutritionAnalysis;

class IngredientAnalysisFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('ingredient', TextType::class, [
                'attr' => [
                    'autofocus' => 'autofocus',
                    'placeholder' => 'Enter the ingredient that you want to analyse'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Analyse Ingredient'
            ]);
    }

    public function ConfigureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => NutritionAnalysis::class
        ]);
    }
}