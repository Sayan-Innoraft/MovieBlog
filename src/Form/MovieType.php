<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Form type to take movie data from users.
 */
class MovieType extends AbstractType {
  public function buildForm(FormBuilderInterface $builder, array $options):
  void {
    $builder
      ->add('title', TextType::class,[
        'attr' => [
        'placeholder' => "Title"]
      ])
      ->add('year', NumberType::class,[
        'attr' => ['placeholder' => "Year"]
      ])
      ->add('description', TextareaType::class,[
        'attr' => [
          'placeholder' => "Description"
        ]
      ])
      ->add('thumbnail', FileType::class)
      ->add('save', SubmitType::class);
  }
  public function configureOptions(OptionsResolver $resolver) {
    return $resolver->setDefaults([
      'data_class' => Movie::class,
    ]);
  }

}
