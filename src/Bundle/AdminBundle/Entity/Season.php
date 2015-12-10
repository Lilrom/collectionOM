<?php

namespace Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table()
 */
class Season
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
     * @ORM\Column(name="year_start", type="string", length=10)
     */
    private $year_start;

    /**
     * @var string
     *
     * @ORM\Column(name="year_end", type="string", length=10)
     */
    private $year_end;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;


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
     * Set year_start
     *
     * @param string $year_start
     * @return string
     */
    public function setYearStart($year_start)
    {
        $this->year_start = $year_start;

        return $this;
    }

    /**
     * Get year_start
     *
     * @return string
     */
    public function getYearStart()
    {
        return $this->year_start;
    }

    /**
     * Set year_end
     *
     * @param string $year_end
     * @return string
     */
    public function setYearEnd($year_end)
    {
        $this->year_end = $year_end;

        return $this;
    }

    /**
     * Get year_end
     *
     * @return string
     */
    public function getYearEnd()
    {
        return $this->year_end;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return string
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
}

