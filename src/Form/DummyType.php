<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\NotBlank;
use Tigris\CoreBundle\Form\Type\UserType;

class DummyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('text', TextType::class, [
                'label' => 'Simple Text Field',
                'required' => true,
                'mapped' => false,
                'help' => 'This is a simple text field.',
                'attr' => [
                    'placeholder' => 'Enter your name',
                ],
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('textarea', TextareaType::class, [
                'label' => 'Textarea',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Enter a description',
                ],
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('choices', ChoiceType::class, [
                'label' => 'Choice Field',
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ],
                'expanded' => false,
                'required' => false,
                'multiple' => false,
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('checkbox', CheckboxType::class, [
                'label' => 'Checkbox',
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new IsTrue(),
                ],
            ])

            ->add('checkboxes', ChoiceType::class, [
                'label' => 'Choice Expanded',
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ],
                'expanded' => true,
                'multiple' => true,
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('radio', ChoiceType::class, [
                'label' => 'Radio Buttons',
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ],
                'expanded' => true,
                'multiple' => false,
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('email', EmailType::class, [
                'label' => 'Email Field',
                'required' => true,
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Enter your email',
                ],
            ])

            ->add('range', RangeType::class, [
                'label' => 'Range Field',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ])

            ->add('file', FileType::class, [
                'label' => 'File Upload',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'accept' => 'image/*',
                ],
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('button', ButtonType::class, [
                'label' => 'Button',
                'attr' => [
                    'type' => 'reset',
                ],
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Submit',
            ])


        ;


    }
}