<?php

namespace TDN\Bundle\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDN\Bundle\QuizBundle\Entity\ProfilQuiz
 */
class ProfilQuiz
{
    /**
     * @var string $ordre
     */
    private $ordre;

    /**
     * @var string $titre
     */
    private $titre;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var integer $illustration
     */
    private $illustration;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var TDN\Bundle\QuizBundle\Entity\Quiz
     */
    private $lnQuiz;


    /**
     * Set ordre
     *
     * @param string $ordre
     * @return ProfilQuiz
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    
        return $this;
    }

    /**
     * Get ordre
     *
     * @return string 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return ProfilQuiz
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ProfilQuiz
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set illustration
     *
     * @param integer $illustration
     * @return ProfilQuiz
     */
    public function setIllustration($illustration)
    {
        $this->illustration = $illustration;
    
        return $this;
    }

    /**
     * Get illustration
     *
     * @return integer 
     */
    public function getIllustration()
    {
        return $this->illustration;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lnQuiz
     *
     * @param TDN\Bundle\QuizBundle\Entity\Quiz $lnQuiz
     * @return ProfilQuiz
     */
    public function setLnQuiz(\TDN\Bundle\QuizBundle\Entity\Quiz $lnQuiz = null)
    {
        $this->lnQuiz = $lnQuiz;
    
        return $this;
    }

    /**
     * Get lnQuiz
     *
     * @return TDN\Bundle\QuizBundle\Entity\Quiz 
     */
    public function getLnQuiz()
    {
        return $this->lnQuiz;
    }
}
