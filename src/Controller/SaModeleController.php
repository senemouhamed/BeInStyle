<?php

namespace App\Controller;

use App\Entity\SaModele;
use App\Form\SaModeleType;
use App\Repository\SaModeleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/sa/modele")
 */
class SaModeleController extends AbstractController
{
    /**
     * @Route("/", name="sa_modele_index", methods={"GET"})
     */
    public function index(SaModeleRepository $saModeleRepository): Response
    {
        return $this->render('sa_modele/index.html.twig', [
            'sa_modeles' => $saModeleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="sa_modele_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $saModele = new SaModele();
        $form = $this->createForm(SaModeleType::class, $saModele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($saModele->getImagaemodele() !== null) {
                $file = $form->get('imagaemodele')->getData();
                $fileName =  uniqid(). '.' .$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'), // Le dossier dans le quel le fichier va etre charger
                        $fileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }

                $saModele->setImagaemodele($fileName);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($saModele);
            $entityManager->flush();

            return $this->redirectToRoute('sa_modele_index');
        }

        return $this->render('sa_modele/new.html.twig', [
            'sa_modele' => $saModele,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sa_modele_show", methods={"GET"})
     */
    public function show(SaModele $saModele): Response
    {
        return $this->render('sa_modele/show.html.twig', [
            'sa_modele' => $saModele,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sa_modele_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SaModele $saModele): Response
    {
        $form = $this->createForm(SaModeleType::class, $saModele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sa_modele_index');
        }

        return $this->render('sa_modele/edit.html.twig', [
            'sa_modele' => $saModele,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sa_modele_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SaModele $saModele): Response
    {
        if ($this->isCsrfTokenValid('delete'.$saModele->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($saModele);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sa_modele_index');
    }
}
