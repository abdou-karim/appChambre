<?php

namespace App\Controller;

use App\Entity\Etudiant;
use App\Form\ProductFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class EtudiantController extends AbstractController
{

 

 /**
     * @Route("/etudiant", name="addetudiant")
     */
    public function addEtudiant(Request $request): Response
    {
        $etudiant=new Etudiant(); 
        $numchambre = $this->getDoctrine()->getRepository(Etudiant::class)->find(['statut' => '1']);
        $form=$this->createForm(ProductFormType::class,$etudiant);
        $form->handleRequest($request);
        $nom = $form['nom']->getData();
        $prenom = $form['prenom']->getData();
        $statut =1;
        dump($etudiant);
        if($form->isSubmitted() && $form->isValid())
        {
            
            $matricule=$etudiant->CreerMatricule($nom,$prenom);
            $etudiant->setMatricule($matricule);
            $etudiant->setStatut($statut);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($etudiant);
            $entityManager->flush();
        }
        return $this->render('etudiant/index.html.twig', [
            'formaddEtudiant' => $form->createView(),
            
        ]);
    }

    
}
