<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Header
 *
 * @ORM\Table(name="entity_header")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HeaderRepository")
 *
 *
 * @UniqueEntity(
 *     fields={"published", "user_id"},
 *     errorPath="published",
 *     message="Vous avez déjà 1 cv publié dans la CV-liste")
 */
class Header
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
     * @ORM\Column(name="title", type="string", length=100)
     *
     *
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=100)
     *
     * @Assert\Length(min=1, minMessage="Le prénom doit faire au moins {{ limit }} caractères.",
     *     max=100, maxMessage="Pas de poèmes dans cette case, SVP :))")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     *
     * @Assert\Length(min=2, minMessage="Le nom doit faire au moins {{ limit }} caractères.",
     *     max=100, maxMessage="Pas de poèmes dans cette case, SVP :))")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100)
     *
     * @Assert\Length(min=10, minMessage="L'adresse doit faire au moins {{ limit }} caractères.",
     *     max=100, maxMessage="Pas de poèmes dans cette case, SVP :))")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="zip", type="integer")
     *
     * @Assert\Length(min=2, minMessage="Le code postal doit faire plus de {{ limit }} caractères.",
     *     max=10, maxMessage="Pas plus de 10 caractères, SVP.")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50)
     *
     * @Assert\Length(min=2, minMessage="Il n'y a pas de ville à {{ limit }} caractère.",
     *     max=20, maxMessage="pas plus de 20 caractères, SVP.")
     * @Assert\NotBlank(message="Cette case est obligatoire!")
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=true)
     *
     * @Assert\Range(min="111111111", minMessage="Ce numéro est trop court",
     *      max="999999999999", maxMessage="Ce numéro est trop long",
     *      invalidMessage="Données uniquement numériques requises")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=70, nullable=true)
     *
     */
    private $email;

    /**
     * @ORM\Column(name="date", type="datetime")
     *
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @Gedmo\Slug(fields={"title", "firstName", "name"})
     * @ORM\Column(length=255, unique=true)
     */
    private $slug;


    /**
     * @ORM\Column(name="published", type="boolean", options={"default":false})
     */
    private $published;


    //-------------------------------------------------------
    //--------------------linked attributes------------------
    //-------------------------------------------------------

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Skills", cascade={"persist", "remove"})
     *
     * @Assert\Valid()
     *
     */
    private $skills;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Education", cascade={"persist", "remove"})
     *
     * @Assert\Valid()
     *
     */
    private $education;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Experience",cascade={"persist", "remove"})
     *
     * @Assert\Valid()
     *
     */
    private $experience;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Work", cascade={"persist", "remove"})
     *
     * @Assert\Valid()
     *
     */
    private $works;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Hobby", cascade={"persist", "remove"})
     *
     * @Assert\Valid()
     *
     */
    private $hobby;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist", "remove"})
     *
     * @Assert\Valid()
     *
     */
    private $image;




    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $user_id;


    public function __construct()
    {
        $this->date = new \Datetime();
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
     * Set title
     *
     * @param string $title
     *
     * @return Header
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Header
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Header
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Header
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip
     *
     * @param integer $zip
     *
     * @return Header
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return int
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Header
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Header
     */
    public function setTelephone($telephone = null)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Header
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Header
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    public function isAuthor(User $user)
    {
        return $this->user_id == $user->getId();
    }



    /**
     * Set skills
     *
     * @param \AppBundle\Entity\Skills $skills
     *
     * @return Header
     */
    public function setSkills(\AppBundle\Entity\Skills $skills = null)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return \AppBundle\Entity\Skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set education
     *
     * @param \AppBundle\Entity\Education $education
     *
     * @return Header
     */
    public function setEducation(\AppBundle\Entity\Education $education = null)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return \AppBundle\Entity\Education
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set experience
     *
     * @param \AppBundle\Entity\Experience $experience
     *
     * @return Header
     */
    public function setExperience(\AppBundle\Entity\Experience $experience = null)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return \AppBundle\Entity\Experience
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set works
     *
     * @param \AppBundle\Entity\Work $works
     *
     * @return Header
     */
    public function setWorks(\AppBundle\Entity\Work $works = null)
    {
        $this->works = $works;

        return $this;
    }

    /**
     * Get works
     *
     * @return \AppBundle\Entity\Work
     */
    public function getWorks()
    {
        return $this->works;
    }

    /**
     * Set hobby
     *
     * @param \AppBundle\Entity\Hobby $hobby
     *
     * @return Header
     */
    public function setHobby(\AppBundle\Entity\Hobby $hobby = null)
    {
        $this->hobby = $hobby;

        return $this;
    }

    /**
     * Get hobby
     *
     * @return \AppBundle\Entity\Hobby
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Header
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




    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Header
     */
    public function setImage(\AppBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Header
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Header
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }
}
