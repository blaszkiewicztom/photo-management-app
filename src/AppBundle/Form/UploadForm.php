<?php

namespace AppBundle\Form;

use AppBundle\Entity\UploadedImage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UploadForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('description', TextareaType::class, array(
            'attr' => array(
                'class' => 'form-control',
                'rows' => 3
            )
        ))
            ->add('file', FileType::class, array(
            'attr' => array(
                'class' => 'form-control-file'
            )
        ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => UploadedImage::class
        ));
    }

}
