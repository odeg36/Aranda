<?php

namespace ProduccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsdkSla
 *
 * @ORM\Table(name="ASDK_SLA", indexes={@ORM\Index(name="ridx10_asdk_sla", columns={"FL_INT_SERVICE_ID", "FL_INT_SLASTATE", "contract_type", "DATE_START", "DATE_FINISH"}), @ORM\Index(name="IDX_89413100E4AB1941", columns={"contract_type"}), @ORM\Index(name="IDX_89413100216B66A8", columns={"FL_INT_SERVICE_ID"}), @ORM\Index(name="IDX_89413100FA7D1B52", columns={"sla_provider_resp"})})
 * @ORM\Entity
 */
class AsdkSla
{
    /**
     * @var int
     *
     * @ORM\Column(name="SLA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $slaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NAME", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=4000, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="INFORMATION", type="string", length=4000, nullable=true)
     */
    private $information;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SCOPE", type="string", length=4000, nullable=true)
     */
    private $scope;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_START", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_FINISH", type="datetime", nullable=true)
     */
    private $dateFinish;

    /**
     * @var int
     *
     * @ORM\Column(name="FL_INT_SLASTATE", type="integer", nullable=false, options={"default"="1"})
     */
    private $flIntSlastate = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_TIMES_AT", type="integer", nullable=true)
     */
    private $flIntTimesAt = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_TIMES_SO", type="integer", nullable=true)
     */
    private $flIntTimesSo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_TIMES_AT1", type="integer", nullable=true)
     */
    private $flIntTimesAt1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_TIMES_SO1", type="integer", nullable=true)
     */
    private $flIntTimesSo1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_TIMES_AT2", type="integer", nullable=true)
     */
    private $flIntTimesAt2 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_TIMES_SO2", type="integer", nullable=true)
     */
    private $flIntTimesSo2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="penality", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $penality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attached_document", type="string", length=255, nullable=true)
     */
    private $attachedDocument;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sla_date_review", type="datetime", nullable=true)
     */
    private $slaDateReview;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_parties", type="string", length=4000, nullable=true)
     */
    private $slaParties;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_customer_resp", type="string", length=4000, nullable=true)
     */
    private $slaCustomerResp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_availability", type="string", length=4000, nullable=true)
     */
    private $slaAvailability;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_reliability", type="string", length=4000, nullable=true)
     */
    private $slaReliability;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_throughput", type="string", length=4000, nullable=true)
     */
    private $slaThroughput;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_security", type="string", length=4000, nullable=true)
     */
    private $slaSecurity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_charging", type="string", length=4000, nullable=true)
     */
    private $slaCharging;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_reporting", type="string", length=4000, nullable=true)
     */
    private $slaReporting;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_incentives", type="string", length=4000, nullable=true)
     */
    private $slaIncentives;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_service_hours", type="string", length=4000, nullable=true)
     */
    private $slaServiceHours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_support_hours", type="string", length=4000, nullable=true)
     */
    private $slaSupportHours;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_FINISH_HAS_ALARM", type="integer", nullable=true)
     */
    private $flIntFinishHasAlarm = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_FINISH_LIMITDAYS", type="integer", nullable=true)
     */
    private $flIntFinishLimitdays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_REVIEW_HAS_ALARM", type="integer", nullable=true)
     */
    private $flIntReviewHasAlarm = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FL_INT_REVIEW_LIMITDAYS", type="integer", nullable=true)
     */
    private $flIntReviewLimitdays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sla_provider_functions", type="string", length=4000, nullable=true)
     */
    private $slaProviderFunctions;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fl_int_times_at3", type="integer", nullable=true)
     */
    private $flIntTimesAt3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fl_int_times_so3", type="integer", nullable=true)
     */
    private $flIntTimesSo3;

    /**
     * @ORM\Column(name="contract_type", type="integer")
     */
    private $contractType;

    /**
     * @ORM\Column(name="FL_INT_SERVICE_ID", type="integer")
     */
    private $flIntService;

    /**
     * @var \Vendor
     *
     * @ORM\ManyToOne(targetEntity="Vendor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sla_provider_resp", referencedColumnName="VENDORID")
     * })
     */
    private $slaProviderResp;

    /**
     * Get slaId.
     *
     * @return int
     */
    public function getSlaId()
    {
        return $this->slaId;
    }

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return AsdkSla
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set descripcion.
     *
     * @param string|null $descripcion
     *
     * @return AsdkSla
     */
    public function setDescripcion($descripcion = null)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string|null
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set information.
     *
     * @param string|null $information
     *
     * @return AsdkSla
     */
    public function setInformation($information = null)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information.
     *
     * @return string|null
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set scope.
     *
     * @param string|null $scope
     *
     * @return AsdkSla
     */
    public function setScope($scope = null)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope.
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set dateStart.
     *
     * @param \DateTime|null $dateStart
     *
     * @return AsdkSla
     */
    public function setDateStart($dateStart = null)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart.
     *
     * @return \DateTime|null
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateFinish.
     *
     * @param \DateTime|null $dateFinish
     *
     * @return AsdkSla
     */
    public function setDateFinish($dateFinish = null)
    {
        $this->dateFinish = $dateFinish;

        return $this;
    }

    /**
     * Get dateFinish.
     *
     * @return \DateTime|null
     */
    public function getDateFinish()
    {
        return $this->dateFinish;
    }

    /**
     * Set flIntSlastate.
     *
     * @param int $flIntSlastate
     *
     * @return AsdkSla
     */
    public function setFlIntSlastate($flIntSlastate)
    {
        $this->flIntSlastate = $flIntSlastate;

        return $this;
    }

    /**
     * Get flIntSlastate.
     *
     * @return int
     */
    public function getFlIntSlastate()
    {
        return $this->flIntSlastate;
    }

    /**
     * Set flIntTimesAt.
     *
     * @param int|null $flIntTimesAt
     *
     * @return AsdkSla
     */
    public function setFlIntTimesAt($flIntTimesAt = null)
    {
        $this->flIntTimesAt = $flIntTimesAt;

        return $this;
    }

    /**
     * Get flIntTimesAt.
     *
     * @return int|null
     */
    public function getFlIntTimesAt()
    {
        return $this->flIntTimesAt;
    }

    /**
     * Set flIntTimesSo.
     *
     * @param int|null $flIntTimesSo
     *
     * @return AsdkSla
     */
    public function setFlIntTimesSo($flIntTimesSo = null)
    {
        $this->flIntTimesSo = $flIntTimesSo;

        return $this;
    }

    /**
     * Get flIntTimesSo.
     *
     * @return int|null
     */
    public function getFlIntTimesSo()
    {
        return $this->flIntTimesSo;
    }

    /**
     * Set flIntTimesAt1.
     *
     * @param int|null $flIntTimesAt1
     *
     * @return AsdkSla
     */
    public function setFlIntTimesAt1($flIntTimesAt1 = null)
    {
        $this->flIntTimesAt1 = $flIntTimesAt1;

        return $this;
    }

    /**
     * Get flIntTimesAt1.
     *
     * @return int|null
     */
    public function getFlIntTimesAt1()
    {
        return $this->flIntTimesAt1;
    }

    /**
     * Set flIntTimesSo1.
     *
     * @param int|null $flIntTimesSo1
     *
     * @return AsdkSla
     */
    public function setFlIntTimesSo1($flIntTimesSo1 = null)
    {
        $this->flIntTimesSo1 = $flIntTimesSo1;

        return $this;
    }

    /**
     * Get flIntTimesSo1.
     *
     * @return int|null
     */
    public function getFlIntTimesSo1()
    {
        return $this->flIntTimesSo1;
    }

    /**
     * Set flIntTimesAt2.
     *
     * @param int|null $flIntTimesAt2
     *
     * @return AsdkSla
     */
    public function setFlIntTimesAt2($flIntTimesAt2 = null)
    {
        $this->flIntTimesAt2 = $flIntTimesAt2;

        return $this;
    }

    /**
     * Get flIntTimesAt2.
     *
     * @return int|null
     */
    public function getFlIntTimesAt2()
    {
        return $this->flIntTimesAt2;
    }

    /**
     * Set flIntTimesSo2.
     *
     * @param int|null $flIntTimesSo2
     *
     * @return AsdkSla
     */
    public function setFlIntTimesSo2($flIntTimesSo2 = null)
    {
        $this->flIntTimesSo2 = $flIntTimesSo2;

        return $this;
    }

    /**
     * Get flIntTimesSo2.
     *
     * @return int|null
     */
    public function getFlIntTimesSo2()
    {
        return $this->flIntTimesSo2;
    }

    /**
     * Set penality.
     *
     * @param string|null $penality
     *
     * @return AsdkSla
     */
    public function setPenality($penality = null)
    {
        $this->penality = $penality;

        return $this;
    }

    /**
     * Get penality.
     *
     * @return string|null
     */
    public function getPenality()
    {
        return $this->penality;
    }

    /**
     * Set attachedDocument.
     *
     * @param string|null $attachedDocument
     *
     * @return AsdkSla
     */
    public function setAttachedDocument($attachedDocument = null)
    {
        $this->attachedDocument = $attachedDocument;

        return $this;
    }

    /**
     * Get attachedDocument.
     *
     * @return string|null
     */
    public function getAttachedDocument()
    {
        return $this->attachedDocument;
    }

    /**
     * Set slaDateReview.
     *
     * @param \DateTime|null $slaDateReview
     *
     * @return AsdkSla
     */
    public function setSlaDateReview($slaDateReview = null)
    {
        $this->slaDateReview = $slaDateReview;

        return $this;
    }

    /**
     * Get slaDateReview.
     *
     * @return \DateTime|null
     */
    public function getSlaDateReview()
    {
        return $this->slaDateReview;
    }

    /**
     * Set slaParties.
     *
     * @param string|null $slaParties
     *
     * @return AsdkSla
     */
    public function setSlaParties($slaParties = null)
    {
        $this->slaParties = $slaParties;

        return $this;
    }

    /**
     * Get slaParties.
     *
     * @return string|null
     */
    public function getSlaParties()
    {
        return $this->slaParties;
    }

    /**
     * Set slaCustomerResp.
     *
     * @param string|null $slaCustomerResp
     *
     * @return AsdkSla
     */
    public function setSlaCustomerResp($slaCustomerResp = null)
    {
        $this->slaCustomerResp = $slaCustomerResp;

        return $this;
    }

    /**
     * Get slaCustomerResp.
     *
     * @return string|null
     */
    public function getSlaCustomerResp()
    {
        return $this->slaCustomerResp;
    }

    /**
     * Set slaAvailability.
     *
     * @param string|null $slaAvailability
     *
     * @return AsdkSla
     */
    public function setSlaAvailability($slaAvailability = null)
    {
        $this->slaAvailability = $slaAvailability;

        return $this;
    }

    /**
     * Get slaAvailability.
     *
     * @return string|null
     */
    public function getSlaAvailability()
    {
        return $this->slaAvailability;
    }

    /**
     * Set slaReliability.
     *
     * @param string|null $slaReliability
     *
     * @return AsdkSla
     */
    public function setSlaReliability($slaReliability = null)
    {
        $this->slaReliability = $slaReliability;

        return $this;
    }

    /**
     * Get slaReliability.
     *
     * @return string|null
     */
    public function getSlaReliability()
    {
        return $this->slaReliability;
    }

    /**
     * Set slaThroughput.
     *
     * @param string|null $slaThroughput
     *
     * @return AsdkSla
     */
    public function setSlaThroughput($slaThroughput = null)
    {
        $this->slaThroughput = $slaThroughput;

        return $this;
    }

    /**
     * Get slaThroughput.
     *
     * @return string|null
     */
    public function getSlaThroughput()
    {
        return $this->slaThroughput;
    }

    /**
     * Set slaSecurity.
     *
     * @param string|null $slaSecurity
     *
     * @return AsdkSla
     */
    public function setSlaSecurity($slaSecurity = null)
    {
        $this->slaSecurity = $slaSecurity;

        return $this;
    }

    /**
     * Get slaSecurity.
     *
     * @return string|null
     */
    public function getSlaSecurity()
    {
        return $this->slaSecurity;
    }

    /**
     * Set slaCharging.
     *
     * @param string|null $slaCharging
     *
     * @return AsdkSla
     */
    public function setSlaCharging($slaCharging = null)
    {
        $this->slaCharging = $slaCharging;

        return $this;
    }

    /**
     * Get slaCharging.
     *
     * @return string|null
     */
    public function getSlaCharging()
    {
        return $this->slaCharging;
    }

    /**
     * Set slaReporting.
     *
     * @param string|null $slaReporting
     *
     * @return AsdkSla
     */
    public function setSlaReporting($slaReporting = null)
    {
        $this->slaReporting = $slaReporting;

        return $this;
    }

    /**
     * Get slaReporting.
     *
     * @return string|null
     */
    public function getSlaReporting()
    {
        return $this->slaReporting;
    }

    /**
     * Set slaIncentives.
     *
     * @param string|null $slaIncentives
     *
     * @return AsdkSla
     */
    public function setSlaIncentives($slaIncentives = null)
    {
        $this->slaIncentives = $slaIncentives;

        return $this;
    }

    /**
     * Get slaIncentives.
     *
     * @return string|null
     */
    public function getSlaIncentives()
    {
        return $this->slaIncentives;
    }

    /**
     * Set slaServiceHours.
     *
     * @param string|null $slaServiceHours
     *
     * @return AsdkSla
     */
    public function setSlaServiceHours($slaServiceHours = null)
    {
        $this->slaServiceHours = $slaServiceHours;

        return $this;
    }

    /**
     * Get slaServiceHours.
     *
     * @return string|null
     */
    public function getSlaServiceHours()
    {
        return $this->slaServiceHours;
    }

    /**
     * Set slaSupportHours.
     *
     * @param string|null $slaSupportHours
     *
     * @return AsdkSla
     */
    public function setSlaSupportHours($slaSupportHours = null)
    {
        $this->slaSupportHours = $slaSupportHours;

        return $this;
    }

    /**
     * Get slaSupportHours.
     *
     * @return string|null
     */
    public function getSlaSupportHours()
    {
        return $this->slaSupportHours;
    }

    /**
     * Set flIntFinishHasAlarm.
     *
     * @param int|null $flIntFinishHasAlarm
     *
     * @return AsdkSla
     */
    public function setFlIntFinishHasAlarm($flIntFinishHasAlarm = null)
    {
        $this->flIntFinishHasAlarm = $flIntFinishHasAlarm;

        return $this;
    }

    /**
     * Get flIntFinishHasAlarm.
     *
     * @return int|null
     */
    public function getFlIntFinishHasAlarm()
    {
        return $this->flIntFinishHasAlarm;
    }

    /**
     * Set flIntFinishLimitdays.
     *
     * @param int|null $flIntFinishLimitdays
     *
     * @return AsdkSla
     */
    public function setFlIntFinishLimitdays($flIntFinishLimitdays = null)
    {
        $this->flIntFinishLimitdays = $flIntFinishLimitdays;

        return $this;
    }

    /**
     * Get flIntFinishLimitdays.
     *
     * @return int|null
     */
    public function getFlIntFinishLimitdays()
    {
        return $this->flIntFinishLimitdays;
    }

    /**
     * Set flIntReviewHasAlarm.
     *
     * @param int|null $flIntReviewHasAlarm
     *
     * @return AsdkSla
     */
    public function setFlIntReviewHasAlarm($flIntReviewHasAlarm = null)
    {
        $this->flIntReviewHasAlarm = $flIntReviewHasAlarm;

        return $this;
    }

    /**
     * Get flIntReviewHasAlarm.
     *
     * @return int|null
     */
    public function getFlIntReviewHasAlarm()
    {
        return $this->flIntReviewHasAlarm;
    }

    /**
     * Set flIntReviewLimitdays.
     *
     * @param int|null $flIntReviewLimitdays
     *
     * @return AsdkSla
     */
    public function setFlIntReviewLimitdays($flIntReviewLimitdays = null)
    {
        $this->flIntReviewLimitdays = $flIntReviewLimitdays;

        return $this;
    }

    /**
     * Get flIntReviewLimitdays.
     *
     * @return int|null
     */
    public function getFlIntReviewLimitdays()
    {
        return $this->flIntReviewLimitdays;
    }

    /**
     * Set slaProviderFunctions.
     *
     * @param string|null $slaProviderFunctions
     *
     * @return AsdkSla
     */
    public function setSlaProviderFunctions($slaProviderFunctions = null)
    {
        $this->slaProviderFunctions = $slaProviderFunctions;

        return $this;
    }

    /**
     * Get slaProviderFunctions.
     *
     * @return string|null
     */
    public function getSlaProviderFunctions()
    {
        return $this->slaProviderFunctions;
    }

    /**
     * Set flIntTimesAt3.
     *
     * @param int|null $flIntTimesAt3
     *
     * @return AsdkSla
     */
    public function setFlIntTimesAt3($flIntTimesAt3 = null)
    {
        $this->flIntTimesAt3 = $flIntTimesAt3;

        return $this;
    }

    /**
     * Get flIntTimesAt3.
     *
     * @return int|null
     */
    public function getFlIntTimesAt3()
    {
        return $this->flIntTimesAt3;
    }

    /**
     * Set flIntTimesSo3.
     *
     * @param int|null $flIntTimesSo3
     *
     * @return AsdkSla
     */
    public function setFlIntTimesSo3($flIntTimesSo3 = null)
    {
        $this->flIntTimesSo3 = $flIntTimesSo3;

        return $this;
    }

    /**
     * Get flIntTimesSo3.
     *
     * @return int|null
     */
    public function getFlIntTimesSo3()
    {
        return $this->flIntTimesSo3;
    }

    /**
     * Set contractType.
     *
     * @param int $contractType
     *
     * @return AsdkSla
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType.
     *
     * @return int
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set flIntService.
     *
     * @param int $flIntService
     *
     * @return AsdkSla
     */
    public function setFlIntService($flIntService)
    {
        $this->flIntService = $flIntService;

        return $this;
    }

    /**
     * Get flIntService.
     *
     * @return int
     */
    public function getFlIntService()
    {
        return $this->flIntService;
    }

    /**
     * Set slaProviderResp.
     *
     * @param \ProduccionBundle\Entity\Vendor|null $slaProviderResp
     *
     * @return AsdkSla
     */
    public function setSlaProviderResp(\ProduccionBundle\Entity\Vendor $slaProviderResp = null)
    {
        $this->slaProviderResp = $slaProviderResp;

        return $this;
    }

    /**
     * Get slaProviderResp.
     *
     * @return \ProduccionBundle\Entity\Vendor|null
     */
    public function getSlaProviderResp()
    {
        return $this->slaProviderResp;
    }
}
