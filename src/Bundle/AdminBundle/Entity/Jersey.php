<?php

namespace Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jersey
 *
 * @ORM\Table()
 */
class Jersey
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
     *
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="id", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="id_season", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    private $id_season;

    /**
     * @var string
     *
     * @ORM\Column(name="jersey_disabled", type="string", length=255)
     */
    private $jersey_disabled;

    /**
     * @var string
     *
     * @ORM\Column(name="jersey", type="string", length=255)
     */
    private $jersey;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;


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
     * Set season
     *
     * @param string $season
     * @return string
     */
    public function setSeason($season)
    {
        $this->id_season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string
     */
    public function getSeason()
    {
        return $this->id_season;
    }

    /**
     * Set jersey_disabled
     *
     * @param string $jersey_disabled
     * @return string
     */
    public function setJerseyDisabled($jerseyDisabled)
    {
        $this->jersey_disabled = $jerseyDisabled;

        return $this;
    }

    /**
     * Get jersey_disabled
     *
     * @return string
     */
    public function getJerseyDisabled()
    {
        return $this->jersey_disabled;
    }

    /**
     * Set jersey
     *
     * @param string $jersey
     * @return string
     */
    public function setJersey($jersey)
    {
        $this->jersey = $jersey;

        return $this;
    }

    /**
     * Get jersey
     *
     * @return string
     */
    public function getJersey()
    {
        return $this->jersey;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return string
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return string
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}

