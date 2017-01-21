<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\IngredientAnalysisFormType;
use AppBundle\Model\NutritionAnalysis;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function getNutritionApi() {
        return $this->get('app.nutrition_api');
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        $nutritionAnalysis = new NutritionAnalysis();
        $ingredientAnalysisForm = $this->createForm(IngredientAnalysisFormType::class, $nutritionAnalysis);

        $ingredientAnalysisForm->handleRequest($request);

        if ($ingredientAnalysisForm->isSubmitted() && $ingredientAnalysisForm->isValid()) {
            $ingredient = $nutritionAnalysis->getIngredient();
            $vars = [
                'ingredient' => $ingredient,
                'analysis' => $this->getNutritionApi()->ingredientAnalysis($ingredient)
            ];
            return $this->render('default/result.html.twig', $vars);
        }

        $vars = [
            'ingredientAnalysisForm' => $ingredientAnalysisForm->createView()
        ];
        return $this->render('default/index.html.twig', $vars);
    }
}




