<?php

namespace TDN\VideoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

use TDN\VideoBundle\Form\Type\VideoAdminType;

class VideoAdminNewType extends VideoAdminType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);

        // Document Héritage
        $builder->add('datePublication', 'date',
            array('label' => 'Date de publication',
                  'data' => new \DateTime,
                  'format' => 'dd-MM-yyyy',
                  'input' => 'datetime'
            ));
     }

	public function setDefaultOptions(OptionsResolverInterface $resolver) {

	    $resolver->setDefaults(array(
	    	'data_class' => 'TDN\VideoBundle\Entity\Video',
            'cascade' => true
    	));
	}

    public function getName()
    {
        return 'video_add';
    }
}