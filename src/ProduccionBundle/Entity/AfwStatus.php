<?php

namespace ProduccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AfwStatus
 *
 * @ORM\Table(name="AFW_STATUS", indexes={@ORM\Index(name="IND01_AFW_STATUS", columns={"stat_app_category"}), @ORM\Index(name="IND02_AFW_STATUS", columns={"stat_project"})})
 * @ORM\Entity
 */
class AfwStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="stat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statId;

    /**
     * @var string
     *
     * @ORM\Column(name="stat_name", type="string", length=50, nullable=false)
     */
    private $statName;

    /**
     * @var string
     *
     * @ORM\Column(name="stat_description", type="string", length=250, nullable=false)
     */
    private $statDescription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stat_background_color", type="integer", nullable=true)
     */
    private $statBackgroundColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stat_foreground_color", type="integer", nullable=true)
     */
    private $statForegroundColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stat_background_color_rgb", type="string", length=12, nullable=true)
     */
    private $statBackgroundColorRgb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stat_foreground_color_rgb", type="string", length=12, nullable=true)
     */
    private $statForegroundColorRgb;

    /**
     * @ORM\Column(name="stat_app_category", type="integer")
     */
    private $statAppCategory;

    /**
     * @ORM\Column(name="stat_project", type="integer")
     */
    private $statProject;

    /**
     * Get statId.
     *
     * @return int
     */
    public function getStatId()
    {
        return $this->statId;
    }

    /**
     * Set statName.
     *
     * @param string $statName
     *
     * @return AfwStatus
     */
    public function setStatName($statName)
    {
        $this->statName = $statName;

        return $this;
    }

    /**
     * Get statName.
     *
     * @return string
     */
    public function getStatName()
    {
        return $this->statName;
    }

    /**
     * Set statDescription.
     *
     * @param string $statDescription
     *
     * @return AfwStatus
     */
    public function setStatDescription($statDescription)
    {
        $this->statDescription = $statDescription;

        return $this;
    }

    /**
     * Get statDescription.
     *
     * @return string
     */
    public function getStatDescription()
    {
        return $this->statDescription;
    }

    /**
     * Set statBackgroundColor.
     *
     * @param int|null $statBackgroundColor
     *
     * @return AfwStatus
     */
    public function setStatBackgroundColor($statBackgroundColor = null)
    {
        $this->statBackgroundColor = $statBackgroundColor;

        return $this;
    }

    /**
     * Get statBackgroundColor.
     *
     * @return int|null
     */
    public function getStatBackgroundColor()
    {
        return $this->statBackgroundColor;
    }

    /**
     * Set statForegroundColor.
     *
     * @param int|null $statForegroundColor
     *
     * @return AfwStatus
     */
    public function setStatForegroundColor($statForegroundColor = null)
    {
        $this->statForegroundColor = $statForegroundColor;

        return $this;
    }

    /**
     * Get statForegroundColor.
     *
     * @return int|null
     */
    public function getStatForegroundColor()
    {
        return $this->statForegroundColor;
    }

    /**
     * Set statBackgroundColorRgb.
     *
     * @param string|null $statBackgroundColorRgb
     *
     * @return AfwStatus
     */
    public function setStatBackgroundColorRgb($statBackgroundColorRgb = null)
    {
        $this->statBackgroundColorRgb = $statBackgroundColorRgb;

        return $this;
    }

    /**
     * Get statBackgroundColorRgb.
     *
     * @return string|null
     */
    public function getStatBackgroundColorRgb()
    {
        return $this->statBackgroundColorRgb;
    }

    /**
     * Set statForegroundColorRgb.
     *
     * @param string|null $statForegroundColorRgb
     *
     * @return AfwStatus
     */
    public function setStatForegroundColorRgb($statForegroundColorRgb = null)
    {
        $this->statForegroundColorRgb = $statForegroundColorRgb;

        return $this;
    }

    /**
     * Get statForegroundColorRgb.
     *
     * @return string|null
     */
    public function getStatForegroundColorRgb()
    {
        return $this->statForegroundColorRgb;
    }

    /**
     * Set statAppCategory.
     *
     * @param int $statAppCategory
     *
     * @return AfwStatus
     */
    public function setStatAppCategory($statAppCategory)
    {
        $this->statAppCategory = $statAppCategory;

        return $this;
    }

    /**
     * Get statAppCategory.
     *
     * @return int
     */
    public function getStatAppCategory()
    {
        return $this->statAppCategory;
    }

    /**
     * Set statProject.
     *
     * @param int $statProject
     *
     * @return AfwStatus
     */
    public function setStatProject($statProject)
    {
        $this->statProject = $statProject;

        return $this;
    }

    /**
     * Get statProject.
     *
     * @return int
     */
    public function getStatProject()
    {
        return $this->statProject;
    }
}
