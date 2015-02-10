<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new TDN\Bundle\CoreBundle\TDNCoreBundle(),
            new TDN\Bundle\DocumentBundle\TDNDocumentBundle(),
            new TDN\Bundle\ImageBundle\TDNImageBundle(),
            new TDN\Bundle\CommentaireBundle\TDNCommentaireBundle(),
            new TDN\Bundle\NanaBundle\TDNNanaBundle(),
            new TDN\Bundle\NewsletterBundle\TDNNewsletterBundle(),
            new TDN\Bundle\ConcoursBundle\TDNConcoursBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new TDN\Bundle\CauseuseBundle\TDNCauseuseBundle(),
            new TDN\Bundle\ConseilExpertBundle\TDNConseilExpertBundle(),
            new TDN\Bundle\DossierRedactionBundle\TDNDossierRedactionBundle(),
            new TDN\Bundle\ProduitBundle\TDNProduitBundle(),
            new TDN\Bundle\QuizBundle\TDNQuizBundle(),
            new TDN\Bundle\RedactionBundle\TDNRedactionBundle(),
            new TDN\Bundle\VideoBundle\TDNVideoBundle(),
            new TDN\Bundle\AdvertiseBundle\TDNAdvertiseBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
