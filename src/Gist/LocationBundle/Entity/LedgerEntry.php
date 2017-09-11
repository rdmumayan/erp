<?php

namespace Gist\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Gist\CoreBundle\Template\Entity\HasGeneratedID;
use Gist\CoreBundle\Template\Entity\HasCode;
use Gist\CoreBundle\Template\Entity\HasNotes;
use Gist\CoreBundle\Template\Entity\TrackCreate;

use DateTime;
use stdClass;

/**
 * @ORM\Entity
 * @ORM\Table(name="ledger_entry")
 */

class LedgerEntry
{


    use HasGeneratedID;
    use TrackCreate;



    /** @ORM\Column(type="string", length=50) */
    protected $amount;

    /** @ORM\Column(type="string", length=250, nullable=true) */
    protected $entry_description;


    /**
     * @ORM\ManyToOne(targetEntity="POSLocations")
     * @ORM\JoinColumn(name="pos_location_id", referencedColumnName="id")
     */
    protected $pos_location;



    public function __construct()
    {
        $this->initTrackCreate();
    }






    public function toData()
    {
        $data = new \stdClass();
        $this->dataHasGeneratedID($data);
        $this->dataTrackCreate($data);
        return $data;
    }


  
    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return LedgerEntry
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set entryDescription
     *
     * @param string $entryDescription
     *
     * @return LedgerEntry
     */
    public function setEntryDescription($entryDescription)
    {
        $this->entry_description = $entryDescription;

        return $this;
    }

    /**
     * Get entryDescription
     *
     * @return string
     */
    public function getEntryDescription()
    {
        return $this->entry_description;
    }

    /**
     * Set posLocation
     *
     * @param \Gist\LocationBundle\Entity\POSLocations $posLocation
     *
     * @return LedgerEntry
     */
    public function setPosLocation(\Gist\LocationBundle\Entity\POSLocations $posLocation = null)
    {
        $this->pos_location = $posLocation;

        return $this;
    }

    /**
     * Get posLocation
     *
     * @return \Gist\LocationBundle\Entity\POSLocations
     */
    public function getPosLocation()
    {
        return $this->pos_location;
    }
}
