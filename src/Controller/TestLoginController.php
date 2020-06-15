<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestLoginController
 * @package App\Controller
 */
class TestLoginController {

    /**
     * @Route("/admin/testLogin")
     */
    public function adminTestLogin() {
        return new Response('<h1>LOGIN OK <a href="/logout">LOGOUT</a></h1>');
    }
}