<?php

namespace ProduccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="USUARIOS", uniqueConstraints={@ORM\UniqueConstraint(name="USUARIOS_UNI1", columns={"USERNAME"})}, indexes={@ORM\Index(name="IND001_USUARIOS", columns={"CODDEPTO"}), @ORM\Index(name="IND004_USUARIOS", columns={"COUNTRYID"}), @ORM\Index(name="IND003_USUARIOS", columns={"CITYID"}), @ORM\Index(name="IND005_USUARIOS", columns={"SITEID"}), @ORM\Index(name="IND006_USUARIOS", columns={"BUILDINGID"}), @ORM\Index(name="IND002_USUARIOS", columns={"FLOORID"}), @ORM\Index(name="IND014_USUARIOS", columns={"UNAME"}), @ORM\Index(name="ridx10_usuarios", columns={"CODUSUARIO", "UNAME", "USER_ACTIVE"}), @ORM\Index(name="ridx11_usuarios", columns={"EMAIL"}), @ORM\Index(name="ind007_usuarios", columns={"CODPERFIL"}), @ORM\Index(name="IND008_USUARIOS", columns={"NUMBERDEPID"}), @ORM\Index(name="IND009_USUARIOS", columns={"COMPANYID"}), @ORM\Index(name="IND010_USUARIOS", columns={"USS_ID"}), @ORM\Index(name="IND011_USUARIOS", columns={"CODJEFEINM"}), @ORM\Index(name="IND012_USUARIOS", columns={"CHA_ID"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="CODUSUARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="UNAME", type="string", length=255, nullable=false)
     */
    private $uname;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODPERFIL", type="integer", nullable=true)
     */
    private $codperfil;

    /**
     * @var string
     *
     * @ORM\Column(name="CLAVE", type="string", length=4000, nullable=false)
     */
    private $clave;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FECEXPIRACION", type="datetime", nullable=true)
     */
    private $fecexpiracion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODDEPTO", type="integer", nullable=true)
     */
    private $coddepto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADDRESS1", type="string", length=255, nullable=true)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADDRESS2", type="string", length=255, nullable=true)
     */
    private $address2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADDRESS3", type="string", length=255, nullable=true)
     */
    private $address3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHONE1", type="string", length=255, nullable=true)
     */
    private $phone1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHONE2", type="string", length=255, nullable=true)
     */
    private $phone2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHONE3", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="MOBIL", type="string", length=255, nullable=true)
     */
    private $mobil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODJEFEINM", type="integer", nullable=true)
     */
    private $codjefeinm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NIVELCONOC", type="integer", nullable=true)
     */
    private $nivelconoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USERTYPE", type="integer", nullable=true)
     */
    private $usertype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CASETYPE", type="integer", nullable=true)
     */
    private $casetype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CHA_ID", type="integer", nullable=true)
     */
    private $chaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USUACOMMENTS", type="string", length=255, nullable=true)
     */
    private $usuacomments;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ULA", type="integer", nullable=true)
     */
    private $ula;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NIVEL", type="integer", nullable=true)
     */
    private $nivel;

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
     * @var int|null
     *
     * @ORM\Column(name="SITEID", type="integer", nullable=true)
     */
    private $siteid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BUILDINGID", type="integer", nullable=true)
     */
    private $buildingid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FLOORID", type="integer", nullable=true)
     */
    private $floorid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="COMPANYID", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMBERDEPID", type="integer", nullable=true)
     */
    private $numberdepid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USER_ACTIVE", type="integer", nullable=true)
     */
    private $userActive;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="USER_BIRTHDATE", type="datetime", nullable=true)
     */
    private $userBirthdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USER_IMAGE", type="string", length=255, nullable=true)
     */
    private $userImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USER_LANGUAGE", type="string", length=5, nullable=true)
     */
    private $userLanguage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PROFILEID", type="integer", nullable=true)
     */
    private $profileid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IDENTITY_TYPE", type="string", length=2, nullable=true, options={"fixed"=true})
     */
    private $identityType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IDENTITY_NUMBER", type="string", length=14, nullable=true)
     */
    private $identityNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usr_roles", type="integer", nullable=true)
     */
    private $usrRoles;

    /**
     * @ORM\Column(name="USS_ID", type="integer")
     */
    private $uss;


    /**
     * Get codusuario.
     *
     * @return int
     */
    public function getCodusuario()
    {
        return $this->codusuario;
    }

    /**
     * Set uname.
     *
     * @param string $uname
     *
     * @return Usuarios
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Get uname.
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Set username.
     *
     * @param string $username
     *
     * @return Usuarios
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set codperfil.
     *
     * @param int|null $codperfil
     *
     * @return Usuarios
     */
    public function setCodperfil($codperfil = null)
    {
        $this->codperfil = $codperfil;

        return $this;
    }

    /**
     * Get codperfil.
     *
     * @return int|null
     */
    public function getCodperfil()
    {
        return $this->codperfil;
    }

    /**
     * Set clave.
     *
     * @param string $clave
     *
     * @return Usuarios
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave.
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set fecexpiracion.
     *
     * @param \DateTime|null $fecexpiracion
     *
     * @return Usuarios
     */
    public function setFecexpiracion($fecexpiracion = null)
    {
        $this->fecexpiracion = $fecexpiracion;

        return $this;
    }

    /**
     * Get fecexpiracion.
     *
     * @return \DateTime|null
     */
    public function getFecexpiracion()
    {
        return $this->fecexpiracion;
    }

    /**
     * Set coddepto.
     *
     * @param int|null $coddepto
     *
     * @return Usuarios
     */
    public function setCoddepto($coddepto = null)
    {
        $this->coddepto = $coddepto;

        return $this;
    }

    /**
     * Get coddepto.
     *
     * @return int|null
     */
    public function getCoddepto()
    {
        return $this->coddepto;
    }

    /**
     * Set address1.
     *
     * @param string|null $address1
     *
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * Set email.
     *
     * @param string|null $email
     *
     * @return Usuarios
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
     * Set codjefeinm.
     *
     * @param int|null $codjefeinm
     *
     * @return Usuarios
     */
    public function setCodjefeinm($codjefeinm = null)
    {
        $this->codjefeinm = $codjefeinm;

        return $this;
    }

    /**
     * Get codjefeinm.
     *
     * @return int|null
     */
    public function getCodjefeinm()
    {
        return $this->codjefeinm;
    }

    /**
     * Set nivelconoc.
     *
     * @param int|null $nivelconoc
     *
     * @return Usuarios
     */
    public function setNivelconoc($nivelconoc = null)
    {
        $this->nivelconoc = $nivelconoc;

        return $this;
    }

    /**
     * Get nivelconoc.
     *
     * @return int|null
     */
    public function getNivelconoc()
    {
        return $this->nivelconoc;
    }

    /**
     * Set usertype.
     *
     * @param int|null $usertype
     *
     * @return Usuarios
     */
    public function setUsertype($usertype = null)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertype.
     *
     * @return int|null
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set casetype.
     *
     * @param int|null $casetype
     *
     * @return Usuarios
     */
    public function setCasetype($casetype = null)
    {
        $this->casetype = $casetype;

        return $this;
    }

    /**
     * Get casetype.
     *
     * @return int|null
     */
    public function getCasetype()
    {
        return $this->casetype;
    }

    /**
     * Set chaId.
     *
     * @param int|null $chaId
     *
     * @return Usuarios
     */
    public function setChaId($chaId = null)
    {
        $this->chaId = $chaId;

        return $this;
    }

    /**
     * Get chaId.
     *
     * @return int|null
     */
    public function getChaId()
    {
        return $this->chaId;
    }

    /**
     * Set usuacomments.
     *
     * @param string|null $usuacomments
     *
     * @return Usuarios
     */
    public function setUsuacomments($usuacomments = null)
    {
        $this->usuacomments = $usuacomments;

        return $this;
    }

    /**
     * Get usuacomments.
     *
     * @return string|null
     */
    public function getUsuacomments()
    {
        return $this->usuacomments;
    }

    /**
     * Set ula.
     *
     * @param int|null $ula
     *
     * @return Usuarios
     */
    public function setUla($ula = null)
    {
        $this->ula = $ula;

        return $this;
    }

    /**
     * Get ula.
     *
     * @return int|null
     */
    public function getUla()
    {
        return $this->ula;
    }

    /**
     * Set nivel.
     *
     * @param int|null $nivel
     *
     * @return Usuarios
     */
    public function setNivel($nivel = null)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel.
     *
     * @return int|null
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set countryid.
     *
     * @param int|null $countryid
     *
     * @return Usuarios
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
     * @return Usuarios
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
     * Set siteid.
     *
     * @param int|null $siteid
     *
     * @return Usuarios
     */
    public function setSiteid($siteid = null)
    {
        $this->siteid = $siteid;

        return $this;
    }

    /**
     * Get siteid.
     *
     * @return int|null
     */
    public function getSiteid()
    {
        return $this->siteid;
    }

    /**
     * Set buildingid.
     *
     * @param int|null $buildingid
     *
     * @return Usuarios
     */
    public function setBuildingid($buildingid = null)
    {
        $this->buildingid = $buildingid;

        return $this;
    }

    /**
     * Get buildingid.
     *
     * @return int|null
     */
    public function getBuildingid()
    {
        return $this->buildingid;
    }

    /**
     * Set floorid.
     *
     * @param int|null $floorid
     *
     * @return Usuarios
     */
    public function setFloorid($floorid = null)
    {
        $this->floorid = $floorid;

        return $this;
    }

    /**
     * Get floorid.
     *
     * @return int|null
     */
    public function getFloorid()
    {
        return $this->floorid;
    }

    /**
     * Set companyid.
     *
     * @param int|null $companyid
     *
     * @return Usuarios
     */
    public function setCompanyid($companyid = null)
    {
        $this->companyid = $companyid;

        return $this;
    }

    /**
     * Get companyid.
     *
     * @return int|null
     */
    public function getCompanyid()
    {
        return $this->companyid;
    }

    /**
     * Set numberdepid.
     *
     * @param int|null $numberdepid
     *
     * @return Usuarios
     */
    public function setNumberdepid($numberdepid = null)
    {
        $this->numberdepid = $numberdepid;

        return $this;
    }

    /**
     * Get numberdepid.
     *
     * @return int|null
     */
    public function getNumberdepid()
    {
        return $this->numberdepid;
    }

    /**
     * Set userActive.
     *
     * @param int|null $userActive
     *
     * @return Usuarios
     */
    public function setUserActive($userActive = null)
    {
        $this->userActive = $userActive;

        return $this;
    }

    /**
     * Get userActive.
     *
     * @return int|null
     */
    public function getUserActive()
    {
        return $this->userActive;
    }

    /**
     * Set userBirthdate.
     *
     * @param \DateTime|null $userBirthdate
     *
     * @return Usuarios
     */
    public function setUserBirthdate($userBirthdate = null)
    {
        $this->userBirthdate = $userBirthdate;

        return $this;
    }

    /**
     * Get userBirthdate.
     *
     * @return \DateTime|null
     */
    public function getUserBirthdate()
    {
        return $this->userBirthdate;
    }

    /**
     * Set userImage.
     *
     * @param string|null $userImage
     *
     * @return Usuarios
     */
    public function setUserImage($userImage = null)
    {
        $this->userImage = $userImage;

        return $this;
    }

    /**
     * Get userImage.
     *
     * @return string|null
     */
    public function getUserImage()
    {
        return $this->userImage;
    }

    /**
     * Set userLanguage.
     *
     * @param string|null $userLanguage
     *
     * @return Usuarios
     */
    public function setUserLanguage($userLanguage = null)
    {
        $this->userLanguage = $userLanguage;

        return $this;
    }

    /**
     * Get userLanguage.
     *
     * @return string|null
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * Set profileid.
     *
     * @param int|null $profileid
     *
     * @return Usuarios
     */
    public function setProfileid($profileid = null)
    {
        $this->profileid = $profileid;

        return $this;
    }

    /**
     * Get profileid.
     *
     * @return int|null
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set identityType.
     *
     * @param string|null $identityType
     *
     * @return Usuarios
     */
    public function setIdentityType($identityType = null)
    {
        $this->identityType = $identityType;

        return $this;
    }

    /**
     * Get identityType.
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->identityType;
    }

    /**
     * Set identityNumber.
     *
     * @param string|null $identityNumber
     *
     * @return Usuarios
     */
    public function setIdentityNumber($identityNumber = null)
    {
        $this->identityNumber = $identityNumber;

        return $this;
    }

    /**
     * Get identityNumber.
     *
     * @return string|null
     */
    public function getIdentityNumber()
    {
        return $this->identityNumber;
    }

    /**
     * Set usrRoles.
     *
     * @param int|null $usrRoles
     *
     * @return Usuarios
     */
    public function setUsrRoles($usrRoles = null)
    {
        $this->usrRoles = $usrRoles;

        return $this;
    }

    /**
     * Get usrRoles.
     *
     * @return int|null
     */
    public function getUsrRoles()
    {
        return $this->usrRoles;
    }

    /**
     * Set uss.
     *
     * @param int $uss
     *
     * @return Usuarios
     */
    public function setUss($uss)
    {
        $this->uss = $uss;

        return $this;
    }

    /**
     * Get uss.
     *
     * @return int
     */
    public function getUss()
    {
        return $this->uss;
    }
}
