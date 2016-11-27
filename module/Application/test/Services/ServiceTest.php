<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ApplicationTest\Services;

use Application\Entity\BglGeoCity;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use Zend\Stdlib\ArrayUtils;
use Doctrine\ORM\Configuration;


class ServicesTest extends AbstractHttpControllerTestCase {
    
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;
    
    /**
     * @var \Zend\ServiceManager\ServiceManager
     */
    private $sm;

    public function setUp()
    {
        // The module configuration should still be applicable for tests.
        // You can override configuration here with test case specific values,
        // such as sample view templates, path stacks, module_listener_options,
        // etc.
        $configOverrides = [];

        $this->setApplicationConfig(ArrayUtils::merge(
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
    ));
    $this->sm = $this->getApplication()->getServiceManager();
    $this->em = $this->sm->get('doctrine.entitymanager.orm_default');
    }
    
    
    public function testSimpleQuery() {
        $c = $this->em->getConnection();
        $r = $c->fetchAll('select * from bgl_geo_city');
        $this->assertEquals(count($r) > 0, true);
    }
    
    public function testRepositoryQuery() {
        // magick named query
        $r = $this->em->getRepository(BglGeoCity::class)->findByName('Руза');
        $this->assertEquals(count($r) > 0, true);
        // relation entity
        $entity = $r[0];
        $this->assertEquals($r[0]->getRegion() instanceof \Application\Entity\BglGeoRegion, true);
        // find by id
        $r = $this->em->getRepository(BglGeoCity::class)->find(6);
        $this->assertEquals(count($r) > 0, true);
    }
}