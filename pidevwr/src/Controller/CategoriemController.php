<?php

namespace App\Controller;

use App\Entity\Categoriem;
use App\Form\CategoriemType;
use App\Repository\CategoriemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categoriem")
 */
class CategoriemController extends AbstractController
{
    /**
     * @Route("/", name="categoriem_index", methods={"GET"})
     */
    public function index(CategoriemRepository $categoriemRepository): Response
    {
        return $this->render('categoriem/index.html.twig', [
            'categoriems' => $categoriemRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categoriem_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categoriem = new Categoriem();
        $form = $this->createForm(CategoriemType::class, $categoriem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categoriem);
            $entityManager->flush();

            return $this->redirectToRoute('categoriem_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categoriem/new.html.twig', [
            'categoriem' => $categoriem,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categoriem_show", methods={"GET"})
     */
    public function show(Categoriem $categoriem): Response
    {
        return $this->render('categoriem/show.html.twig', [
            'categoriem' => $categoriem,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categoriem_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Categoriem $categoriem, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategoriemType::class, $categoriem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('categoriem_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categoriem/edit.html.twig', [
            'categoriem' => $categoriem,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categoriem_delete", methods={"POST"})
     */
    public function delete(Request $request, Categoriem $categoriem, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoriem->getId(), $request->request->get('_token'))) {
            $entityManager->remove($categoriem);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categoriem_index', [], Response::HTTP_SEE_OTHER);
    }
}
