<?php

namespace App\Form;

use App\Entity\Chambre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ChambreFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero',TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'readonly' => true,
                    'placeholder'=>'Ex. 0001-1234'
                ]
                
            ])
            
            ->add('idBatiment',null,[
                'attr'=>[
                    'class'=>'form-control myidtypebourse'
                ]
            ])
            ->add('idTypeChambre',null,[
                'attr'=>[
                    'class'=>'form-control mynumerochambre'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }

    public function deleteid($id)
    {
        $entityManager = $this->getEntityManager();
    }
}
