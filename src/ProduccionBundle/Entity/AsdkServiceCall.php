<?php

namespace ProduccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsdkServiceCall
 *
 * @ORM\Table(name="ASDK_SERVICE_CALL", indexes={@ORM\Index(name="IND001_ASDK_SERVICE_CALL", columns={"serv_category_id"}), @ORM\Index(name="IND002_ASDK_SERVICE_CALL", columns={"serv_codreceptor"}), @ORM\Index(name="IND003_ASDK_SERVICE_CALL", columns={"serv_impact_id"}), @ORM\Index(name="IND004_ASDK_SERVICE_CALL", columns={"serv_urgency_id"}), @ORM\Index(name="IND005_ASDK_SERVICE_CALL", columns={"serv_priority_id"}), @ORM\Index(name="IND016_ASDK_SERVICE_CALL", columns={"serv_status_id"}), @ORM\Index(name="IND006_ASDK_SERVICE_CALL", columns={"serv_responsible_id"}), @ORM\Index(name="IND007_ASDK_SERVICE_CALL", columns={"serv_responsible_group_id"}), @ORM\Index(name="IND008_ASDK_SERVICE_CALL", columns={"serv_author"}), @ORM\Index(name="IND009_ASDK_SERVICE_CALL", columns={"serv_user_id_modifier"}), @ORM\Index(name="IND010_ASDK_SERVICE_CALL", columns={"serv_fl_int_project_id"}), @ORM\Index(name="IND011_ASDK_SERVICE_CALL", columns={"serv_reason_id"}), @ORM\Index(name="IND012_ASDK_SERVICE_CALL", columns={"serv_associated_ci"}), @ORM\Index(name="IND013_ASDK_SERVICE_CALL", columns={"serv_service_id"}), @ORM\Index(name="IND014_ASDK_SERVICE_CALL", columns={"serv_customer_id"}), @ORM\Index(name="IND015_ASDK_SERVICE_CALL", columns={"serv_vendor_id"}), @ORM\Index(name="IND017_ASDK_SERVICE_CALL", columns={"serv_current_progress"}), @ORM\Index(name="ridx20_asdk_service_call", columns={"serv_fl_int_project_id", "serv_current_progress", "serv_solution_real_date", "serv_opened_date"}), @ORM\Index(name="ridx21_asdk_service_call", columns={"serv_attention_real_date", "serv_responsible_group_id", "serv_fl_int_project_id", "serv_opened_date", "serv_current_time"}), @ORM\Index(name="ridx22_asdk_service_call", columns={"serv_attention_real_date", "serv_service_id", "serv_solution_real_date", "serv_opened_date"}), @ORM\Index(name="ridx23_asdk_service_call", columns={"serv_fl_int_project_id", "serv_solution_real_date", "serv_opened_date", "serv_current_time"}), @ORM\Index(name="ridx24_asdk_service_call", columns={"serv_id", "serv_status_id", "serv_fl_int_project_id", "serv_opened_date"}), @ORM\Index(name="ridx25_asdk_service_call", columns={"serv_registry_type_id", "serv_opened_date", "serv_solution_real_date"}), @ORM\Index(name="ridx26_asdk_service_call", columns={"serv_registry_type_id", "serv_opened_date"}), @ORM\Index(name="ridx27_asdk_service_call", columns={"serv_id", "serv_opened_date", "serv_solution_real_date"}), @ORM\Index(name="ridx28_asdk_service_call", columns={"serv_id", "serv_current_time", "serv_opened_date", "serv_solution_real_date"}), @ORM\Index(name="ridx29_asdk_service_call", columns={"serv_status_id", "serv_current_time", "serv_attention_time", "serv_solution_time", "serv_fl_int_project_id", "serv_opened_date"}), @ORM\Index(name="ridx30_asdk_service_call", columns={"serv_responsible_group_id", "serv_fl_int_project_id", "serv_solution_real_date", "serv_opened_date", "serv_current_progress"}), @ORM\Index(name="ridx31_asdk_service_call", columns={"serv_colsed_date", "serv_fl_int_project_id", "serv_expired_date"}), @ORM\Index(name="ridx32_asdk_service_call", columns={"serv_opened_date", "serv_fl_int_project_id"}), @ORM\Index(name="ridx33_asdk_service_call", columns={"serv_expired_date", "serv_fl_int_project_id"}), @ORM\Index(name="ridx34_asdk_service_call", columns={"serv_id_by_project"}), @ORM\Index(name="ridx35_asdk_service_call", columns={"serv_expired_date", "serv_responsible_id", "serv_fl_int_project_id"}), @ORM\Index(name="ridx36_asdk_service_call", columns={"serv_opened_date", "serv_responsible_id", "serv_fl_int_project_id"}), @ORM\Index(name="ridx37_asdk_service_call", columns={"serv_colsed_date", "serv_responsible_id", "serv_fl_int_project_id", "serv_expired_date"}), @ORM\Index(name="IND023_ASDK_SERVICE_CALL", columns={"serv_final_status"}), @ORM\Index(name="IDX_BF892873719F5094", columns={"serv_service_sla_id"})})
 * @ORM\Entity
 */
class AsdkServiceCall
{
    /**
     * @var int
     *
     * @ORM\Column(name="serv_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $servId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_id_by_project", type="integer", nullable=true)
     */
    private $servIdByProject;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="serv_opened_date", type="datetime", nullable=true)
     */
    private $servOpenedDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="serv_colsed_date", type="datetime", nullable=true)
     */
    private $servColsedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_description", type="text", length=16, nullable=true)
     */
    private $servDescription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="serv_expired_date", type="datetime", nullable=true)
     */
    private $servExpiredDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="serv_attention_esti_date", type="datetime", nullable=true)
     */
    private $servAttentionEstiDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="serv_attention_real_date", type="datetime", nullable=true)
     */
    private $servAttentionRealDate;

    /**
     * @var int
     *
     * @ORM\Column(name="serv_registry_type_id", type="integer", nullable=false)
     */
    private $servRegistryTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_commentary", type="text", length=16, nullable=true)
     */
    private $servCommentary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_estimated_cost", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $servEstimatedCost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_real_cost", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $servRealCost;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_current_time", type="integer", nullable=true)
     */
    private $servCurrentTime = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_attention_time", type="integer", nullable=true)
     */
    private $servAttentionTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_solution_time", type="integer", nullable=true)
     */
    private $servSolutionTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="serv_sdb_last_shot", type="datetime", nullable=true)
     */
    private $servSdbLastShot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_current_progress", type="integer", nullable=true)
     */
    private $servCurrentProgress = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_involved_user", type="integer", nullable=true)
     */
    private $servInvolvedUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_involved_ci", type="integer", nullable=true)
     */
    private $servInvolvedCi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_involved_company", type="integer", nullable=true)
     */
    private $servInvolvedCompany;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="serv_solution_real_date", type="datetime", nullable=true)
     */
    private $servSolutionRealDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_attention_real_time", type="integer", nullable=true)
     */
    private $servAttentionRealTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_solution_real_time", type="integer", nullable=true)
     */
    private $servSolutionRealTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_procedure_id", type="integer", nullable=true)
     */
    private $servProcedureId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_category", type="integer", nullable=true)
     */
    private $servFlagCategory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_priority", type="integer", nullable=true)
     */
    private $servFlagPriority;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_impact", type="integer", nullable=true)
     */
    private $servFlagImpact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_urgency", type="integer", nullable=true)
     */
    private $servFlagUrgency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_status", type="integer", nullable=true)
     */
    private $servFlagStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_service", type="integer", nullable=true)
     */
    private $servFlagService;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_sla", type="integer", nullable=true)
     */
    private $servFlagSla;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_resp_user", type="integer", nullable=true)
     */
    private $servFlagRespUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_resp_group", type="integer", nullable=true)
     */
    private $servFlagRespGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_reason", type="integer", nullable=true)
     */
    private $servFlagReason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_1", type="string", length=4000, nullable=true)
     */
    private $addStr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_2", type="string", length=4000, nullable=true)
     */
    private $addStr2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_3", type="string", length=4000, nullable=true)
     */
    private $addStr3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_4", type="string", length=4000, nullable=true)
     */
    private $addStr4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_5", type="string", length=4000, nullable=true)
     */
    private $addStr5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_6", type="string", length=4000, nullable=true)
     */
    private $addStr6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_7", type="string", length=4000, nullable=true)
     */
    private $addStr7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_8", type="string", length=4000, nullable=true)
     */
    private $addStr8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_9", type="string", length=4000, nullable=true)
     */
    private $addStr9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_10", type="string", length=4000, nullable=true)
     */
    private $addStr10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_cost", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $servCost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_price", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $servPrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_effort", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $servEffort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_note", type="integer", nullable=true)
     */
    private $servFlagNote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_note_count", type="integer", nullable=true)
     */
    private $servNoteCount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_final_status", type="integer", nullable=true)
     */
    private $servFinalStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_interface_id", type="string", length=100, nullable=true)
     */
    private $servInterfaceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_11", type="string", length=4000, nullable=true)
     */
    private $addStr11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_12", type="string", length=4000, nullable=true)
     */
    private $addStr12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_13", type="string", length=4000, nullable=true)
     */
    private $addStr13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_14", type="string", length=4000, nullable=true)
     */
    private $addStr14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_15", type="string", length=4000, nullable=true)
     */
    private $addStr15;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_16", type="string", length=4000, nullable=true)
     */
    private $addStr16;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_17", type="string", length=4000, nullable=true)
     */
    private $addStr17;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_18", type="string", length=4000, nullable=true)
     */
    private $addStr18;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_19", type="string", length=4000, nullable=true)
     */
    private $addStr19;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_20", type="string", length=4000, nullable=true)
     */
    private $addStr20;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_21", type="string", length=4000, nullable=true)
     */
    private $addStr21;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_22", type="string", length=4000, nullable=true)
     */
    private $addStr22;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_23", type="string", length=4000, nullable=true)
     */
    private $addStr23;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_24", type="string", length=4000, nullable=true)
     */
    private $addStr24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_25", type="string", length=4000, nullable=true)
     */
    private $addStr25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_26", type="string", length=4000, nullable=true)
     */
    private $addStr26;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_27", type="string", length=4000, nullable=true)
     */
    private $addStr27;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_28", type="string", length=4000, nullable=true)
     */
    private $addStr28;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_29", type="string", length=4000, nullable=true)
     */
    private $addStr29;

    /**
     * @var string|null
     *
     * @ORM\Column(name="add_str_30", type="string", length=4000, nullable=true)
     */
    private $addStr30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_flag_note_priv", type="integer", nullable=true)
     */
    private $servFlagNotePriv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_note_count_priv", type="integer", nullable=true)
     */
    private $servNoteCountPriv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_status_time", type="integer", nullable=true)
     */
    private $servStatusTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serv_description_nohtml", type="string", length=4000, nullable=true)
     */
    private $servDescriptionNohtml;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_succeeded", type="integer", nullable=true)
     */
    private $surveySucceeded;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serv_provider_uc_id", type="integer", nullable=true)
     */
    private $servProviderUcId;

    /**
     * @ORM\Column(name="serv_reason_id", type="integer")
     */
    private $servReason;

    /**
     * @ORM\Column(name="serv_associated_ci", type="integer")
     */
    private $servAssociatedCi;

    /**
     * @var \AfwStatus
     *
     * @ORM\ManyToOne(targetEntity="AfwStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serv_status_id", referencedColumnName="stat_id")
     * })
     */
    private $servStatus;

    /**
     * @ORM\Column(name="serv_category_id", type="integer")
     */
    private $servCategory;

    /**
     * @ORM\Column(name="serv_impact_id", type="integer")
     */
    private $servImpact;

    /**
     * @ORM\Column(name="serv_priority_id", type="integer")
     */
    private $servPriority;

    /**
     * @ORM\Column(name="serv_fl_int_project_id", type="integer")
     */
    private $servFlIntProject;

    /**
     * @ORM\Column(name="serv_service_id", type="integer")
     */
    private $servService;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serv_codreceptor", referencedColumnName="CODUSUARIO")
     * })
     */
    private $servCodreceptor;

    /**
     * @ORM\Column(name="serv_urgency_id", type="integer")
     */
    private $servUrgency;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serv_responsible_id", referencedColumnName="CODUSUARIO")
     * })
     */
    private $servResponsible;

    /**
     * @ORM\Column(name="serv_responsible_group_id", type="integer")
     */
    private $servResponsibleGroup;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serv_author", referencedColumnName="CODUSUARIO")
     * })
     */
    private $servAuthor;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serv_user_id_modifier", referencedColumnName="CODUSUARIO")
     * })
     */
    private $servUserModifier;

    /**
     * @var \AsdkSla
     *
     * @ORM\ManyToOne(targetEntity="AsdkSla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serv_service_sla_id", referencedColumnName="SLA_ID")
     * })
     */
    private $servServiceSla;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serv_customer_id", referencedColumnName="CODUSUARIO")
     * })
     */
    private $servCustomer;

    /**
     * @var \Vendor
     *
     * @ORM\ManyToOne(targetEntity="Vendor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serv_vendor_id", referencedColumnName="VENDORID")
     * })
     */
    private $servVendor;


    /**
     * Get servId.
     *
     * @return int
     */
    public function getServId()
    {
        return $this->servId;
    }

    /**
     * Set servIdByProject.
     *
     * @param int|null $servIdByProject
     *
     * @return AsdkServiceCall
     */
    public function setServIdByProject($servIdByProject = null)
    {
        $this->servIdByProject = $servIdByProject;

        return $this;
    }

    /**
     * Get servIdByProject.
     *
     * @return int|null
     */
    public function getServIdByProject()
    {
        return $this->servIdByProject;
    }

    /**
     * Set servOpenedDate.
     *
     * @param \DateTime|null $servOpenedDate
     *
     * @return AsdkServiceCall
     */
    public function setServOpenedDate($servOpenedDate = null)
    {
        $this->servOpenedDate = $servOpenedDate;

        return $this;
    }

    /**
     * Get servOpenedDate.
     *
     * @return \DateTime|null
     */
    public function getServOpenedDate()
    {
        return $this->servOpenedDate;
    }

    /**
     * Set servColsedDate.
     *
     * @param \DateTime|null $servColsedDate
     *
     * @return AsdkServiceCall
     */
    public function setServColsedDate($servColsedDate = null)
    {
        $this->servColsedDate = $servColsedDate;

        return $this;
    }

    /**
     * Get servColsedDate.
     *
     * @return \DateTime|null
     */
    public function getServColsedDate()
    {
        return $this->servColsedDate;
    }

    /**
     * Set servDescription.
     *
     * @param string|null $servDescription
     *
     * @return AsdkServiceCall
     */
    public function setServDescription($servDescription = null)
    {
        $this->servDescription = $servDescription;

        return $this;
    }

    /**
     * Get servDescription.
     *
     * @return string|null
     */
    public function getServDescription()
    {
        return $this->servDescription;
    }

    /**
     * Set servExpiredDate.
     *
     * @param \DateTime|null $servExpiredDate
     *
     * @return AsdkServiceCall
     */
    public function setServExpiredDate($servExpiredDate = null)
    {
        $this->servExpiredDate = $servExpiredDate;

        return $this;
    }

    /**
     * Get servExpiredDate.
     *
     * @return \DateTime|null
     */
    public function getServExpiredDate()
    {
        return $this->servExpiredDate;
    }

    /**
     * Set servAttentionEstiDate.
     *
     * @param \DateTime|null $servAttentionEstiDate
     *
     * @return AsdkServiceCall
     */
    public function setServAttentionEstiDate($servAttentionEstiDate = null)
    {
        $this->servAttentionEstiDate = $servAttentionEstiDate;

        return $this;
    }

    /**
     * Get servAttentionEstiDate.
     *
     * @return \DateTime|null
     */
    public function getServAttentionEstiDate()
    {
        return $this->servAttentionEstiDate;
    }

    /**
     * Set servAttentionRealDate.
     *
     * @param \DateTime|null $servAttentionRealDate
     *
     * @return AsdkServiceCall
     */
    public function setServAttentionRealDate($servAttentionRealDate = null)
    {
        $this->servAttentionRealDate = $servAttentionRealDate;

        return $this;
    }

    /**
     * Get servAttentionRealDate.
     *
     * @return \DateTime|null
     */
    public function getServAttentionRealDate()
    {
        return $this->servAttentionRealDate;
    }

    /**
     * Set servRegistryTypeId.
     *
     * @param int $servRegistryTypeId
     *
     * @return AsdkServiceCall
     */
    public function setServRegistryTypeId($servRegistryTypeId)
    {
        $this->servRegistryTypeId = $servRegistryTypeId;

        return $this;
    }

    /**
     * Get servRegistryTypeId.
     *
     * @return int
     */
    public function getServRegistryTypeId()
    {
        return $this->servRegistryTypeId;
    }

    /**
     * Set servCommentary.
     *
     * @param string|null $servCommentary
     *
     * @return AsdkServiceCall
     */
    public function setServCommentary($servCommentary = null)
    {
        $this->servCommentary = $servCommentary;

        return $this;
    }

    /**
     * Get servCommentary.
     *
     * @return string|null
     */
    public function getServCommentary()
    {
        return $this->servCommentary;
    }

    /**
     * Set servEstimatedCost.
     *
     * @param string|null $servEstimatedCost
     *
     * @return AsdkServiceCall
     */
    public function setServEstimatedCost($servEstimatedCost = null)
    {
        $this->servEstimatedCost = $servEstimatedCost;

        return $this;
    }

    /**
     * Get servEstimatedCost.
     *
     * @return string|null
     */
    public function getServEstimatedCost()
    {
        return $this->servEstimatedCost;
    }

    /**
     * Set servRealCost.
     *
     * @param string|null $servRealCost
     *
     * @return AsdkServiceCall
     */
    public function setServRealCost($servRealCost = null)
    {
        $this->servRealCost = $servRealCost;

        return $this;
    }

    /**
     * Get servRealCost.
     *
     * @return string|null
     */
    public function getServRealCost()
    {
        return $this->servRealCost;
    }

    /**
     * Set servCurrentTime.
     *
     * @param int|null $servCurrentTime
     *
     * @return AsdkServiceCall
     */
    public function setServCurrentTime($servCurrentTime = null)
    {
        $this->servCurrentTime = $servCurrentTime;

        return $this;
    }

    /**
     * Get servCurrentTime.
     *
     * @return int|null
     */
    public function getServCurrentTime()
    {
        return $this->servCurrentTime;
    }

    /**
     * Set servAttentionTime.
     *
     * @param int|null $servAttentionTime
     *
     * @return AsdkServiceCall
     */
    public function setServAttentionTime($servAttentionTime = null)
    {
        $this->servAttentionTime = $servAttentionTime;

        return $this;
    }

    /**
     * Get servAttentionTime.
     *
     * @return int|null
     */
    public function getServAttentionTime()
    {
        return $this->servAttentionTime;
    }

    /**
     * Set servSolutionTime.
     *
     * @param int|null $servSolutionTime
     *
     * @return AsdkServiceCall
     */
    public function setServSolutionTime($servSolutionTime = null)
    {
        $this->servSolutionTime = $servSolutionTime;

        return $this;
    }

    /**
     * Get servSolutionTime.
     *
     * @return int|null
     */
    public function getServSolutionTime()
    {
        return $this->servSolutionTime;
    }

    /**
     * Set servSdbLastShot.
     *
     * @param \DateTime|null $servSdbLastShot
     *
     * @return AsdkServiceCall
     */
    public function setServSdbLastShot($servSdbLastShot = null)
    {
        $this->servSdbLastShot = $servSdbLastShot;

        return $this;
    }

    /**
     * Get servSdbLastShot.
     *
     * @return \DateTime|null
     */
    public function getServSdbLastShot()
    {
        return $this->servSdbLastShot;
    }

    /**
     * Set servCurrentProgress.
     *
     * @param int|null $servCurrentProgress
     *
     * @return AsdkServiceCall
     */
    public function setServCurrentProgress($servCurrentProgress = null)
    {
        $this->servCurrentProgress = $servCurrentProgress;

        return $this;
    }

    /**
     * Get servCurrentProgress.
     *
     * @return int|null
     */
    public function getServCurrentProgress()
    {
        return $this->servCurrentProgress;
    }

    /**
     * Set servInvolvedUser.
     *
     * @param int|null $servInvolvedUser
     *
     * @return AsdkServiceCall
     */
    public function setServInvolvedUser($servInvolvedUser = null)
    {
        $this->servInvolvedUser = $servInvolvedUser;

        return $this;
    }

    /**
     * Get servInvolvedUser.
     *
     * @return int|null
     */
    public function getServInvolvedUser()
    {
        return $this->servInvolvedUser;
    }

    /**
     * Set servInvolvedCi.
     *
     * @param int|null $servInvolvedCi
     *
     * @return AsdkServiceCall
     */
    public function setServInvolvedCi($servInvolvedCi = null)
    {
        $this->servInvolvedCi = $servInvolvedCi;

        return $this;
    }

    /**
     * Get servInvolvedCi.
     *
     * @return int|null
     */
    public function getServInvolvedCi()
    {
        return $this->servInvolvedCi;
    }

    /**
     * Set servInvolvedCompany.
     *
     * @param int|null $servInvolvedCompany
     *
     * @return AsdkServiceCall
     */
    public function setServInvolvedCompany($servInvolvedCompany = null)
    {
        $this->servInvolvedCompany = $servInvolvedCompany;

        return $this;
    }

    /**
     * Get servInvolvedCompany.
     *
     * @return int|null
     */
    public function getServInvolvedCompany()
    {
        return $this->servInvolvedCompany;
    }

    /**
     * Set servSolutionRealDate.
     *
     * @param \DateTime|null $servSolutionRealDate
     *
     * @return AsdkServiceCall
     */
    public function setServSolutionRealDate($servSolutionRealDate = null)
    {
        $this->servSolutionRealDate = $servSolutionRealDate;

        return $this;
    }

    /**
     * Get servSolutionRealDate.
     *
     * @return \DateTime|null
     */
    public function getServSolutionRealDate()
    {
        return $this->servSolutionRealDate;
    }

    /**
     * Set servAttentionRealTime.
     *
     * @param int|null $servAttentionRealTime
     *
     * @return AsdkServiceCall
     */
    public function setServAttentionRealTime($servAttentionRealTime = null)
    {
        $this->servAttentionRealTime = $servAttentionRealTime;

        return $this;
    }

    /**
     * Get servAttentionRealTime.
     *
     * @return int|null
     */
    public function getServAttentionRealTime()
    {
        return $this->servAttentionRealTime;
    }

    /**
     * Set servSolutionRealTime.
     *
     * @param int|null $servSolutionRealTime
     *
     * @return AsdkServiceCall
     */
    public function setServSolutionRealTime($servSolutionRealTime = null)
    {
        $this->servSolutionRealTime = $servSolutionRealTime;

        return $this;
    }

    /**
     * Get servSolutionRealTime.
     *
     * @return int|null
     */
    public function getServSolutionRealTime()
    {
        return $this->servSolutionRealTime;
    }

    /**
     * Set servProcedureId.
     *
     * @param int|null $servProcedureId
     *
     * @return AsdkServiceCall
     */
    public function setServProcedureId($servProcedureId = null)
    {
        $this->servProcedureId = $servProcedureId;

        return $this;
    }

    /**
     * Get servProcedureId.
     *
     * @return int|null
     */
    public function getServProcedureId()
    {
        return $this->servProcedureId;
    }

    /**
     * Set servFlagCategory.
     *
     * @param int|null $servFlagCategory
     *
     * @return AsdkServiceCall
     */
    public function setServFlagCategory($servFlagCategory = null)
    {
        $this->servFlagCategory = $servFlagCategory;

        return $this;
    }

    /**
     * Get servFlagCategory.
     *
     * @return int|null
     */
    public function getServFlagCategory()
    {
        return $this->servFlagCategory;
    }

    /**
     * Set servFlagPriority.
     *
     * @param int|null $servFlagPriority
     *
     * @return AsdkServiceCall
     */
    public function setServFlagPriority($servFlagPriority = null)
    {
        $this->servFlagPriority = $servFlagPriority;

        return $this;
    }

    /**
     * Get servFlagPriority.
     *
     * @return int|null
     */
    public function getServFlagPriority()
    {
        return $this->servFlagPriority;
    }

    /**
     * Set servFlagImpact.
     *
     * @param int|null $servFlagImpact
     *
     * @return AsdkServiceCall
     */
    public function setServFlagImpact($servFlagImpact = null)
    {
        $this->servFlagImpact = $servFlagImpact;

        return $this;
    }

    /**
     * Get servFlagImpact.
     *
     * @return int|null
     */
    public function getServFlagImpact()
    {
        return $this->servFlagImpact;
    }

    /**
     * Set servFlagUrgency.
     *
     * @param int|null $servFlagUrgency
     *
     * @return AsdkServiceCall
     */
    public function setServFlagUrgency($servFlagUrgency = null)
    {
        $this->servFlagUrgency = $servFlagUrgency;

        return $this;
    }

    /**
     * Get servFlagUrgency.
     *
     * @return int|null
     */
    public function getServFlagUrgency()
    {
        return $this->servFlagUrgency;
    }

    /**
     * Set servFlagStatus.
     *
     * @param int|null $servFlagStatus
     *
     * @return AsdkServiceCall
     */
    public function setServFlagStatus($servFlagStatus = null)
    {
        $this->servFlagStatus = $servFlagStatus;

        return $this;
    }

    /**
     * Get servFlagStatus.
     *
     * @return int|null
     */
    public function getServFlagStatus()
    {
        return $this->servFlagStatus;
    }

    /**
     * Set servFlagService.
     *
     * @param int|null $servFlagService
     *
     * @return AsdkServiceCall
     */
    public function setServFlagService($servFlagService = null)
    {
        $this->servFlagService = $servFlagService;

        return $this;
    }

    /**
     * Get servFlagService.
     *
     * @return int|null
     */
    public function getServFlagService()
    {
        return $this->servFlagService;
    }

    /**
     * Set servFlagSla.
     *
     * @param int|null $servFlagSla
     *
     * @return AsdkServiceCall
     */
    public function setServFlagSla($servFlagSla = null)
    {
        $this->servFlagSla = $servFlagSla;

        return $this;
    }

    /**
     * Get servFlagSla.
     *
     * @return int|null
     */
    public function getServFlagSla()
    {
        return $this->servFlagSla;
    }

    /**
     * Set servFlagRespUser.
     *
     * @param int|null $servFlagRespUser
     *
     * @return AsdkServiceCall
     */
    public function setServFlagRespUser($servFlagRespUser = null)
    {
        $this->servFlagRespUser = $servFlagRespUser;

        return $this;
    }

    /**
     * Get servFlagRespUser.
     *
     * @return int|null
     */
    public function getServFlagRespUser()
    {
        return $this->servFlagRespUser;
    }

    /**
     * Set servFlagRespGroup.
     *
     * @param int|null $servFlagRespGroup
     *
     * @return AsdkServiceCall
     */
    public function setServFlagRespGroup($servFlagRespGroup = null)
    {
        $this->servFlagRespGroup = $servFlagRespGroup;

        return $this;
    }

    /**
     * Get servFlagRespGroup.
     *
     * @return int|null
     */
    public function getServFlagRespGroup()
    {
        return $this->servFlagRespGroup;
    }

    /**
     * Set servFlagReason.
     *
     * @param int|null $servFlagReason
     *
     * @return AsdkServiceCall
     */
    public function setServFlagReason($servFlagReason = null)
    {
        $this->servFlagReason = $servFlagReason;

        return $this;
    }

    /**
     * Get servFlagReason.
     *
     * @return int|null
     */
    public function getServFlagReason()
    {
        return $this->servFlagReason;
    }

    /**
     * Set addStr1.
     *
     * @param string|null $addStr1
     *
     * @return AsdkServiceCall
     */
    public function setAddStr1($addStr1 = null)
    {
        $this->addStr1 = $addStr1;

        return $this;
    }

    /**
     * Get addStr1.
     *
     * @return string|null
     */
    public function getAddStr1()
    {
        return $this->addStr1;
    }

    /**
     * Set addStr2.
     *
     * @param string|null $addStr2
     *
     * @return AsdkServiceCall
     */
    public function setAddStr2($addStr2 = null)
    {
        $this->addStr2 = $addStr2;

        return $this;
    }

    /**
     * Get addStr2.
     *
     * @return string|null
     */
    public function getAddStr2()
    {
        return $this->addStr2;
    }

    /**
     * Set addStr3.
     *
     * @param string|null $addStr3
     *
     * @return AsdkServiceCall
     */
    public function setAddStr3($addStr3 = null)
    {
        $this->addStr3 = $addStr3;

        return $this;
    }

    /**
     * Get addStr3.
     *
     * @return string|null
     */
    public function getAddStr3()
    {
        return $this->addStr3;
    }

    /**
     * Set addStr4.
     *
     * @param string|null $addStr4
     *
     * @return AsdkServiceCall
     */
    public function setAddStr4($addStr4 = null)
    {
        $this->addStr4 = $addStr4;

        return $this;
    }

    /**
     * Get addStr4.
     *
     * @return string|null
     */
    public function getAddStr4()
    {
        return $this->addStr4;
    }

    /**
     * Set addStr5.
     *
     * @param string|null $addStr5
     *
     * @return AsdkServiceCall
     */
    public function setAddStr5($addStr5 = null)
    {
        $this->addStr5 = $addStr5;

        return $this;
    }

    /**
     * Get addStr5.
     *
     * @return string|null
     */
    public function getAddStr5()
    {
        return $this->addStr5;
    }

    /**
     * Set addStr6.
     *
     * @param string|null $addStr6
     *
     * @return AsdkServiceCall
     */
    public function setAddStr6($addStr6 = null)
    {
        $this->addStr6 = $addStr6;

        return $this;
    }

    /**
     * Get addStr6.
     *
     * @return string|null
     */
    public function getAddStr6()
    {
        return $this->addStr6;
    }

    /**
     * Set addStr7.
     *
     * @param string|null $addStr7
     *
     * @return AsdkServiceCall
     */
    public function setAddStr7($addStr7 = null)
    {
        $this->addStr7 = $addStr7;

        return $this;
    }

    /**
     * Get addStr7.
     *
     * @return string|null
     */
    public function getAddStr7()
    {
        return $this->addStr7;
    }

    /**
     * Set addStr8.
     *
     * @param string|null $addStr8
     *
     * @return AsdkServiceCall
     */
    public function setAddStr8($addStr8 = null)
    {
        $this->addStr8 = $addStr8;

        return $this;
    }

    /**
     * Get addStr8.
     *
     * @return string|null
     */
    public function getAddStr8()
    {
        return $this->addStr8;
    }

    /**
     * Set addStr9.
     *
     * @param string|null $addStr9
     *
     * @return AsdkServiceCall
     */
    public function setAddStr9($addStr9 = null)
    {
        $this->addStr9 = $addStr9;

        return $this;
    }

    /**
     * Get addStr9.
     *
     * @return string|null
     */
    public function getAddStr9()
    {
        return $this->addStr9;
    }

    /**
     * Set addStr10.
     *
     * @param string|null $addStr10
     *
     * @return AsdkServiceCall
     */
    public function setAddStr10($addStr10 = null)
    {
        $this->addStr10 = $addStr10;

        return $this;
    }

    /**
     * Get addStr10.
     *
     * @return string|null
     */
    public function getAddStr10()
    {
        return $this->addStr10;
    }

    /**
     * Set servCost.
     *
     * @param string|null $servCost
     *
     * @return AsdkServiceCall
     */
    public function setServCost($servCost = null)
    {
        $this->servCost = $servCost;

        return $this;
    }

    /**
     * Get servCost.
     *
     * @return string|null
     */
    public function getServCost()
    {
        return $this->servCost;
    }

    /**
     * Set servPrice.
     *
     * @param string|null $servPrice
     *
     * @return AsdkServiceCall
     */
    public function setServPrice($servPrice = null)
    {
        $this->servPrice = $servPrice;

        return $this;
    }

    /**
     * Get servPrice.
     *
     * @return string|null
     */
    public function getServPrice()
    {
        return $this->servPrice;
    }

    /**
     * Set servEffort.
     *
     * @param string|null $servEffort
     *
     * @return AsdkServiceCall
     */
    public function setServEffort($servEffort = null)
    {
        $this->servEffort = $servEffort;

        return $this;
    }

    /**
     * Get servEffort.
     *
     * @return string|null
     */
    public function getServEffort()
    {
        return $this->servEffort;
    }

    /**
     * Set servFlagNote.
     *
     * @param int|null $servFlagNote
     *
     * @return AsdkServiceCall
     */
    public function setServFlagNote($servFlagNote = null)
    {
        $this->servFlagNote = $servFlagNote;

        return $this;
    }

    /**
     * Get servFlagNote.
     *
     * @return int|null
     */
    public function getServFlagNote()
    {
        return $this->servFlagNote;
    }

    /**
     * Set servNoteCount.
     *
     * @param int|null $servNoteCount
     *
     * @return AsdkServiceCall
     */
    public function setServNoteCount($servNoteCount = null)
    {
        $this->servNoteCount = $servNoteCount;

        return $this;
    }

    /**
     * Get servNoteCount.
     *
     * @return int|null
     */
    public function getServNoteCount()
    {
        return $this->servNoteCount;
    }

    /**
     * Set servFinalStatus.
     *
     * @param int|null $servFinalStatus
     *
     * @return AsdkServiceCall
     */
    public function setServFinalStatus($servFinalStatus = null)
    {
        $this->servFinalStatus = $servFinalStatus;

        return $this;
    }

    /**
     * Get servFinalStatus.
     *
     * @return int|null
     */
    public function getServFinalStatus()
    {
        return $this->servFinalStatus;
    }

    /**
     * Set servInterfaceId.
     *
     * @param string|null $servInterfaceId
     *
     * @return AsdkServiceCall
     */
    public function setServInterfaceId($servInterfaceId = null)
    {
        $this->servInterfaceId = $servInterfaceId;

        return $this;
    }

    /**
     * Get servInterfaceId.
     *
     * @return string|null
     */
    public function getServInterfaceId()
    {
        return $this->servInterfaceId;
    }

    /**
     * Set addStr11.
     *
     * @param string|null $addStr11
     *
     * @return AsdkServiceCall
     */
    public function setAddStr11($addStr11 = null)
    {
        $this->addStr11 = $addStr11;

        return $this;
    }

    /**
     * Get addStr11.
     *
     * @return string|null
     */
    public function getAddStr11()
    {
        return $this->addStr11;
    }

    /**
     * Set addStr12.
     *
     * @param string|null $addStr12
     *
     * @return AsdkServiceCall
     */
    public function setAddStr12($addStr12 = null)
    {
        $this->addStr12 = $addStr12;

        return $this;
    }

    /**
     * Get addStr12.
     *
     * @return string|null
     */
    public function getAddStr12()
    {
        return $this->addStr12;
    }

    /**
     * Set addStr13.
     *
     * @param string|null $addStr13
     *
     * @return AsdkServiceCall
     */
    public function setAddStr13($addStr13 = null)
    {
        $this->addStr13 = $addStr13;

        return $this;
    }

    /**
     * Get addStr13.
     *
     * @return string|null
     */
    public function getAddStr13()
    {
        return $this->addStr13;
    }

    /**
     * Set addStr14.
     *
     * @param string|null $addStr14
     *
     * @return AsdkServiceCall
     */
    public function setAddStr14($addStr14 = null)
    {
        $this->addStr14 = $addStr14;

        return $this;
    }

    /**
     * Get addStr14.
     *
     * @return string|null
     */
    public function getAddStr14()
    {
        return $this->addStr14;
    }

    /**
     * Set addStr15.
     *
     * @param string|null $addStr15
     *
     * @return AsdkServiceCall
     */
    public function setAddStr15($addStr15 = null)
    {
        $this->addStr15 = $addStr15;

        return $this;
    }

    /**
     * Get addStr15.
     *
     * @return string|null
     */
    public function getAddStr15()
    {
        return $this->addStr15;
    }

    /**
     * Set addStr16.
     *
     * @param string|null $addStr16
     *
     * @return AsdkServiceCall
     */
    public function setAddStr16($addStr16 = null)
    {
        $this->addStr16 = $addStr16;

        return $this;
    }

    /**
     * Get addStr16.
     *
     * @return string|null
     */
    public function getAddStr16()
    {
        return $this->addStr16;
    }

    /**
     * Set addStr17.
     *
     * @param string|null $addStr17
     *
     * @return AsdkServiceCall
     */
    public function setAddStr17($addStr17 = null)
    {
        $this->addStr17 = $addStr17;

        return $this;
    }

    /**
     * Get addStr17.
     *
     * @return string|null
     */
    public function getAddStr17()
    {
        return $this->addStr17;
    }

    /**
     * Set addStr18.
     *
     * @param string|null $addStr18
     *
     * @return AsdkServiceCall
     */
    public function setAddStr18($addStr18 = null)
    {
        $this->addStr18 = $addStr18;

        return $this;
    }

    /**
     * Get addStr18.
     *
     * @return string|null
     */
    public function getAddStr18()
    {
        return $this->addStr18;
    }

    /**
     * Set addStr19.
     *
     * @param string|null $addStr19
     *
     * @return AsdkServiceCall
     */
    public function setAddStr19($addStr19 = null)
    {
        $this->addStr19 = $addStr19;

        return $this;
    }

    /**
     * Get addStr19.
     *
     * @return string|null
     */
    public function getAddStr19()
    {
        return $this->addStr19;
    }

    /**
     * Set addStr20.
     *
     * @param string|null $addStr20
     *
     * @return AsdkServiceCall
     */
    public function setAddStr20($addStr20 = null)
    {
        $this->addStr20 = $addStr20;

        return $this;
    }

    /**
     * Get addStr20.
     *
     * @return string|null
     */
    public function getAddStr20()
    {
        return $this->addStr20;
    }

    /**
     * Set addStr21.
     *
     * @param string|null $addStr21
     *
     * @return AsdkServiceCall
     */
    public function setAddStr21($addStr21 = null)
    {
        $this->addStr21 = $addStr21;

        return $this;
    }

    /**
     * Get addStr21.
     *
     * @return string|null
     */
    public function getAddStr21()
    {
        return $this->addStr21;
    }

    /**
     * Set addStr22.
     *
     * @param string|null $addStr22
     *
     * @return AsdkServiceCall
     */
    public function setAddStr22($addStr22 = null)
    {
        $this->addStr22 = $addStr22;

        return $this;
    }

    /**
     * Get addStr22.
     *
     * @return string|null
     */
    public function getAddStr22()
    {
        return $this->addStr22;
    }

    /**
     * Set addStr23.
     *
     * @param string|null $addStr23
     *
     * @return AsdkServiceCall
     */
    public function setAddStr23($addStr23 = null)
    {
        $this->addStr23 = $addStr23;

        return $this;
    }

    /**
     * Get addStr23.
     *
     * @return string|null
     */
    public function getAddStr23()
    {
        return $this->addStr23;
    }

    /**
     * Set addStr24.
     *
     * @param string|null $addStr24
     *
     * @return AsdkServiceCall
     */
    public function setAddStr24($addStr24 = null)
    {
        $this->addStr24 = $addStr24;

        return $this;
    }

    /**
     * Get addStr24.
     *
     * @return string|null
     */
    public function getAddStr24()
    {
        return $this->addStr24;
    }

    /**
     * Set addStr25.
     *
     * @param string|null $addStr25
     *
     * @return AsdkServiceCall
     */
    public function setAddStr25($addStr25 = null)
    {
        $this->addStr25 = $addStr25;

        return $this;
    }

    /**
     * Get addStr25.
     *
     * @return string|null
     */
    public function getAddStr25()
    {
        return $this->addStr25;
    }

    /**
     * Set addStr26.
     *
     * @param string|null $addStr26
     *
     * @return AsdkServiceCall
     */
    public function setAddStr26($addStr26 = null)
    {
        $this->addStr26 = $addStr26;

        return $this;
    }

    /**
     * Get addStr26.
     *
     * @return string|null
     */
    public function getAddStr26()
    {
        return $this->addStr26;
    }

    /**
     * Set addStr27.
     *
     * @param string|null $addStr27
     *
     * @return AsdkServiceCall
     */
    public function setAddStr27($addStr27 = null)
    {
        $this->addStr27 = $addStr27;

        return $this;
    }

    /**
     * Get addStr27.
     *
     * @return string|null
     */
    public function getAddStr27()
    {
        return $this->addStr27;
    }

    /**
     * Set addStr28.
     *
     * @param string|null $addStr28
     *
     * @return AsdkServiceCall
     */
    public function setAddStr28($addStr28 = null)
    {
        $this->addStr28 = $addStr28;

        return $this;
    }

    /**
     * Get addStr28.
     *
     * @return string|null
     */
    public function getAddStr28()
    {
        return $this->addStr28;
    }

    /**
     * Set addStr29.
     *
     * @param string|null $addStr29
     *
     * @return AsdkServiceCall
     */
    public function setAddStr29($addStr29 = null)
    {
        $this->addStr29 = $addStr29;

        return $this;
    }

    /**
     * Get addStr29.
     *
     * @return string|null
     */
    public function getAddStr29()
    {
        return $this->addStr29;
    }

    /**
     * Set addStr30.
     *
     * @param string|null $addStr30
     *
     * @return AsdkServiceCall
     */
    public function setAddStr30($addStr30 = null)
    {
        $this->addStr30 = $addStr30;

        return $this;
    }

    /**
     * Get addStr30.
     *
     * @return string|null
     */
    public function getAddStr30()
    {
        return $this->addStr30;
    }

    /**
     * Set servFlagNotePriv.
     *
     * @param int|null $servFlagNotePriv
     *
     * @return AsdkServiceCall
     */
    public function setServFlagNotePriv($servFlagNotePriv = null)
    {
        $this->servFlagNotePriv = $servFlagNotePriv;

        return $this;
    }

    /**
     * Get servFlagNotePriv.
     *
     * @return int|null
     */
    public function getServFlagNotePriv()
    {
        return $this->servFlagNotePriv;
    }

    /**
     * Set servNoteCountPriv.
     *
     * @param int|null $servNoteCountPriv
     *
     * @return AsdkServiceCall
     */
    public function setServNoteCountPriv($servNoteCountPriv = null)
    {
        $this->servNoteCountPriv = $servNoteCountPriv;

        return $this;
    }

    /**
     * Get servNoteCountPriv.
     *
     * @return int|null
     */
    public function getServNoteCountPriv()
    {
        return $this->servNoteCountPriv;
    }

    /**
     * Set servStatusTime.
     *
     * @param int|null $servStatusTime
     *
     * @return AsdkServiceCall
     */
    public function setServStatusTime($servStatusTime = null)
    {
        $this->servStatusTime = $servStatusTime;

        return $this;
    }

    /**
     * Get servStatusTime.
     *
     * @return int|null
     */
    public function getServStatusTime()
    {
        return $this->servStatusTime;
    }

    /**
     * Set servDescriptionNohtml.
     *
     * @param string|null $servDescriptionNohtml
     *
     * @return AsdkServiceCall
     */
    public function setServDescriptionNohtml($servDescriptionNohtml = null)
    {
        $this->servDescriptionNohtml = $servDescriptionNohtml;

        return $this;
    }

    /**
     * Get servDescriptionNohtml.
     *
     * @return string|null
     */
    public function getServDescriptionNohtml()
    {
        return $this->servDescriptionNohtml;
    }

    /**
     * Set surveySucceeded.
     *
     * @param int|null $surveySucceeded
     *
     * @return AsdkServiceCall
     */
    public function setSurveySucceeded($surveySucceeded = null)
    {
        $this->surveySucceeded = $surveySucceeded;

        return $this;
    }

    /**
     * Get surveySucceeded.
     *
     * @return int|null
     */
    public function getSurveySucceeded()
    {
        return $this->surveySucceeded;
    }

    /**
     * Set servProviderUcId.
     *
     * @param int|null $servProviderUcId
     *
     * @return AsdkServiceCall
     */
    public function setServProviderUcId($servProviderUcId = null)
    {
        $this->servProviderUcId = $servProviderUcId;

        return $this;
    }

    /**
     * Get servProviderUcId.
     *
     * @return int|null
     */
    public function getServProviderUcId()
    {
        return $this->servProviderUcId;
    }

    /**
     * Set servReason.
     *
     * @param int $servReason
     *
     * @return AsdkServiceCall
     */
    public function setServReason($servReason)
    {
        $this->servReason = $servReason;

        return $this;
    }

    /**
     * Get servReason.
     *
     * @return int
     */
    public function getServReason()
    {
        return $this->servReason;
    }

    /**
     * Set servAssociatedCi.
     *
     * @param int $servAssociatedCi
     *
     * @return AsdkServiceCall
     */
    public function setServAssociatedCi($servAssociatedCi)
    {
        $this->servAssociatedCi = $servAssociatedCi;

        return $this;
    }

    /**
     * Get servAssociatedCi.
     *
     * @return int
     */
    public function getServAssociatedCi()
    {
        return $this->servAssociatedCi;
    }

    /**
     * Set servStatus.
     *
     * @param int $servStatus
     *
     * @return AsdkServiceCall
     */
    public function setServStatus($servStatus)
    {
        $this->servStatus = $servStatus;

        return $this;
    }

    /**
     * Get servStatus.
     *
     * @return int
     */
    public function getServStatus()
    {
        return $this->servStatus;
    }

    /**
     * Set servCategory.
     *
     * @param int $servCategory
     *
     * @return AsdkServiceCall
     */
    public function setServCategory($servCategory)
    {
        $this->servCategory = $servCategory;

        return $this;
    }

    /**
     * Get servCategory.
     *
     * @return int
     */
    public function getServCategory()
    {
        return $this->servCategory;
    }

    /**
     * Set servImpact.
     *
     * @param int $servImpact
     *
     * @return AsdkServiceCall
     */
    public function setServImpact($servImpact)
    {
        $this->servImpact = $servImpact;

        return $this;
    }

    /**
     * Get servImpact.
     *
     * @return int
     */
    public function getServImpact()
    {
        return $this->servImpact;
    }

    /**
     * Set servPriority.
     *
     * @param int $servPriority
     *
     * @return AsdkServiceCall
     */
    public function setServPriority($servPriority)
    {
        $this->servPriority = $servPriority;

        return $this;
    }

    /**
     * Get servPriority.
     *
     * @return int
     */
    public function getServPriority()
    {
        return $this->servPriority;
    }

    /**
     * Set servFlIntProject.
     *
     * @param int $servFlIntProject
     *
     * @return AsdkServiceCall
     */
    public function setServFlIntProject($servFlIntProject)
    {
        $this->servFlIntProject = $servFlIntProject;

        return $this;
    }

    /**
     * Get servFlIntProject.
     *
     * @return int
     */
    public function getServFlIntProject()
    {
        return $this->servFlIntProject;
    }

    /**
     * Set servService.
     *
     * @param int $servService
     *
     * @return AsdkServiceCall
     */
    public function setServService($servService)
    {
        $this->servService = $servService;

        return $this;
    }

    /**
     * Get servService.
     *
     * @return int
     */
    public function getServService()
    {
        return $this->servService;
    }

    /**
     * Set servUrgency.
     *
     * @param int $servUrgency
     *
     * @return AsdkServiceCall
     */
    public function setServUrgency($servUrgency)
    {
        $this->servUrgency = $servUrgency;

        return $this;
    }

    /**
     * Get servUrgency.
     *
     * @return int
     */
    public function getServUrgency()
    {
        return $this->servUrgency;
    }

    /**
     * Set servResponsibleGroup.
     *
     * @param int $servResponsibleGroup
     *
     * @return AsdkServiceCall
     */
    public function setServResponsibleGroup($servResponsibleGroup)
    {
        $this->servResponsibleGroup = $servResponsibleGroup;

        return $this;
    }

    /**
     * Get servResponsibleGroup.
     *
     * @return int
     */
    public function getServResponsibleGroup()
    {
        return $this->servResponsibleGroup;
    }

    /**
     * Set servServiceSla.
     *
     * @param int $servServiceSla
     *
     * @return AsdkServiceCall
     */
    public function setServServiceSla($servServiceSla)
    {
        $this->servServiceSla = $servServiceSla;

        return $this;
    }

    /**
     * Get servServiceSla.
     *
     * @return int
     */
    public function getServServiceSla()
    {
        return $this->servServiceSla;
    }

    /**
     * Set servCodreceptor.
     *
     * @param \ProduccionBundle\Entity\Usuarios|null $servCodreceptor
     *
     * @return AsdkServiceCall
     */
    public function setServCodreceptor(\ProduccionBundle\Entity\Usuarios $servCodreceptor = null)
    {
        $this->servCodreceptor = $servCodreceptor;

        return $this;
    }

    /**
     * Get servCodreceptor.
     *
     * @return \ProduccionBundle\Entity\Usuarios|null
     */
    public function getServCodreceptor()
    {
        return $this->servCodreceptor;
    }

    /**
     * Set servResponsible.
     *
     * @param \ProduccionBundle\Entity\Usuarios|null $servResponsible
     *
     * @return AsdkServiceCall
     */
    public function setServResponsible(\ProduccionBundle\Entity\Usuarios $servResponsible = null)
    {
        $this->servResponsible = $servResponsible;

        return $this;
    }

    /**
     * Get servResponsible.
     *
     * @return \ProduccionBundle\Entity\Usuarios|null
     */
    public function getServResponsible()
    {
        return $this->servResponsible;
    }

    /**
     * Set servAuthor.
     *
     * @param \ProduccionBundle\Entity\Usuarios|null $servAuthor
     *
     * @return AsdkServiceCall
     */
    public function setServAuthor(\ProduccionBundle\Entity\Usuarios $servAuthor = null)
    {
        $this->servAuthor = $servAuthor;

        return $this;
    }

    /**
     * Get servAuthor.
     *
     * @return \ProduccionBundle\Entity\Usuarios|null
     */
    public function getServAuthor()
    {
        return $this->servAuthor;
    }

    /**
     * Set servUserModifier.
     *
     * @param \ProduccionBundle\Entity\Usuarios|null $servUserModifier
     *
     * @return AsdkServiceCall
     */
    public function setServUserModifier(\ProduccionBundle\Entity\Usuarios $servUserModifier = null)
    {
        $this->servUserModifier = $servUserModifier;

        return $this;
    }

    /**
     * Get servUserModifier.
     *
     * @return \ProduccionBundle\Entity\Usuarios|null
     */
    public function getServUserModifier()
    {
        return $this->servUserModifier;
    }

    /**
     * Set servCustomer.
     *
     * @param \ProduccionBundle\Entity\Usuarios|null $servCustomer
     *
     * @return AsdkServiceCall
     */
    public function setServCustomer(\ProduccionBundle\Entity\Usuarios $servCustomer = null)
    {
        $this->servCustomer = $servCustomer;

        return $this;
    }

    /**
     * Get servCustomer.
     *
     * @return \ProduccionBundle\Entity\Usuarios|null
     */
    public function getServCustomer()
    {
        return $this->servCustomer;
    }

    /**
     * Set servVendor.
     *
     * @param \ProduccionBundle\Entity\Vendor|null $servVendor
     *
     * @return AsdkServiceCall
     */
    public function setServVendor(\ProduccionBundle\Entity\Vendor $servVendor = null)
    {
        $this->servVendor = $servVendor;

        return $this;
    }

    /**
     * Get servVendor.
     *
     * @return \ProduccionBundle\Entity\Vendor|null
     */
    public function getServVendor()
    {
        return $this->servVendor;
    }
}
