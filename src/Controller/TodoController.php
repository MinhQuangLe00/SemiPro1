<?php

namespace App\Controller;
use App\Form\TodoType;
use App\Form\DateType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Todo;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class TodoController extends AbstractController
{

    #[Route(' /todo' ,name: 'app_todo')]
    public function listAction(ManagerRegistry $doctrine): Response
    {
        $products = $doctrine->getRepository('App\Entity\Todo')->findAll();


        return $this->render('todo/index.html.twig', [
            'todos' => $products
        ]);
    }

    #[Route('/todo/details/{id}',name:'todo_details')]
    public function DetailsAction(ManagerRegistry $doctrine): Response
    {
        $products = $doctrine->getRepository('App\Entity\Todo')->findAll();

        return $this->render('todo/details.html.twig',
            [
                'todos' => $products
            ]);
    }

    #[Route('/todo/delete/{id}', name: 'todo_delete')]
    public function deleteAction(ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();
        $todo = $em->getRepository('App\Entity\Todo')->find($id);

        $em->remove($todo);
        $em->flush();

        return $this->redirectToRoute('app_todo', [
            'id' => $todo->getId()
        ]);
    }



    #[Route('/todo/create', name:'todo_create')]

    public function createAction(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger)
    {
        $todo = new Todo();
        $form = $this->createForm(TodoType::class, $todo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form->get('Image')->getData();
            if ($uploadedFile) {
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();

                // Move the file to the directory where image are stored
                try {
                    $uploadedFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash(
                        'error',
                        'Cannot Upload'
                    );
                    // ... handle exception if something happens during file upload
                }
                $todo->setImage($newFilename);


                $em = $doctrine->getManager();
                $em->persist($todo);
                $em->flush();

                $this->addFlash(
                    'notice',
                    'Todo Added'
                );

                return $this->redirectToRoute('app_todo');
            }
        }
        return $this->render('todo/create.html.twig', [
            'form' => $form->createView()
        ]);

    }

    #[Route('/todo/edit/{id}', name: 'todo_edit')]


    public function editAction(ManagerRegistry $doctrine, int $id, Request $request): Response
    {
        $em = $doctrine->getManager();
        $todo = $em->getRepository('App\Entity\Todo')->find($id);

        $form = $this->createForm(TodoType::class, $todo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($todo);
            $em->flush();

            $this->addFlash(
                'notice',
                'Todo Edited'
            );
            return $this->redirectToRoute('app_todo');
        }

        return $this->renderForm('todo/edit.html.twig', ['form' => $form,]);
    }



    private function setImage(string $newFilename)
    {
    }
}