<?php 

class Recipe
{
    protected $id;
    protected $created_at;
    protected $name;
    protected $description;
    protected $people;
    protected $preparation_time;

    // les Getters
    public function getId()
    {
        return $this->id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPeople()
    {
        return $this->people;
    }

    public function getPreparationTime()
    {
        return $this->preparation_time;
    }

    // les Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPeople($people)
    {
        $this->people = $people;
    }

    public function setPreparationTime($preparation_time)
    {
        $this->preparation_time = $preparation_time;
    }
}

// Utilisation
$recipe = new Recipe;
$recipe->setCreatedAt(new DateTime());
$recipe->setName('pain chocolat');
$recipe->setDescription('La recette du croissant .');
$recipe->setPeople(4);
$recipe->setPreparationTime(40);

// Pour obtenir les valeurs
echo $recipe->getName();
echo $recipe->getDescription(); 
echo $recipe->getPreparationTime(); 
