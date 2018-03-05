<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Skills
 *
 * @ORM\Table(name="entity_skills")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SkillsRepository")
 */
class Skills
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=255)
     *
     * @Assert\Length(min=3, minMessage="Il faudrait plus de 3 caractères",
     *     max=100, maxMessage="Vous êtes un génie, mais moins de 100 caractères, SVP. :))")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="sector1", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de 2 caractères",
     *     max=30, maxMessage="Pas plus de 30 caractères, SVP.")
     */
    private $sector1;

    /**
     * @var string
     *
     * @ORM\Column(name="sector1Content", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $sector1Content;

    /**
     * @var string
     *
     * @ORM\Column(name="sector2", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=30, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $sector2;

    /**
     * @var string
     *
     * @ORM\Column(name="sector2Content", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $sector2Content;

    /**
     * @var string
     *
     * @ORM\Column(name="sector3", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=30, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $sector3;

    /**
     * @var string
     *
     * @ORM\Column(name="sector3Content", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $sector3Content;



    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return Skills
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set sector1
     *
     * @param string $sector1
     *
     * @return Skills
     */
    public function setSector1($sector1)
    {
        $this->sector1 = $sector1;

        return $this;
    }

    /**
     * Get sector1
     *
     * @return string
     */
    public function getSector1()
    {
        return $this->sector1;
    }

    /**
     * Set sector1Content
     *
     * @param string $sector1Content
     *
     * @return Skills
     */
    public function setSector1Content($sector1Content)
    {
        $this->sector1Content = $sector1Content;

        return $this;
    }

    /**
     * Get sector1Content
     *
     * @return string
     */
    public function getSector1Content()
    {
        return $this->sector1Content;
    }

    /**
     * Set sector2
     *
     * @param string $sector2
     *
     * @return Skills
     */
    public function setSector2($sector2)
    {
        $this->sector2 = $sector2;

        return $this;
    }

    /**
     * Get sector2
     *
     * @return string
     */
    public function getSector2()
    {
        return $this->sector2;
    }

    /**
     * Set sector2Content
     *
     * @param string $sector2Content
     *
     * @return Skills
     */
    public function setSector2Content($sector2Content)
    {
        $this->sector2Content = $sector2Content;

        return $this;
    }

    /**
     * Get sector2Content
     *
     * @return string
     */
    public function getSector2Content()
    {
        return $this->sector2Content;
    }

    /**
     * Set sector3
     *
     * @param string $sector3
     *
     * @return Skills
     */
    public function setSector3($sector3)
    {
        $this->sector3 = $sector3;

        return $this;
    }

    /**
     * Get sector3
     *
     * @return string
     */
    public function getSector3()
    {
        return $this->sector3;
    }

    /**
     * Set sector3Content
     *
     * @param string $sector3Content
     *
     * @return Skills
     */
    public function setSector3Content($sector3Content)
    {
        $this->sector3Content = $sector3Content;

        return $this;
    }

    /**
     * Get sector3Content
     *
     * @return string
     */
    public function getSector3Content()
    {
        return $this->sector3Content;
    }



    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Skills
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    public function isAuthor(User $user)
    {
        return $this->userId == $user->getId();
    }
}

