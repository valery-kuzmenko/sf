<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction() {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        return new Response('Created product id ' . $product->getId());
    }

    public function showAction($id) {
        $product = $this->getDoctrine()
                ->getRepository('AcmeStoreBundle:Product')
                ->find($id);
        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id ' . $id
            );
        }
    }

    public function updateAction($id) {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);
        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id ' . $id
            );
        }
        $product->setName('New product name!');
        $em->flush();
        return $this->redirect($this->generateUrl('homepage'));
    }

    public function createProductAction() {
        $category = new Category();
        $category->setName('Main Products');
        $product = new Product();
        $product->setName('Foo');
        $product->setPrice(19.99);
// relate this product to the category
        $product->setCategory($category);
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();
        return new Response(
                'Created product id: ' . $product->getId()
                . ' and category id: ' . $category->getId()
        );
    }

}
