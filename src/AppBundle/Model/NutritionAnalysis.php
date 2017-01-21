<?php

namespace AppBundle\Model;

class NutritionAnalysis {

    /** @var string */
    private $ingredient;

    /** @var string */
    private $numberOfServings;

    /** @var string */
    private $recipe;

    /**
     * @return string
     */
    public function getIngredient() {
        return $this->ingredient;
    }

    /**
     * @param string $ingredient
     * @return NutritionAnalysis
     */
    public function setIngredient($ingredient) {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberOfServings() {
        return $this->numberOfServings;
    }

    /**
     * @param string $numberOfServings
     * @return NutritionAnalysis
     */
    public function setNumberOfServings($numberOfServings) {
        $this->numberOfServings = $numberOfServings;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipe() {
        return $this->recipe;
    }

    /**
     * @param string $recipe
     * @return NutritionAnalysis
     */
    public function setRecipe($recipe) {
        $this->recipe = $recipe;
        return $this;
    }
}