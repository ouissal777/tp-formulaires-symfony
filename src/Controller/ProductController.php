<?php
// src/Controller/ProductController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CartType;

class ProductController extends AbstractController
{
    #[Route("/product", name: "app_product")]
    public function index(Request $request): Response
    {
        // Données du produit
        $product = [
            "name" => "Premium Wireless Headphones",
            "price" => 129.99,
            "description" => "Experience superior sound quality with our premium wireless headphones. Features active noise cancellation, 30-hour battery life, and premium comfort padding.",
            "brand" => "AudioTech",
            "color" => "Matte Black",
            "connectivity" => "Bluetooth 5.0",
            "batteryLife" => "30 hours",
            "imageUrl" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=800",
        ];

        // Créer le formulaire
        $form = $this->createForm(CartType::class);
        $form->handleRequest($request);

        // Traitement
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            $this->addFlash("success", sprintf(
                "Added %s item(s) in %s color to cart!",
                $data["quantity"],
                $this->getColorLabel($data["color"])
            ));
            
            return $this->redirectToRoute("app_product");
        }

        return $this->render("product/index.html.twig", [
            "product" => $product,
            "form" => $form->createView(),
        ]);
    }

    private function getColorLabel(string $colorCode): string
    {
        $colors = [
            "black" => "Matte Black",
            "white" => "Pearl White",
            "silver" => "Silver",
        ];
        
        return $colors[$colorCode] ?? $colorCode;
    }
}
