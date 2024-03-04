<?php

namespace App\Storage;

use App\Models\Recipe;
use App\Storage\Contracts\RecipeStorageInterface;
use PDO;

class MySqlDatabaseRecipeStorage implements RecipeStorageInterface
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all()
    {
        $stmt = $this->pdo->query('SELECT * FROM recipes');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM recipes WHERE id = :id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function get($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM recipes WHERE id = :id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function store(Recipe $recipe)
    {
        $stmt = $this->pdo->prepare('INSERT INTO recipes (created_at, name, description, people, preparation_time) VALUES (:created_at, :name, :description, :people, :preparation_time)');
        $stmt->bindValue(':created_at', $recipe->getCreatedAt()->format('Y-m-d H:i:s'));
        $stmt->bindValue(':name', $recipe->getName());
        $stmt->bindValue(':description', $recipe->getDescription());
        $stmt->bindValue(':people', $recipe->getPeople());
        $stmt->bindValue(':preparation_time', $recipe->getPreparationTime());
        $stmt->execute();
    }

    public function update(Recipe $recipe)
    {
        $stmt = $this->pdo->prepare('UPDATE recipes SET created_at = :created_at, name = :name, description = :description, people = :people, preparation_time = :preparation_time WHERE id = :id');
        $stmt->bindValue(':created_at', $recipe->getCreatedAt()->format('Y-m-d H:i:s'));
        $stmt->bindValue(':name', $recipe->getName());
        $stmt->bindValue(':description', $recipe->getDescription());
        $stmt->bindValue(':people', $recipe->getPeople());
        $stmt->bindValue(':preparation_time', $recipe->getPreparationTime());
        $stmt->bindValue(':id', $recipe->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }
}
