<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ApplicationRepository")
 */
class Application
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=100)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=100)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=12)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cellPhone", type="string", length=50)
     */
    private $cellPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="countryOfLiving", type="string", length=150)
     */
    private $countryOfLiving;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date")
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookProfile", type="string", length=255)
     */
    private $facebookProfile;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedinProfile", type="string", length=255)
     */
    private $linkedinProfile;

    /**
     * @var string
     *
     * @ORM\Column(name="knowFrom", type="string", length=255)
     */
    private $knowFrom;

    /**
     * @var array
     *
     * @ORM\Column(name="languages", type="array")
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldOfWork", type="string", length=255)
     */
    private $fieldOfWork;

    /**
     * @var string
     *
     * @ORM\Column(name="companyName", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wannaBePartner", type="boolean")
     */
    private $wannaBePartner;

    /**
     * @var string
     *
     * @ORM\Column(name="motivation", type="text")
     */
    private $motivation;

    /**
     * @var string
     *
     * @ORM\Column(name="dietaryRequirements", type="text")
     */
    private $dietaryRequirements;

    /**
     * @var string
     *
     * @ORM\Column(name="accommodation", type="string", length=255)
     */
    private $accommodation;

    /**
     * @var string
     *
     * @ORM\Column(name="accommodationComments", type="text")
     */
    private $accommodationComments;

    /**
     * @var string
     *
     * @ORM\Column(name="applicationStatus", type="string", length=255)
     */
    private $applicationStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="applicationComments", type="text")
     */
    private $applicationComments;

    /**
     * @var string
     *
     * @ORM\Column(name="namePrefix", type="string", length=10)
     */
    private $namePrefix;

    /**
     * @var string
     *
     * @ORM\Column(name="transportation", type="string", length=50)
     */
    private $transportation;


    /**
     * @var
     * @ORM\Column(name="uploaded_image", type="string", length=50)
     */
    private $uploadedImage;


    const STATUS_NEW = 'new';
    const STATUS_APPROVED = 'approved';
    const STATUS__REJECTED = 'rejected';

    protected function getStatuses()
    {
        return array(
            'new' => 'New',
            'approved' => 'Approved',
            'rejected' => 'Rejected'
        );
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Application
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Application
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Application
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Application
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
     * Set cellPhone
     *
     * @param string $cellPhone
     *
     * @return Application
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    /**
     * Get cellPhone
     *
     * @return string
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * Set countryOfLiving
     *
     * @param string $countryOfLiving
     *
     * @return Application
     */
    public function setCountryOfLiving($countryOfLiving)
    {
        $this->countryOfLiving = $countryOfLiving;

        return $this;
    }

    /**
     * Get countryOfLiving
     *
     * @return string
     */
    public function getCountryOfLiving()
    {
        return $this->countryOfLiving;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return Application
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set facebookProfile
     *
     * @param string $facebookProfile
     *
     * @return Application
     */
    public function setFacebookProfile($facebookProfile)
    {
        $this->facebookProfile = $facebookProfile;

        return $this;
    }

    /**
     * Get facebookProfile
     *
     * @return string
     */
    public function getFacebookProfile()
    {
        return $this->facebookProfile;
    }

    /**
     * Set linkedinProfile
     *
     * @param string $linkedinProfile
     *
     * @return Application
     */
    public function setLinkedinProfile($linkedinProfile)
    {
        $this->linkedinProfile = $linkedinProfile;

        return $this;
    }

    /**
     * Get linkedinProfile
     *
     * @return string
     */
    public function getLinkedinProfile()
    {
        return $this->linkedinProfile;
    }

    /**
     * Set knowFrom
     *
     * @param string $knowFrom
     *
     * @return Application
     */
    public function setKnowFrom($knowFrom)
    {
        $this->knowFrom = $knowFrom;

        return $this;
    }

    /**
     * Get knowFrom
     *
     * @return string
     */
    public function getKnowFrom()
    {
        return $this->knowFrom;
    }

    /**
     * Set languages
     *
     * @param array $languages
     *
     * @return Application
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set fieldOfWork
     *
     * @param string $fieldOfWork
     *
     * @return Application
     */
    public function setFieldOfWork($fieldOfWork)
    {
        $this->fieldOfWork = $fieldOfWork;

        return $this;
    }

    /**
     * Get fieldOfWork
     *
     * @return string
     */
    public function getFieldOfWork()
    {
        return $this->fieldOfWork;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Application
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Application
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set wannaBePartner
     *
     * @param boolean $wannaBePartner
     *
     * @return Application
     */
    public function setWannaBePartner($wannaBePartner)
    {
        $this->wannaBePartner = $wannaBePartner;

        return $this;
    }

    /**
     * Get wannaBePartner
     *
     * @return boolean
     */
    public function getWannaBePartner()
    {
        return $this->wannaBePartner;
    }

    /**
     * Set motivation
     *
     * @param string $motivation
     *
     * @return Application
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }

    /**
     * Get motivation
     *
     * @return string
     */
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * Set dietaryRequirements
     *
     * @param string $dietaryRequirements
     *
     * @return Application
     */
    public function setDietaryRequirements($dietaryRequirements)
    {
        $this->dietaryRequirements = $dietaryRequirements;

        return $this;
    }

    /**
     * Get dietaryRequirements
     *
     * @return string
     */
    public function getDietaryRequirements()
    {
        return $this->dietaryRequirements;
    }

    /**
     * Set accommodation
     *
     * @param string $accommodation
     *
     * @return Application
     */
    public function setAccommodation($accommodation)
    {
        $this->accommodation = $accommodation;

        return $this;
    }

    /**
     * Get accommodation
     *
     * @return string
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Set accommodationComments
     *
     * @param string $accommodationComments
     *
     * @return Application
     */
    public function setAccommodationComments($accommodationComments)
    {
        $this->accommodationComments = $accommodationComments;

        return $this;
    }

    /**
     * Get accommodationComments
     *
     * @return string
     */
    public function getAccommodationComments()
    {
        return $this->accommodationComments;
    }

    /**
     * Set applicationStatus
     *
     * @param string $applicationStatus
     *
     * @return Application
     */
    public function setApplicationStatus($applicationStatus)
    {
        $this->applicationStatus = $applicationStatus;

        return $this;
    }

    /**
     * Get applicationStatus
     *
     * @return string
     */
    public function getApplicationStatus()
    {
        return $this->applicationStatus;
    }

    /**
     * Set applicationComments
     *
     * @param string $applicationComments
     *
     * @return Application
     */
    public function setApplicationComments($applicationComments)
    {
        $this->applicationComments = $applicationComments;

        return $this;
    }

    /**
     * Get applicationComments
     *
     * @return string
     */
    public function getApplicationComments()
    {
        return $this->applicationComments;
    }

    /**
     * Set namePrefix
     *
     * @param string $namePrefix
     *
     * @return Application
     */
    public function setNamePrefix($namePrefix)
    {
        $this->namePrefix = $namePrefix;

        return $this;
    }

    /**
     * Get namePrefix
     *
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->namePrefix;
    }

    /**
     * Set transportation
     *
     * @param string $transportation
     *
     * @return Application
     */
    public function setTransportation($transportation)
    {
        $this->transportation = $transportation;

        return $this;
    }

    /**
     * Get transportation
     *
     * @return string
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Set uploadedImage
     *
     * @param string $uploadedImage
     *
     * @return Application
     */
    public function setUploadedImage($uploadedImage)
    {
        $this->uploadedImage = $uploadedImage;

        return $this;
    }

    /**
     * Get uploadedImage
     *
     * @return string
     */
    public function getUploadedImage()
    {
        return $this->uploadedImage;
    }
}
