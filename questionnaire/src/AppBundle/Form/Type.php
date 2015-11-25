<?php

namespace Acme\BlogBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add( 'title', 'text' );
        $builder->add( 'body',  'textarea' );
    }
 
    function getName() {
        return 'PostType';
    }
}