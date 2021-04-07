<?php

namespace App\Controller;

use App\Entity\Appeldoffre;
use App\Entity\Articles;
use App\Entity\Chiffres;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $chiff = $this->getDoctrine()->getRepository(Chiffres::class);
        $allChiffre = $chiff->findAll();

        $repo = $this->getDoctrine()->getRepository(Articles::class);
        $all = $repo->findAll();
        $all = array_reverse($all);
        $articles = array_slice($all, 0, 4);

        $repoAdo = $this->getDoctrine()->getRepository(AppelDOffre::class);
        $allAdo = $repoAdo->findAll();
        $allAdo = array_reverse($allAdo);
        $ado = array_slice($allAdo, 0, 4);

        return $this->render('home/index.html.twig',[
            'articles' => $articles,
            'chiffres' => $allChiffre,
            'appelDOffre' => $ado
        ]);
    }
    /**
     * @Route("/notre_ecole/actualités/actu-{id}", name="actu_show")
     */
    public function show($id){
        $repo = $this->getDoctrine()->getRepository(Articles::class);
        $article = $repo->find($id);
        return $this->render('home/show.html.twig',[
            'article'=>$article
        ]);
    }

    /**
     * @Route("/notre_ecole", name="notre_ecole")
     */
    public function notreEcole()
    {
        return $this->render('home/notreEcole.html.twig');
    }
    /**
     * @Route("/formations", name="formations")
     */
    public function formations()
    {
        return $this->render('home/formations.html.twig');
    }
    /**
     * @Route("/notre_ecole/mot_du_directeur", name="motDuDirecteur")
     */
    public function motDuDirecteur(){
        return $this->render('home/motDuDirecteur.html.twig',);
    }
    /**
     * @Route("/notre_ecole/mission", name="mission")
     */
    public function mission(){
        return $this->render('home/mission.html.twig',);
    }
    /**
     * @Route("/notre_ecole/partenariats", name="partenariats")
     */
    public function partenariats(){
        return $this->render('home/partenariats.html.twig',);
    }
    /**
     * @Route("/notre_ecole/departements", name="departements")
     */
    public function departements(){
        return $this->render('home/departements.html.twig',);
    }
    /**
     * @Route("/notre_ecole/enseignants", name="enseignants")
     */
    public function enseignants(){
        return $this->render('home/enseignants.html.twig',);
    }
    /**
     * @Route("/notre_ecole/contact", name="contact")
     */
    public function contact(){
        return $this->render('home/contact.html.twig',);
    }
    /**
     * @Route("/notre_ecole/actualités", name="actualites")
     */
    public function actualites(){
        $repo = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $repo->findAll();
        $articles = array_reverse($articles);
        return $this->render('home/actualites.html.twig',[
            'articles'=>$articles
        ]);
    }
    /**
     * @Route("/notre_ecole/club", name="club")
     */
    public function club(){
        return $this->render('home/club.html.twig',);
    }
    /**
     * @Route("/notre_ecole/ressources_infrastructures", name="infrastructures")
     */
    public function infrastructures(){
        return $this->render('home/infrastructures.html.twig',);
    }
    /**
     * @Route("/notre_ecole/vie_estudiantine", name="vie_estudiantine")
     */
    public function vieEstudiantine(){
        return $this->render('home/vieEstudiantine.html.twig',);
    }
    /**
     * @Route("/notre_ecole/appel_d_offre", name="appel_offre")
     */
    public function appelOffre(){

        $repoAdo = $this->getDoctrine()->getRepository(Appeldoffre::class);
        $allAdo = $repoAdo->findAll();
        $allAdo = array_reverse($allAdo);

        return $this->render('home/appelOffre.html.twig',[
            'appelDOffre' => $allAdo
        ]);
    }
    /**
     * @Route("/notre_ecole/appel_d_offre/ado-{id}", name="ado_show")
     */
    public function showAdo($id){
        $repo = $this->getDoctrine()->getRepository(Appeldoffre::class);
        $ado = $repo->find($id);
        return $this->render('home/adoShow.html.twig',
        [
            'ado' => $ado
        ]);
    }
    /**
     * @Route("/notre_ecole/projet_personnel", name="pp")
     */
    public function pp(){
        return $this->render('home/pp.html.twig',);
    }
    /**
     * @Route("/formations/formation_initiale", name="formation_initiale")
     */
    public function formationInitiale(){
        return $this->render('home/formationInitiale.html.twig',);
    }
    /**
     * @Route("/formations/formation_initiale/ingénierie", name="ingenierie")
     */
    public function ingenierie(){
        return $this->render('home/ingenierie.html.twig',);
    }
    /**
     * @Route("/formations/formation_initiale/DUT", name="DUT")
     */
    public function DUT(){
        return $this->render('home/DUT.html.twig',);
    }
    /**
     * @Route("/formations/formation_initiale/licences_professionelles", name="LEP")
     */
    public function LEP(){
        return $this->render('home/LEP.html.twig',);
    }
    /**
     * @Route("/formations/formation_continue", name="formation_continue")
     */
    public function formationContinue(){
        return $this->render('home/formationContinue.html.twig',);
    }
    /**
     * @Route("/formations/formation_continue/licence_université", name="licence_universite")
     */
    public function licenceU(){
        return $this->render('home/licenceU.html.twig',);
    }
    /**
     * @Route("/formations/formation_continue/master_université", name="master_universite")
     */
    public function masterU(){
        return $this->render('home/masterU.html.twig',);
    }


//recherche------->
    /**
     * @Route("/recherches_developpement", name="recherche")
     */
    public function rechercheDeveloppement(){
        return $this->render('home/recherches.html.twig');
    }
    /**
     * @Route("/recherches/laboratoire_SSDIA", name="labo")
     */
    public function labo(){
        return $this->render('home/labo.html.twig',);
    }
    /**
     * @Route("/recherches/composition", name="composition")
     */
    public function composition(){
        return $this->render('home/composition.html.twig',);
    }
    /**
     * @Route("/recherches/equipe", name="equipe")
     */
    public function equipe(){
        return $this->render('home/equipe.html.twig',);
    }
    /**
     * @Route("/recherches/partenaires", name="partenaires")
     */
    public function partenaires(){
        return $this->render('home/partenaires.html.twig',);
    }


    //admission----->
    /**
     * @Route("/admission", name="admission")
     */
    public function admission(){
        return $this->render('home/admission.html.twig');
    }
    /**
     * @Route("/admission/cycle_ingénieur", name="cycle_ingenieur")
     */
    public function cIngenieur(){
        return $this->render('home/cIngenieur.html.twig');
    }
    /**
     * @Route("/admission/cycle_doctoral", name="cycle_doctoral")
     */
    public function cDoctoral(){
        return $this->render('home/cdoctoral.html.twig');
    }
}
