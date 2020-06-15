<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestLoginController
 * @package App\Controller
 */
class TestLoginController extends AbstractController {

    /**
     * @Route("/admin/testLogin")
     */
    public function adminTestLogin() {
        $username = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
        return new Response("<h1>Hola $username (<a href=\"/logout\">logout</a>)</h1>");
    }
}