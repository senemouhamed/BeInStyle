<?php

namespace App\Controller;

use App\Entity\MesureFemme;
use App\Form\MesureFemmeType;
use App\Repository\MesureFemmeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mesure/femme")
 */
class MesureFemmeController extends AbstractController
{
    /**
     * @Route("/", name="mesure_femme_index", methods={"GET"})
     */
    public function index(MesureFemmeRepository $mesureFemmeRepository): Response
    {
        return $this->render('mesure_femme/index.html.twig', [
            'mesure_femmes' => $mesureFemmeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="mesure_femme_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mesureFemme = new MesureFemme();
        $form = $this->createForm(MesureFemmeType::class, $mesureFemme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mesureFemme);
            $entityManager->flush();

            return $this->redirectToRoute('mesure_femme_index');
        }

        return $this->render('mesure_femme/new.html.twig', [
            'mesure_femme' => $mesureFemme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mesure_femme_show", methods={"GET"})
     */
    public function show(MesureFemme $mesureFemme): Response
    {
        return $this->render('mesure_femme/show.html.twig', [
            'mesure_femme' => $mesureFemme,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="mesure_femme_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MesureFemme $mesureFemme): Response
    {
        $form = $this->createForm(MesureFemmeType::class, $mesureFemme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mesure_femme_index');
        }

        return $this->render('mesure_femme/edit.html.twig', [
            'mesure_femme' => $mesureFemme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mesure_femme_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MesureFemme $mesureFemme): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mesureFemme->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mesureFemme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mesure_femme_index');
    }
}
