<?php

namespace TDN\Bundle\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDN\Bundle\QuizBundle\Entity\ResultatsQuiz
 */
class ResultatsQuiz
{
    /**
     * @var integer $participant
     */
    private $participant;

    /**
     * @var string $profil
     */
    private $profil;

    /**
     * @var string $details
     */
    private $details;

    /**
     * @var \DateTime $createdAt
     */
    private $createdAt;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var TDN\Bundle\QuizBundle\Entity\Quiz
     */
    private $lnQuiz;


    /**
     * Set participant
     *
     * @param integer $participant
     * @return ResultatsQuiz
     */
    public function setParticipant($participant)
    {
        $this->participant = $participant;
    
        return $this;
    }

    /**
     * Get participant
     *
     * @return integer 
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Set profil
     *
     * @param string $profil
     * @return ResultatsQuiz
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
    
        return $this;
    }

    /**
     * Get profil
     *
     * @return string 
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return ResultatsQuiz
     */
    public function setDetails($details)
    {
        $this->details = $details;
    
        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ResultatsQuiz
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * @return ResultatsQuiz
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
