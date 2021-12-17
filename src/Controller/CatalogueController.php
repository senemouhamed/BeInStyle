<?php

namespace App\Controller;
use App\Entity\Catalogue;
use App\Repository\CatalogueRepository;
use App\Form\FormCatalogueType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/catalogue")
 */
class CatalogueController extends AbstractController
{
    /**
     * @Route("/catalogue", name="catalogue")
     */
    public function index(CatalogueRepository $catalogueRepository): Response
    {
       
        return $this->render('catalogue/index.html.twig', [
            'catalogues' => $catalogueRepository->findAll(),
        ]);
    }
    /**
     * @Route("/new", name="catalogue_new", methods={"GET","POST"})
     */
    public function new(Request $request):Response
    {
        $catalogue = new Catalogue();
        $form = $this->createForm(FormCatalogueType::class, $catalogue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($catalogue->getModele() !== null) {
                $file = $form->get('modele')->getData();
                $fileName =  uniqid(). '.' .$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'), // Le dossier dans le quel le fichier va etre charger
                        $fileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }

                $catalogue->setModele($fileName);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($catalogue);
            $entityManager->flush();

            return $this->redirectToRoute('catalogue');
        }
        return $this->render('catalogue/new.html.twig', [
            'catalogue' => $catalogue,
            'form' => $form->createView(),
        ]);
    }
      /**
     * @Route("/{id}", name="modele_show", methods={"GET"})
     */
    public function show(Catalogue $catalogue): Response
    {
        return $this->render('catalogue/detail.html.twig', [
            'catalogue' => $catalogue,
        ]);
    }
     /**
     * @Route("/{id}/edit", name="modele_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Catalogue $catalogue): Response
    {
        $form = $this->createForm(FormCatalogueType::class, $catalogue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($catalogue->getModele() !== null) {
                $file = $form->get('modele')->getData();
                $fileName =  uniqid(). '.' .$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'), // Le dossier dans le quel le fichier va etre charger
                        $fileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }

                $catalogue->setModele($fileName);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('catalogue');
        }

        return $this->render('catalogue/edit.html.twig', [
            'catalogue' => $catalogue,
            'form' => $form->createView(),
        ]);
    }
     /**
     * @Route("/{id}", name="modele_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Catalogue $catalogue): Response
    {
        if ($this->isCsrfTokenValid('delete'.$catalogue->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($catalogue);
            $entityManager->flush();
        }

        return $this->redirectToRoute('catalogue');
    }
}
