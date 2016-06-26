<?php
// src/AppBundle/Controller/AgentController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Post;
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
        $numbers = array('Юльча Карапульча?','Да!');
        $numbersList = 'Юльча карапульча? Да!';
        /*$html = $this->container->get('templating')->render(
            'agent.html.twig',
            array('Yu'=>$numbersList)
        );*/
		$id=7;
        $post = $this->getDoctrine()->getRepository('AppBundle:Post')->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Страница не найдена!');
        }
        $name = $post->getName();
        $html = $this->container->get('templating')->render(
            'agent.html.twig',
            array('Yu'=>$name)
        );

        return new Response($html);
    }
}
?>