<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Address;
use AppBundle\Entity\Phone;
use AppBundle\Entity\Email;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserController extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction(Request $request)
    {
        $form = $this->makeUserForm();
        $form->handleRequest($request);

        if (!$form->isSubmitted()) {
            return $this->render('AppBundle:User:new.html.twig', array(
                'form' => $form->createView()
            ));
        } else {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('app_user_show',['id'=>$user->getId()]));
        }
    }

    /**
     * @Route("/{id}/modify", requirements={"id": "\d+"} )
     */
    public function modifyAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:User');
        $user = $repository->find($id);
        $form = $this->makeUserForm($user);
        $form->handleRequest($request);

        if (!$form->isSubmitted()) {
            return $this->render('AppBundle:User:modify.html.twig', array(
                'form' => $form->createView(), 'user' => $user
            ));
        } else {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('app_user_show',['id'=>$user->getId()]));
        }
    }

    /**
     * @Route("/{id}/addAddress", requirements={"id": "\d+"})
     */

    public function addAddressAction(Request $request, $id) {

        $form = $this->makeAddressForm();
        $form->handleRequest($request);

        if (!$form->isSubmitted()) {
            return $this->render('AppBundle:User:new_address.html.twig', array(
                'form' => $form->createView()
            ));
        } else {
            $address = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:User');
            $user = $repository->find($id);
            $user->setAddress($address);
            $em->persist($address);
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('app_user_show',['id'=>$user->getId()]));
        }
    }

    /**
     * @Route("/{id}/addPhone", requirements={"id": "\d+"})
     */
    
    public function addPhoneAction(Request $request, $id) {

        $form = $this->makePhoneForm();
        $form->handleRequest($request);

        if (!$form->isSubmitted()) {
            return $this->render('AppBundle:User:new_phone.html.twig', array(
                'form' => $form->createView()
            ));
        } else {
            $phone = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:User');
            $user = $repository->find($id);
            $phone->setUser($user);
            $em->persist($phone);
            $em->flush();
            return $this->redirect($this->generateUrl('app_user_show',['id'=>$user->getId()]));
        }
        
    }

    /**
     * @Route("/{id}/addEmail", requirements={"id": "\d+"})
     */

    public function addEmailAction(Request $request, $id) {

        $form = $this->makeEmailForm();
        $form->handleRequest($request);

        if (!$form->isSubmitted()) {
            return $this->render('AppBundle:User:new_email.html.twig', array(
                'form' => $form->createView()
            ));
        } else {
            $email = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:User');
            $user = $repository->find($id);
            $email->setUser($user);
            $em->persist($email);
            $em->flush();
            return $this->redirect($this->generateUrl('app_user_show',['id'=>$user->getId()]));
        }

    }
    

    /**
     * @Route("/{id}/delete", requirements={"id": "\d+"})
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($id);
        if ($user) {
            $em->remove($user);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('app_user_showall'));
    }

    /**
     * @Route("/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:User');
        $user = $repository->find($id);

        return $this->render('AppBundle:User:show.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * @Route("/")
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:User');
        $users = $repository->findAll();
        return $this->render('AppBundle:User:show_all.html.twig', array(
            'users' => $users
        ));
    }


    protected function makeUserForm($user = null) {

        if (!$user) {
            $form = $this->createFormBuilder(new User());
        } else {
            $form = $this->createFormBuilder($user);
        }

        $form
            ->setMethod('POST')
            ->add('name', TextType::class)
            ->add('surname', TextType::class)
            ->add('description', TextareaType::class)
            ->add('save', SubmitType::class,['label' => 'save']);

        return $form->getForm();
    }

    protected function makeAddressForm($address = null) {
        if (!$address) {
            $form = $this->createFormBuilder(new Address());
        } else {
            $form = $this->createFormBuilder($address);
        }

        $form
            ->setMethod('POST')
            ->add('city', TextType::class)
            ->add('street', TextType::class)
            ->add('houseNum', TextType::class)
            ->add('flatNum', TextType::class)
            ->add('save', SubmitType::class,['label' => 'save']);

        return $form->getForm();
    }

    protected function makePhoneForm($phone = null) {
        
        if (!$phone) {
            $form = $this->createFormBuilder(new Phone());
        } else {
            $form = $this->createFormBuilder($phone);
        }

        $form
            ->setMethod('POST')
            ->add('phoneNum', TextType::class)
            ->add('type', ChoiceType::class, array(
                'choices' => array (
                    'private' => 'private',
                    'company' => 'company' 
                )
            ))
            ->add('save', SubmitType::class,['label' => 'save']);

        return $form->getForm();
    }

    protected function makeEmailForm($email = null) {

        if (!$email) {
            $form = $this->createFormBuilder(new Email());
        } else {
            $form = $this->createFormBuilder($email);
        }

        $form
            ->setMethod('POST')
            ->add('email', TextType::class)
            ->add('type', ChoiceType::class, array(
                'choices' => array (
                    'private' => 'private',
                    'company' => 'company'
                )
            ))
            ->add('save', SubmitType::class,['label' => 'save']);

        return $form->getForm();
    }

}
