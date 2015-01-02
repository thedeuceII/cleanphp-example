<?php

namespace Application\Controller;

use CleanPhp\Invoicer\Domain\Entity\Customer;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class CustomersController
 * @package Application\Controller
 */
class CustomersController extends AbstractActionController
{
    /**
     * @return array
     */
    public function indexAction()
    {
        return [
            'customers' => [
                (new Customer())->setName('ABC Company'),
                (new Customer())->setName('ACME Corporation'),
                (new Customer())->setName('XYZ, LLC')
            ]
        ];
    }
}
