<?php

namespace ProduccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendor
 *
 * @ORM\Table(name="VENDOR", uniqueConstraints={@ORM\UniqueConstraint(name="UNI01_VENDOR", columns={"COMPANY"})}, indexes={@ORM\Index(name="IND_VENDOR_NITCT", columns={"NIT"}), @ORM\Index(name="IND_VENDOR_CONTACT", columns={"CONTACT_ID"}), @ORM\Index(name="IND_VENDOR_CODUNI", columns={"AD_VENDOR1"})})
 * @ORM\Entity
 */
class Vendor
{
    /**
     * @var int
     *
     * @ORM\Column(name="VENDORID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vendorid;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPANY", type="string", length=60, nullable=false)
     */
    private $company;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONTACT", type="string", length=60, nullable=true)
     */
    private $contact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADDRESS1", type="string", length=50, nullable=true)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADDRESS2", type="string", length=50, nullable=true)
     */
    private $address2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADDRESS3", type="string", length=50, nullable=true)
     */
    private $address3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHONE1", type="string", length=20, nullable=true)
     */
    private $phone1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHONE2", type="string", length=20, nullable=true)
     */
    private $phone2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHONE3", type="string", length=20, nullable=true)
     */
    private $phone3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EXT", type="string", length=20, nullable=true)
     */
    private $ext;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FAX", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOBIL", type="string", length=30, nullable=true)
     */
    private $mobil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WEBSITE", type="string", length=60, nullable=true)
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIT", type="string", length=20, nullable=true)
     */
    private $nit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="COUNTRYID", type="integer", nullable=true)
     */
    private $countryid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CITYID", type="integer", nullable=true)
     */
    private $cityid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOCATION", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VENDOR_TYPE", type="integer", nullable=true, options={"default"="2"})
     */
    private $vendorType = '2';

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR1", type="string", length=255, nullable=true)
     */
    private $adVendor1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR2", type="string", length=255, nullable=true)
     */
    private $adVendor2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR3", type="string", length=255, nullable=true)
     */
    private $adVendor3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR4", type="string", length=255, nullable=true)
     */
    private $adVendor4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR5", type="string", length=255, nullable=true)
     */
    private $adVendor5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR6", type="string", length=255, nullable=true)
     */
    private $adVendor6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR7", type="string", length=255, nullable=true)
     */
    private $adVendor7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR8", type="string", length=255, nullable=true)
     */
    private $adVendor8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR9", type="string", length=255, nullable=true)
     */
    private $adVendor9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_VENDOR10", type="string", length=255, nullable=true)
     */
    private $adVendor10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VENDOR_STATUS", type="integer", nullable=true, options={"default"="1"})
     */
    private $vendorStatus = '1';

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CONTACT_ID", referencedColumnName="CODUSUARIO")
     * })
     */
    private $contact2;


    /**
     * Get vendorid.
     *
     * @return int
     */
    public function getVendorid()
    {
        return $this->vendorid;
    }

    /**
     * Set company.
     *
     * @param string $company
     *
     * @return Vendor
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company.
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set contact.
     *
     * @param string|null $contact
     *
     * @return Vendor
     */
    public function setContact($contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact.
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set address1.
     *
     * @param string|null $address1
     *
     * @return Vendor
     */
    public function setAddress1($address1 = null)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1.
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2.
     *
     * @param string|null $address2
     *
     * @return Vendor
     */
    public function setAddress2($address2 = null)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2.
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3.
     *
     * @param string|null $address3
     *
     * @return Vendor
     */
    public function setAddress3($address3 = null)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get address3.
     *
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set phone1.
     *
     * @param string|null $phone1
     *
     * @return Vendor
     */
    public function setPhone1($phone1 = null)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1.
     *
     * @return string|null
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2.
     *
     * @param string|null $phone2
     *
     * @return Vendor
     */
    public function setPhone2($phone2 = null)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2.
     *
     * @return string|null
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set phone3.
     *
     * @param string|null $phone3
     *
     * @return Vendor
     */
    public function setPhone3($phone3 = null)
    {
        $this->phone3 = $phone3;

        return $this;
    }

    /**
     * Get phone3.
     *
     * @return string|null
     */
    public function getPhone3()
    {
        return $this->phone3;
    }

    /**
     * Set ext.
     *
     * @param string|null $ext
     *
     * @return Vendor
     */
    public function setExt($ext = null)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext.
     *
     * @return string|null
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Set fax.
     *
     * @param string|null $fax
     *
     * @return Vendor
     */
    public function setFax($fax = null)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax.
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mobil.
     *
     * @param string|null $mobil
     *
     * @return Vendor
     */
    public function setMobil($mobil = null)
    {
        $this->mobil = $mobil;

        return $this;
    }

    /**
     * Get mobil.
     *
     * @return string|null
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Vendor
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return Vendor
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set website.
     *
     * @param string|null $website
     *
     * @return Vendor
     */
    public function setWebsite($website = null)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website.
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set nit.
     *
     * @param string|null $nit
     *
     * @return Vendor
     */
    public function setNit($nit = null)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit.
     *
     * @return string|null
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set countryid.
     *
     * @param int|null $countryid
     *
     * @return Vendor
     */
    public function setCountryid($countryid = null)
    {
        $this->countryid = $countryid;

        return $this;
    }

    /**
     * Get countryid.
     *
     * @return int|null
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set cityid.
     *
     * @param int|null $cityid
     *
     * @return Vendor
     */
    public function setCityid($cityid = null)
    {
        $this->cityid = $cityid;

        return $this;
    }

    /**
     * Get cityid.
     *
     * @return int|null
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Set location.
     *
     * @param string|null $location
     *
     * @return Vendor
     */
    public function setLocation($location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location.
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set vendorType.
     *
     * @param int|null $vendorType
     *
     * @return Vendor
     */
    public function setVendorType($vendorType = null)
    {
        $this->vendorType = $vendorType;

        return $this;
    }

    /**
     * Get vendorType.
     *
     * @return int|null
     */
    public function getVendorType()
    {
        return $this->vendorType;
    }

    /**
     * Set adVendor1.
     *
     * @param string|null $adVendor1
     *
     * @return Vendor
     */
    public function setAdVendor1($adVendor1 = null)
    {
        $this->adVendor1 = $adVendor1;

        return $this;
    }

    /**
     * Get adVendor1.
     *
     * @return string|null
     */
    public function getAdVendor1()
    {
        return $this->adVendor1;
    }

    /**
     * Set adVendor2.
     *
     * @param string|null $adVendor2
     *
     * @return Vendor
     */
    public function setAdVendor2($adVendor2 = null)
    {
        $this->adVendor2 = $adVendor2;

        return $this;
    }

    /**
     * Get adVendor2.
     *
     * @return string|null
     */
    public function getAdVendor2()
    {
        return $this->adVendor2;
    }

    /**
     * Set adVendor3.
     *
     * @param string|null $adVendor3
     *
     * @return Vendor
     */
    public function setAdVendor3($adVendor3 = null)
    {
        $this->adVendor3 = $adVendor3;

        return $this;
    }

    /**
     * Get adVendor3.
     *
     * @return string|null
     */
    public function getAdVendor3()
    {
        return $this->adVendor3;
    }

    /**
     * Set adVendor4.
     *
     * @param string|null $adVendor4
     *
     * @return Vendor
     */
    public function setAdVendor4($adVendor4 = null)
    {
        $this->adVendor4 = $adVendor4;

        return $this;
    }

    /**
     * Get adVendor4.
     *
     * @return string|null
     */
    public function getAdVendor4()
    {
        return $this->adVendor4;
    }

    /**
     * Set adVendor5.
     *
     * @param string|null $adVendor5
     *
     * @return Vendor
     */
    public function setAdVendor5($adVendor5 = null)
    {
        $this->adVendor5 = $adVendor5;

        return $this;
    }

    /**
     * Get adVendor5.
     *
     * @return string|null
     */
    public function getAdVendor5()
    {
        return $this->adVendor5;
    }

    /**
     * Set adVendor6.
     *
     * @param string|null $adVendor6
     *
     * @return Vendor
     */
    public function setAdVendor6($adVendor6 = null)
    {
        $this->adVendor6 = $adVendor6;

        return $this;
    }

    /**
     * Get adVendor6.
     *
     * @return string|null
     */
    public function getAdVendor6()
    {
        return $this->adVendor6;
    }

    /**
     * Set adVendor7.
     *
     * @param string|null $adVendor7
     *
     * @return Vendor
     */
    public function setAdVendor7($adVendor7 = null)
    {
        $this->adVendor7 = $adVendor7;

        return $this;
    }

    /**
     * Get adVendor7.
     *
     * @return string|null
     */
    public function getAdVendor7()
    {
        return $this->adVendor7;
    }

    /**
     * Set adVendor8.
     *
     * @param string|null $adVendor8
     *
     * @return Vendor
     */
    public function setAdVendor8($adVendor8 = null)
    {
        $this->adVendor8 = $adVendor8;

        return $this;
    }

    /**
     * Get adVendor8.
     *
     * @return string|null
     */
    public function getAdVendor8()
    {
        return $this->adVendor8;
    }

    /**
     * Set adVendor9.
     *
     * @param string|null $adVendor9
     *
     * @return Vendor
     */
    public function setAdVendor9($adVendor9 = null)
    {
        $this->adVendor9 = $adVendor9;

        return $this;
    }

    /**
     * Get adVendor9.
     *
     * @return string|null
     */
    public function getAdVendor9()
    {
        return $this->adVendor9;
    }

    /**
     * Set adVendor10.
     *
     * @param string|null $adVendor10
     *
     * @return Vendor
     */
    public function setAdVendor10($adVendor10 = null)
    {
        $this->adVendor10 = $adVendor10;

        return $this;
    }

    /**
     * Get adVendor10.
     *
     * @return string|null
     */
    public function getAdVendor10()
    {
        return $this->adVendor10;
    }

    /**
     * Set vendorStatus.
     *
     * @param int|null $vendorStatus
     *
     * @return Vendor
     */
    public function setVendorStatus($vendorStatus = null)
    {
        $this->vendorStatus = $vendorStatus;

        return $this;
    }

    /**
     * Get vendorStatus.
     *
     * @return int|null
     */
    public function getVendorStatus()
    {
        return $this->vendorStatus;
    }

    /**
     * Set contact2.
     *
     * @param \ProduccionBundle\Entity\Usuarios|null $contact2
     *
     * @return Vendor
     */
    public function setContact2(\ProduccionBundle\Entity\Usuarios $contact2 = null)
    {
        $this->contact2 = $contact2;

        return $this;
    }

    /**
     * Get contact2.
     *
     * @return \ProduccionBundle\Entity\Usuarios|null
     */
    public function getContact2()
    {
        return $this->contact2;
    }
}
