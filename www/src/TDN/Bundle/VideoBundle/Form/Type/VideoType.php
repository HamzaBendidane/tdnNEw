<?php

namespace TDN\VideoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use TDN\ImageBundle\Form\Type\VignetteType;

class VideoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // Document Héritage
        $builder->add('abstract', 'textarea', 
            array('label' => 'Texte d’accompagnement',
                  'required' => false));
        $builder->add('idHebergeur', 'choice', 
            array('choices' => array('youtube', 'vimeo', 'dailymotion', 'autre'),
                'empty_value' => 'Choisis un hébergeur'));
        $builder->add('idVideo', 'text',
            array('label' => 'URL de la vidéo',
                  'attr' => array('size' => '80'),
                  'required' => false));
		    $builder->add('codeIntegration', 'textarea',
            array('label' => 'Code à intégrer',
                  'required' => false));
     }


	public function setDefaultOptions(OptionsResolverInterface $resolver) {

	    $resolver->setDefaults(array(
	    	'data_class' => 'TDN\VideoBundle\Entity\Video',
            'cascade' => true
    	));
	}

    public function getName()
    {
        return 'video';
    }
}
