<?php

namespace App\Controller;

use App\Entity\MesureHomme1;
use App\Form\MesureHomme1Type;
use App\Repository\MesureHomme1Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mesure/homme1")
 */
class MesureHomme1Controller extends AbstractController
{
    /**
     * @Route("/", name="mesure_homme1_index", methods={"GET"})
     */
    public function index(MesureHomme1Repository $mesureHomme1Repository): Response
    {
        return $this->render('mesure_homme1/index.html.twig', [
            'mesure_homme1s' => $mesureHomme1Repository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="mesure_homme1_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mesureHomme1 = new MesureHomme1();
        $form = $this->createForm(MesureHomme1Type::class, $mesureHomme1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mesureHomme1);
            $entityManager->flush();

            return $this->redirectToRoute('mesure_homme1_index');
        }

        return $this->render('mesure_homme1/new.html.twig', [
            'mesure_homme1' => $mesureHomme1,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mesure_homme1_show", methods={"GET"})
     */
    public function show(MesureHomme1 $mesureHomme1): Response
    {
        return $this->render('mesure_homme1/show.html.twig', [
            'mesure_homme1' => $mesureHomme1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="mesure_homme1_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MesureHomme1 $mesureHomme1): Response
    {
        $form = $this->createForm(MesureHomme1Type::class, $mesureHomme1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mesure_homme1_index');
        }

        return $this->render('mesure_homme1/edit.html.twig', [
            'mesure_homme1' => $mesureHomme1,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mesure_homme1_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MesureHomme1 $mesureHomme1): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mesureHomme1->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mesureHomme1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mesure_homme1_index');
    }
}
