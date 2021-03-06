<?php

namespace Gist\InventoryBundle\Template\Controller;

use Gist\InventoryBundle\Entity\Account;

trait HasInventoryAccount
{
    protected function createInventoryAccount($o)
    {
        $allow = false;

        // override this if you want a non-blank name and different negative allow settings
        $account = new Account();
        $account->setName('')
            ->setUserCreate($this->getUser())
            ->setAllowNegative($allow);

        return $account;
    }

    protected function updateHasInventoryAccount($o, $data, $is_new)
    {
        if ($is_new || $o->getInventoryAccount() == null)
        {
            // create inventory account for new objects
            $account = $this->createInventoryAccount($o, $data);

            $em = $this->getDoctrine()->getManager();
            $em->persist($account);
            $em->flush();
            $o->setInventoryAccount($account);
        }
    }
}

