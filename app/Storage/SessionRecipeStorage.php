<?php

namespace App\Storage;

use App\Models\Recipe;
use App\Storage\Contracts\RecipeStorageInterface;

class SessionRecipeStorage implements RecipeStorageInterface
{
    protected $sessionKey = 'recipes';

    public function __construct()
    {
        if (!isset($_SESSION[$this->sessionKey])) {
            $_SESSION[$this->sessionKey] = [];
        }
    }

    public function all()
    {
        return $_SESSION[$this->sessionKey];
    }

    public function delete($id)
    {
        if (isset($_SESSION[$this->sessionKey][$id])) {
            unset($_SESSION[$this->sessionKey][$id]);
        }
    }

    public function get($id)
    {
        return $_SESSION[$this->sessionKey][$id] ?? null;
    }

    public function store(Recipe $recipe)
    {
        $id = count($_SESSION[$this->sessionKey]) + 1;
        $_SESSION[$this->sessionKey][$id] = $recipe;
        return $id;
    }

    public function update(Recipe $recipe)
    {
        $_SESSION[$this->sessionKey][$recipe->getId()] = $recipe;
    }
}
