<?php

namespace TDN\Bundle\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TDN\Bundle\DocumentBundle\Entity\Document;

/**
 * TDN\Bundle\QuizBundle\Entity\Quiz
 */
class Quiz extends Document {
    /**
     * @var integer $nombreQuestions
     */
    private $nombreQuestions;

    /**
     * @var integer $nombreProfils
     */
    private $nombreProfils;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $questions;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $profils;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $resultats;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profils = new \Doctrine\Common\Collections\ArrayCollection();
        $this->resultats = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set nombreQuestions
     *
     * @param integer $nombreQuestions
     * @return Quiz
     */
    public function setNombreQuestions($nombreQuestions)
    {
        $this->nombreQuestions = $nombreQuestions;
    
        return $this;
    }

    /**
     * Get nombreQuestions
     *
     * @return integer 
     */
    public function getNombreQuestions()
    {
        return $this->nombreQuestions;
    }

    /**
     * Set nombreProfils
     *
     * @param integer $nombreProfils
     * @return Quiz
     */
    public function setNombreProfils($nombreProfils)
    {
        $this->nombreProfils = $nombreProfils;
    
        return $this;
    }

    /**
     * Get nombreProfils
     *
     * @return integer 
     */
    public function getNombreProfils()
    {
        return $this->nombreProfils;
    }

    /**
     * Add questions
     *
     * @param TDN\Bundle\QuizBundle\Entity\QuestionQuiz $questions
     * @return Quiz
     */
    public function addQuestion(\TDN\Bundle\QuizBundle\Entity\QuestionQuiz $questions)
    {
        $this->questions[] = $questions;
    
        return $this;
    }

    /**
     * Remove questions
     *
     * @param TDN\Bundle\QuizBundle\Entity\QuestionQuiz $questions
     */
    public function removeQuestion(\TDN\Bundle\QuizBundle\Entity\QuestionQuiz $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add profils
     *
     * @param TDN\Bundle\QuizBundle\Entity\ProfilQuiz $profils
     * @return Quiz
     */
    public function addProfil(\TDN\Bundle\QuizBundle\Entity\ProfilQuiz $profils)
    {
        $this->profils[] = $profils;
    
        return $this;
    }

    /**
     * Remove profils
     *
     * @param TDN\Bundle\QuizBundle\Entity\ProfilQuiz $profils
     */
    public function removeProfil(\TDN\Bundle\QuizBundle\Entity\ProfilQuiz $profils)
    {
        $this->profils->removeElement($profils);
    }

    /**
     * Get profils
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProfils()
    {
        return $this->profils;
    }

    /**
     * Add resultats
     *
     * @param TDN\Bundle\QuizBundle\Entity\ResultatsQuiz $resultats
     * @return Quiz
     */
    public function addResultat(\TDN\Bundle\QuizBundle\Entity\ResultatsQuiz $resultats)
    {
        $this->resultats[] = $resultats;
    
        return $this;
    }

    /**
     * Remove resultats
     *
     * @param TDN\Bundle\QuizBundle\Entity\ResultatsQuiz $resultats
     */
    public function removeResultat(\TDN\Bundle\QuizBundle\Entity\ResultatsQuiz $resultats)
    {
        $this->resultats->removeElement($resultats);
    }

    /**
     * Get resultats
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getResultats()
    {
        return $this->resultats;
    }
}
