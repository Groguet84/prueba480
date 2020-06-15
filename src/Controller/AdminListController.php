<?php
namespace App\Controller;

use App\Entity\Brand;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminListController
 * @package App\Controller
 */
class AdminListController extends AbstractFOSRestController {

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * AdminListController constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/admin/list")
     * @Rest\View()
     */
    public function adminTestLogin() {
        $repo = $this->em->getRepository(Brand::class);

        return $repo->findAll();
    }
}