<?php
namespace BlogBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Created by PhpStorm.
 * User: progi
 * Date: 22.08.2016
 * Time: 0:37
 */

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add("title")
                ->add("summary")
                ->add("body")
                ->add("save",SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults([
            "data_class"=>"BlogBundle\Entity\Blog"
        ]);
    }
}