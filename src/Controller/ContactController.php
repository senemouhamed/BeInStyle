<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {
        $form=$this->createForm(ContactType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
               $contact=$form->getData();
            $message=(new \Swift_Message('Nouveau Contact'))
            ->setFrom($contact['email'])
            ->setTo('nbirame559@gmail.com')
            ->setBody(
                $this->renderView('email/contact.html.twig',compact('contact')),'text/html'
            );
            $mailer->send($message);
            $this->addFlash('message', 'le message a été bien envoyer');
            return  $this->redirectToRoute('accueil1');
        }
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView()
        ]);
    }
}
