<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 09.09.16
 * Time: 13:28
 */

namespace ArmSacrificeBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use ArmSacrificeBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $design = new Category();
        $design->setName('Дизайн');
        $programming = new Category();
        $programming->setName('Программирование');
        $manager = new Category();
        $manager->setName('Менеджмент');
        $administrator = new Category();
        $administrator->setName('Администрирование');
        $em->persist($design);
        $em->persist($programming);
        $em->persist($manager);
        $em->persist($administrator);
        $em->flush();
        $this->addReference('category-design', $design);
        $this->addReference('category-programming', $programming);
        $this->addReference('category-manager', $manager);
        $this->addReference('category-administrator', $administrator);
    }

    public function getOrder()
    {
        return 1;
    }
}