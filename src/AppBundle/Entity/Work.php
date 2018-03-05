<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Work
 *
 * @ORM\Table(name="work")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkRepository")
 */
class Work
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
     * @ORM\Column(name="url_1", type="string", length=255)
     *
     * @Assert\Length(max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     * @Assert\Url(message = "{{ value }} n'est pas un URL valide !")
     * @Assert\NotNull()
     */
    private $url1;

    /**
     * @var string
     *
     * @ORM\Column(name="description_1", type="string", length=255)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $description1;

    /**
     * @var string
     *
     * @ORM\Column(name="url_2", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     * @Assert\Url(message = "{{ value }} n'est pas un URL valide !")
     */
    private $url2;

    /**
     * @var string
     *
     * @ORM\Column(name="description_2", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $description2;

    /**
     * @var string
     *
     * @ORM\Column(name="url_3", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     * @Assert\Url(message = "{{ value }} n'est pas un URL valide !")
     */
    private $url3;

    /**
     * @var string
     *
     * @ORM\Column(name="description_3", type="string", length=255, nullable=true)
     *
     * @Assert\Length(min=20, minMessage="Il faudrait plus de {{ limit }} caractères",
     *     max=255, maxMessage="Pas plus de {{ limit }} caractères, SVP.")
     */
    private $description3;

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
     * Set url1
     *
     * @param string $url1
     *
     * @return Work
     */
    public function setUrl1($url1)
    {
        $this->url1 = $url1;

        return $this;
    }

    /**
     * Get url1
     *
     * @return string
     */
    public function getUrl1()
    {
        return $this->url1;
    }

    /**
     * Set description1
     *
     * @param string $description1
     *
     * @return Work
     */
    public function setDescription1($description1)
    {
        $this->description1 = $description1;

        return $this;
    }

    /**
     * Get description1
     *
     * @return string
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * Set url2
     *
     * @param string $url2
     *
     * @return Work
     */
    public function setUrl2($url2)
    {
        $this->url2 = $url2;

        return $this;
    }

    /**
     * Get url2
     *
     * @return string
     */
    public function getUrl2()
    {
        return $this->url2;
    }

    /**
     * Set description2
     *
     * @param string $description2
     *
     * @return Work
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;

        return $this;
    }

    /**
     * Get description2
     *
     * @return string
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Set url3
     *
     * @param string $url3
     *
     * @return Work
     */
    public function setUrl3($url3)
    {
        $this->url3 = $url3;

        return $this;
    }

    /**
     * Get url3
     *
     * @return string
     */
    public function getUrl3()
    {
        return $this->url3;
    }

    /**
     * Set description3
     *
     * @param string $description3
     *
     * @return Work
     */
    public function setDescription3($description3)
    {
        $this->description3 = $description3;

        return $this;
    }

    /**
     * Get description3
     *
     * @return string
     */
    public function getDescription3()
    {
        return $this->description3;
    }

    public function isAuthor(User $user)
    {
        return $this->userId == $user->getId();
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Work
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
}
