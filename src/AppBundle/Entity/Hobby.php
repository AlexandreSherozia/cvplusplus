<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Hobby
 *
 * @ORM\Table(name="hobby")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HobbyRepository")
 */
class Hobby
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
     * @ORM\Column(name="area_1", type="string", length=100)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de 2 caractères",
     *     max=30, maxMessage="Pas plus de 30 caractères, SVP.")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $area1;

    /**
     * @var string
     *
     * @ORM\Column(name="content_1", type="string", length=255)
     *
     * @Assert\Length(min=5, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $content1;

    /**
     * @var string
     *
     * @ORM\Column(name="area_2", type="string", length=100, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de 2 caractères",
     *     max=30, maxMessage="Pas plus de 30 caractères, SVP.")
     */
    private $area2;

    /**
     * @var string
     *
     * @ORM\Column(name="content_2", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=5, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $content2;

    /**
     * @var string
     *
     * @ORM\Column(name="area_3", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de 2 caractères",
     *     max=30, maxMessage="Pas plus de 30 caractères, SVP.")
     */
    private $area3;

    /**
     * @var string
     *
     * @ORM\Column(name="content_3", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=5, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $content3;

    /**
     * @var string
     *
     * @ORM\Column(name="area_4", type="string", length=100, nullable=true)
     *
     * @Assert\Length(min=2, minMessage="Il faudrait plus de 2 caractères",
     *     max=30, maxMessage="Pas plus de 30 caractères, SVP.")
     */
    private $area4;

    /**
     * @var string
     *
     * @ORM\Column(name="content_4", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=5, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $content4;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    public function __construct()
    {
        $this->date = new \DateTime();
        //$this->setDate(new \DateTime());
    }


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
     * Set area1
     *
     * @param string $area1
     *
     * @return Hobby
     */
    public function setArea1($area1)
    {
        $this->area1 = $area1;

        return $this;
    }

    /**
     * Get area1
     *
     * @return string
     */
    public function getArea1()
    {
        return $this->area1;
    }

    /**
     * Set content1
     *
     * @param string $content1
     *
     * @return Hobby
     */
    public function setContent1($content1)
    {
        $this->content1 = $content1;

        return $this;
    }

    /**
     * Get content1
     *
     * @return string
     */
    public function getContent1()
    {
        return $this->content1;
    }

    /**
     * Set area2
     *
     * @param string $area2
     *
     * @return Hobby
     */
    public function setArea2($area2)
    {
        $this->area2 = $area2;

        return $this;
    }

    /**
     * Get area2
     *
     * @return string
     */
    public function getArea2()
    {
        return $this->area2;
    }

    /**
     * Set content2
     *
     * @param string $content2
     *
     * @return Hobby
     */
    public function setContent2($content2)
    {
        $this->content2 = $content2;

        return $this;
    }

    /**
     * Get content2
     *
     * @return string
     */
    public function getContent2()
    {
        return $this->content2;
    }

    /**
     * Set area3
     *
     * @param string $area3
     *
     * @return Hobby
     */
    public function setArea3($area3)
    {
        $this->area3 = $area3;

        return $this;
    }

    /**
     * Get area3
     *
     * @return string
     */
    public function getArea3()
    {
        return $this->area3;
    }

    /**
     * Set content3
     *
     * @param string $content3
     *
     * @return Hobby
     */
    public function setContent3($content3)
    {
        $this->content3 = $content3;

        return $this;
    }

    /**
     * Get content3
     *
     * @return string
     */
    public function getContent3()
    {
        return $this->content3;
    }

    /**
     * Set area4
     *
     * @param string $area4
     *
     * @return Hobby
     */
    public function setArea4($area4)
    {
        $this->area4 = $area4;

        return $this;
    }

    /**
     * Get area4
     *
     * @return string
     */
    public function getArea4()
    {
        return $this->area4;
    }

    /**
     * Set content4
     *
     * @param string $content4
     *
     * @return Hobby
     */
    public function setContent4($content4)
    {
        $this->content4 = $content4;

        return $this;
    }

    /**
     * Get content4
     *
     * @return string
     */
    public function getContent4()
    {
        return $this->content4;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Hobby
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

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Hobby
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    public function isAuthor(User $user)
    {
        return $this->userId == $user->getId();
    }
}
