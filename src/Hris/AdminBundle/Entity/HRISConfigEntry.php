<?php

namespace Hris\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="hris_cfg_entry")
 */
class HRISConfigEntry
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=80)
     */
    protected $id;

    /** @ORM\Column(type="string", length=300) */
    protected $value;


    public function __construct($id, $value)
    {
        $this->id = $id;
        $this->value = $value;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getID()
    {
        return $this->id;
    }
}
