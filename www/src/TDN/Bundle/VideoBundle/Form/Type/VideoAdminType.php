<?php

namespace TDN\VideoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use TDN\DocumentBundle\Form\Type\SlideType;
use TDN\ImageBundle\Form\Type\simpleImageType;
use TDN\DocumentBundle\Form\Type\ThematiqueType;

use Doctrine\ORM\EntityRepository;


class VideoAdminType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // Document Héritage
        $builder->add('titre', 'text', 
            array(
                'label' => 'Titre de la vidéo'
            ));
        $builder->add('slug', 'text', 
            array('label' => 'Chaîne d’URL',
                   'required' => false));
        $builder->add('abstract', 'textarea', 
            array('label' => 'Résumé de la vidéo'));
        $builder->add('tags', 'text',
            array('label' => 'Mots-clefs',
                  'attr' => array('size' => 75)
            ));
        $builder->add('lnIllustration', new simpleImageType(), 
            array(
                'label' => 'Vignette liée au document',
                'required' => false
            ));
        $builder->add('statut', 'choice', 
            array('label' => 'Etat de publication', 
                  'choices' => array('VIDEO_PROPOSEE' => 'brouillon', 'VIDEO_PUBLIEE' => 'publié'),
                  'expanded' => true,
                  'multiple' => false,
                  'preferred_choices' => array('brouillon')
            ));
        $builder->add('version', 'text', 
            array('label' => 'Version',
                  'required' => false));

        // Champs Vidéo
        $builder->add('idHebergeur', 'choice', 
            array(
                'choices' => array('youtube' => 'YouTube', 'vimeo' => 'Vimeo', 'dailymotion' => 'DailyMotion', 'ultimedia' => 'Ultimedia', 'wat' => 'Wat', '@' => 'Autre'),
                'required' => false,
                'label' => 'Plate-forme d’hébergement',
                'empty_value' => 'Choisis un hébergeur'
            ));
        $builder->add('idVideo', 'text',
            array('required' => false,
                  'label' => 'URL de la vidéo',
                  'attr' => array('size' => 80, 'placeholder' => 'http://')
            ));
		$builder->add('codeIntegration', 'textarea', 
            array('required' => false,
                  'label' => 'Code d’intégration donné par l’hébergeur'
            ));
        $builder->add('duree', 'text',
            array('label' => 'Durée',
                  'required' => false));
        $builder->add('vignette', 'text', 
            array('required'=> false,
                  'label' => 'URL de la vignette',
                  'attr' => array('size' => 80, 'placeholder' => 'http://')
            ));
        $builder->add('params', 'text', 
            array('required'=>false
            ));
        $builder->add('lnDossier', 'entity', array(
            'label' => "Est-ce une partie d'un dossier ?",
            'class' => 'TDN\DossierRedactionBundle\Entity\Dossier',
            'required' => false,
            'property' => 'titre',
            'expanded' => false,
            'multiple' => false,
            'empty_value' => 'Non',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                          ->where("u.statut LIKE 'DOSSIER_%'");
        }));
        $builder->add('ordreDossier', 'integer', 
            array('label' => 'Ordre de classement dans le dossier',
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
        return 'video_add';
    }
}