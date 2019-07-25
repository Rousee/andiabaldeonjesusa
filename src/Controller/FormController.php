<?php

namespace App\Controller;

use App\Entity\Documentation;
use App\Form\DocumentationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="security_form")
     */
    public function index(Request $request)
    {
        $doc = new Documentation();
        $form = $this->createForm(DocumentationType::class, $doc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($doc);
            $entityManager->flush();

            $resp = "";
            $facultad = $doc->getGrade();
            $matematica = $doc->getArticle();
            $lenguaje = $doc->getBook();
            $projects = $doc->getProjects();
            $idiomas = $doc->getAdvice();

            if(($facultad==1 || $facultad==2) && $matematica>10 && $lenguaje>2 && $projects>2 && $idiomas>4){
                $resp="Nivel 3";
            }else{
                if(($facultad==1 || $facultad==2)  && $matematica>6 && $lenguaje>1 && $projects>1 && $idiomas>2){
                    $resp="Nivel 2";
                }else{
                    if($facultad==3 && $matematica>3 && $lenguaje>0 && $projects>1 && $idiomas>0){
                        $resp="Nivel 1";
                    }else{
                        $resp="No tiene nivel";
                    }
                }
            }
            return $this->render('form/result.html.twig', [
                'result' => $resp,
            ]);
        }
        return $this->render('form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
