<?php

namespace App\Controller;

use App\Form\AppelDOffreType;
use App\Form\ArticlesType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Appeldoffre;
use App\Entity\Articles;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig');
    }
    //--------------------------------------------------------------------------------------->
    //------Actualités...------>
    /**
     * @Route("/admin/actualites", name="admin_actu")
     */
    public function adminActu(){
        $repo = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $repo->findAll();
        $articles = array_reverse($articles);
        return $this->render('admin/actualites/actu.html.twig',[
            'articles' => $articles
        ]);
    }
    /**
     * @Route("admin/actualites/ajouter", name="adminActuAjout")
     * @param Request $request
     * @param ObjectManager $manager
     * @return Response
     */
    public function ajoutActu(ObjectManager $manager,Request $request){
        $article = new Articles();
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $article->setCreatedAt(new \DateTime());
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('admin_actu');
        }
        return $this->render('admin/actualites/ajout.html.twig',[
            'articleForm' => $form->createView()
        ]);
    }
    /**
     * @Route("admin/actualites/editer-{id}", name="adminActuEdit")
     * @param $id
     * @param Request $request
     * @param ObjectManager $manager
     * @return Response
     */
    public function EditActu($id, Request $request, ObjectManager $manager){
        $repo = $this->getDoctrine()->getRepository(Articles::class);
        $article = $repo->find($id);
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('admin_actu');
        }
        return $this->render('admin/actualites/edit.html.twig',[
            'article' => $article,
            'articleForm' => $form->createView()
        ]);
    }

    /**
     *@Route("admin/actualites/delete-{id}", name="supprimerActu")
     * @param Articles $article
     * @param ObjectManager $manager
     * @return RedirectResponse
     */
    public function supprimerActu(Articles $article, ObjectManager $manager){
        $manager->remove($article);
        $manager->flush();
        return $this->redirectToRoute('admin_actu');
    }

    //------------------------------------------------------------------------------------>
    //------Appels d'offres...------>
    /**
     * @Route("admin/appels_offres", name="adminAdo")
     */
    public function adminAdo(){
        $repo = $this->getDoctrine()->getRepository(Appeldoffre::class);
        $articles = $repo->findAll();
        $articles = array_reverse($articles);
        return $this->render('admin/ado/ado.html.twig',[
            'adoffres' => $articles
        ]);
    }
    /**
     * @Route("admin/appels_offres/ajouter", name="adminAdoAjout")
     * @param Request $request
     * @param ObjectManager $manager
     * @return Response
     */
    public function ajoutAdo(Request $request, ObjectManager $manager){
        $ado = new AppelDOffre();
        $form = $this->createForm(AppeldoffreType::class, $ado);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $ado->setCreatedAt(new \DateTime());
            $manager->persist($ado);
            $manager->flush();
            return $this->redirectToRoute('adminAdo');
        }
        return $this->render('admin/ado/ajout.html.twig',[
            'adoForm' => $form->createView()
        ]);
    }
    /**
     * @Route("admin/appels_offres/editer-{id}", name="adminAdoEdit")
     * @param AppelDOffre $ado
     * @param Request $request
     * @param ObjectManager $manager
     * @return Response
     */
    public function EditAdo(AppelDOffre $ado, Request $request, ObjectManager $manager){
        $form = $this->createForm(AppeldoffreType::class, $ado);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($ado);
            $manager->flush();
            return  $this->redirectToRoute('adminAdo');
        }
        return $this->render('admin/ado/edit.html.twig',[
            'adoffre' => $ado,
            'adoForm' => $form->createView()
        ]);
    }

    /**
     * @Route("admin/appels_offres/delete-{id}", name="supprimerAdo")
     * @param AppelDOffre $ado
     * @param ObjectManager $manager
     * @return RedirectResponse
     */
    public function supprimerAdo(Appeldoffre $ado, ObjectManager $manager){
        $manager->remove($ado);
        $manager->flush();
        return $this->redirectToRoute('adminAdo');
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route("/login", name="login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils){
        $lastUsername = $authenticationUtils->getLastUsername();
        $error = $authenticationUtils->getLastAuthenticationError();
        return $this->render('admin/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
}
