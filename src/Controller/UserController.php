<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/user')]
    public function list(): Response
    {
        $utilisateurs = [
            ['name' => 'John Ninja', 'email' => 'NinjaJohn@ninjustu.ch', 'work' => "Ninja"],
            ['name' => 'Shrek', 'email' => 'Shrek@ogre.sh', 'work' => "Mangeur d'enfant"],
            ['name' => 'Chaton Mignon', 'email' => 'Chatonmignon@miaou.chat', 'work' => "Beau"],
        ];

        return $this->render('user/user.html.twig',[

            'utilisateurs_tab' => $utilisateurs,
            
]);
        
    }
}
