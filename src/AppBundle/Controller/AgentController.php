<?php
// src/AppBundle/Controller/AgentController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgentController extends Controller
{
    /**
     * @Route("/agent")
     */
    public function numberAction()
    {
        $numbers = array('Юльча карапульча?','Да!');
        $numbersList = 'Юльча карапульча? Да!';
        $html = $this->container->get('templating')->render(
            'agent.html.twig',
            array('Yu'=>$numbersList)
        );
        return new Response($html);
        
    }
}
?>