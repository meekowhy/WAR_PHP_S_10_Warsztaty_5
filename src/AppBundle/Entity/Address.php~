<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="house_num", type="string", length=255)
     */
    private $houseNum;

    /**
     * @var string
     *
     * @ORM\Column(name="flat_num", type="string", length=255)
     */
    private $flatNum;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="address")
     */
    private $users;





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
     * Set city
     *
     * @param string $city
     *
     * @return Address
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
     * Set street
     *
     * @param string $street
     *
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set houseNum
     *
     * @param string $houseNum
     *
     * @return Address
     */
    public function setHouseNum($houseNum)
    {
        $this->houseNum = $houseNum;

        return $this;
    }

    /**
     * Get houseNum
     *
     * @return string
     */
    public function getHouseNum()
    {
        return $this->houseNum;
    }

    /**
     * Set flatNum
     *
     * @param string $flatNum
     *
     * @return Address
     */
    public function setFlatNum($flatNum)
    {
        $this->flatNum = $flatNum;

        return $this;
    }

    /**
     * Get flatNum
     *
     * @return string
     */
    public function getFlatNum()
    {
        return $this->flatNum;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Address
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
