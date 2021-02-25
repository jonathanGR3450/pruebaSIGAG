<?php

namespace App\Controller;

use App\Entity\Operation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OperationController extends AbstractController
{
    /**
     * @Route("/", name="operation")
     */
    public function index(): Response
    {
        return $this->render('operation/index.html.twig', [
            'controller_name' => 'lol',
        ]);
    }

    /**
     * @Route("/save", options={"expose"=true}, name="saveOperation")
     */
    public function save(Request $request): Response
    {
        if ($request->isXmlHttpRequest()) {
            $number1 = $request->request->get('number1');
            $number2 = $request->request->get('number2');

            $sum = $number1 + $number2;

            $entityManager = $this->getDoctrine()->getManager();
            $operation = new Operation($number1, $number2, $sum);
            $entityManager->persist($operation);
            $entityManager->flush();
            return new JsonResponse(compact("sum", "number1", "number2"));
        }else{
            throw new \Exception("ERROR");
        }
    }

}
