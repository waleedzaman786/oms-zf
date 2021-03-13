<?php

namespace Order\Factory;

use Order\Filter\CustomerFilter;
use Order\Service\CustomerService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CustomerServiceFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return CustomerService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $em = $serviceLocator->get('Doctrine\ORM\EntityManager');
        $repository = $em->getRepository('Order\Entity\Customer');
        $translator = $serviceLocator->get('translator');

        return new CustomerService($serviceLocator, $repository, new CustomerFilter($translator));
    }
}
