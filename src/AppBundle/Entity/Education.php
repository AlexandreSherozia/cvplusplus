<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Education
 *
 * @ORM\Table(name="education")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EducationRepository")
 */
class Education
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
     * @ORM\Column(name="informatics", type="string", length=255)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $informatics;

    /**
     * @var string
     *
     * @ORM\Column(name="other_sector_1", type="string", length=100, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de 2 caractères",
     *     max=30, maxMessage="Pas plus de 30 caractères, SVP.")
     */
    private $otherSector1;

    /**
     * @var string
     *
     * @ORM\Column(name="other_sector_1_content", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $otherSector1Content;

    /**
     * @var string
     *
     * @ORM\Column(name="other_sector_2", type="string", length=100, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de 2 caractères",
     *     max=30, maxMessage="Pas plus de 30 caractères, SVP.")
     */
    private $otherSector2;

    /**
     * @var string
     *
     * @ORM\Column(name="other_sector_2_content", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $otherSector2Content;

    /**
     * @var string
     *
     * @ORM\Column(name="other_sector_3", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de 2 caractères",
     *     max=30, maxMessage="Pas plus de 30 caractères, SVP.")
     */
    private $otherSector3;

    /**
     * @var string
     *
     * @ORM\Column(name="other_sector_3_content", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $otherSector3Content;

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
     * Set informatics
     *
     * @param string $informatics
     *
     * @return Education
     */
    public function setInformatics($informatics)
    {
        $this->informatics = $informatics;

        return $this;
    }

    /**
     * Get informatics
     *
     * @return string
     */
    public function getInformatics()
    {
        return $this->informatics;
    }

    /**
     * Set otherSector1
     *
     * @param string $otherSector1
     *
     * @return Education
     */
    public function setOtherSector1($otherSector1)
    {
        $this->otherSector1 = $otherSector1;

        return $this;
    }

    /**
     * Get otherSector1
     *
     * @return string
     */
    public function getOtherSector1()
    {
        return $this->otherSector1;
    }

    /**
     * Set otherSector1Content
     *
     * @param string $otherSector1Content
     *
     * @return Education
     */
    public function setOtherSector1Content($otherSector1Content)
    {
        $this->otherSector1Content = $otherSector1Content;

        return $this;
    }

    /**
     * Get otherSector1Content
     *
     * @return string
     */
    public function getOtherSector1Content()
    {
        return $this->otherSector1Content;
    }

    /**
     * Set otherSector2
     *
     * @param string $otherSector2
     *
     * @return Education
     */
    public function setOtherSector2($otherSector2)
    {
        $this->otherSector2 = $otherSector2;

        return $this;
    }

    /**
     * Get otherSector2
     *
     * @return string
     */
    public function getOtherSector2()
    {
        return $this->otherSector2;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Education
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    public function isAuthor(User $user)
    {
        return $this->userId == $user->getId();
    }

    /**
     * Set otherSector2Content
     *
     * @param string $otherSector2Content
     *
     * @return Education
     */
    public function setOtherSector2Content($otherSector2Content)
    {
        $this->otherSector2Content = $otherSector2Content;

        return $this;
    }

    /**
     * Get otherSector2Content
     *
     * @return string
     */
    public function getOtherSector2Content()
    {
        return $this->otherSector2Content;
    }

    /**
     * Set otherSector3
     *
     * @param string $otherSector3
     *
     * @return Education
     */
    public function setOtherSector3($otherSector3)
    {
        $this->otherSector3 = $otherSector3;

        return $this;
    }

    /**
     * Get otherSector3
     *
     * @return string
     */
    public function getOtherSector3()
    {
        return $this->otherSector3;
    }

    /**
     * Set otherSector3Content
     *
     * @param string $otherSector3Content
     *
     * @return Education
     */
    public function setOtherSector3Content($otherSector3Content)
    {
        $this->otherSector3Content = $otherSector3Content;

        return $this;
    }

    /**
     * Get otherSector3Content
     *
     * @return string
     */
    public function getOtherSector3Content()
    {
        return $this->otherSector3Content;
    }
}
