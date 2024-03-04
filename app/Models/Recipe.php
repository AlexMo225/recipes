<?php

namespace App\Models;

use DateTime;

class Recipe {
    protected $id;
    protected $created_at;
    protected $name;
    protected $description;
    protected $people;
    protected $preparation_time;

    // 
    public function setId($id) { $this->id = $id; return $this; }
    public function setCreatedAt(DateTime $createdAt) { $this->created_at = $createdAt; return $this; }
    public function setName($name) { $this->name = $name; return $this; }
    public function setDescription($description) { $this->description = $description; return $this; }
    public function setPeople($people) { $this->people = $people; return $this; }
    public function setPreparationTime($preparationTime) { $this->preparation_time = $preparationTime; return $this; }

    // 
    public function getId() { return $this->id; }
    public function getCreatedAt() { return $this->created_at; }
    public function getName() { return $this->name; }
    public function getDescription() { return $this->description; }
    public function getPeople() { return $this->people; }
    public function getPreparationTime() { return $this->preparation_time; }
}
