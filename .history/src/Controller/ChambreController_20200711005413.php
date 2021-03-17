<?php

namespace App\Controller;
use App\Form\ChambreFormType;
use App\Repository\ChambreRepository;
use App\Repository\TypeChambreRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Chambre;
// data table
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
//end datatable
class ChambreController extends AbstractController
{
   
 /**
     * @Route("/chambre", name="chambre")
     */
    public function index()
    {
        $chambre = $this->getDoctrine()->getRepository(Chambre::class)->findAll();
        return $this->render('chambre/index.html.twig', [
            'controller_name' => 'ChambreController',
            'chambre'=>$chambre,
        ]);
    }
     /**
     * Permet de lister les chambres
     * @Route("/listechambre", options={"expose"=true}, name="alllistchambre")
     */
    public function allListChambre(ChambreRepository $chambreRepository, Request $request)
    {
       if($request->isXmlHttpRequest()){
            $encoders = [new XmlEncoder(), new JsonEncoder()];
            $normalizers = [new ObjectNormalizer()];

            $chambres = $chambreRepository->findAll();

            return $this->json($chambres);
        }else{
            throw new \Exception("Aucune requête ajax n'est détecter");
        }

    }
 /**
     * Permet de lister les chambres
     * @Route("/listechambre", options={"expose"=true}, name="alllistchambre")
     */
    public f

 
    /**
     * @Route("/chambre/addchambre", name="addchambre")
     * @Route("/chambre/{id}/edit", name="chambre_edit")
     */
    public function addChambre(Chambre $chambre=null, Request $request)
    {
        
        if(!$chambre){
            $chambre = new Chambre();
        }
        // $chambre->
        $form = $this->createForm(ChambreFormType::class,$chambre);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            
                $em = $this->getDoctrine()->getManager();
                $em->persist($chambre);
                $em->flush();
                //Affichage du flash
                $this->addFlash('success',"La nouvelle chambre {$chambre->getNumero()} est enregistrée ! ");

                return $this->redirectToRoute('chambre',['id'=>$chambre->getId()]);
        }

        return $this->render('chambre/addchambre.html.twig', [
            'form'=>$form->createView(),
            'editMode'=>$chambre->getId()!==null
            ]);
    }
    

     /**
     * @Route("/chambre/{id}", name="chambres")
     */
    public function afficheIdChambre(int $id):Response
    {
        $chambres = $this->getDoctrine()->getRepository(Chambre::class)->find($id);
        return $this->render('chambre/afficheid.html.twig', [
            'controller_name' => 'ChambreController',
            'chambres'=>$chambres,
        ]);
    }

    /**
     * Permet de générer le numéro unique par chambre
     * @Route("/chambre/generernumerochambre", options={"expose"=true}, name="generernumerochambre")
     */
    public function getNewNumeroChambre(Request $request,ChambreRepository $chambreRepository)
    {
        if($request->isXmlHttpRequest())
        {
            $value = $request->request->get('value');
            //On génére le numéro unique de la chambre
            $newIdChambre = $this->genererNewIdChambre($chambreRepository);
            //On génére le numéro du batiment
            $newNumBatiment = $this->traitementNumeroBatiment($value);

            //On générer le numero complet finale de la chambre
            $numeroChambre = $newNumBatiment.'-'.$newIdChambre;
            return $this->json($numeroChambre);
        }
    }

     /**
     * Permet de générer automtiquement le nouveau numéro de la chambre à partir du dernier ID
     * @param $value
     * @param ChambreRepository $chambreRepository
     * @return int
     */
    private function genererNewIdChambre($chambreRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $lastQuestion = $chambreRepository->findOneBy([], ['id' => 'desc']);
        $lastId = $lastQuestion->getId();

        $numIdChambre = $lastId+1;

        $taille = strlen($numIdChambre);
        if($taille===1)
        {
            $numero = "00".$numIdChambre;
        }elseif ($taille===2)
        {
            $numero = "0".$numIdChambre;
        }
        return $numero;
    }
    
   
     /**
     * Permet de d'ajouter les zéro devant l'id batiment
     * @param $idBatiment
     * @return string
     */
    private function traitementNumeroBatiment($idBatiment)
    {
        $numUnique = "";
        if($idBatiment<=9)
        {
            $numUnique = "000".$idBatiment;
        }elseif ($idBatiment>9 && $idBatiment<=99)
        {
            $numUnique = "00".$idBatiment;
        }elseif($idBatiment>99&&$idBatiment<=999)
        {
            $numUnique = "0".$idBatiment;
        }elseif ($idBatiment>999&&$idBatiment<=9999)
        {
            $numUnique = $idBatiment;
        }
        return $numUnique;
    }

  
}
