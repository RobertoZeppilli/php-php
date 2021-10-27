<!-- realizza due semplici classi PHP di esempio 
legate da un rapporto di ereditarietà -->

<?php

class Person
{
    private $name;
    private $age;
    private $id_card;

    function __construct($name, $age, $id_card)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id_card = $id_card;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setId($id_card)
    {
        $this->id_card = $id_card;
    }

    public function getId()
    {
        return $this->id_card;
    }
}

class Student extends Person
{
    private $study_class;

    function __construct($name = "", $age = 0, $id_card = 0, $study_class)
    {
        parent::__construct($name, $age, $id_card);

        $this->study_class = $study_class;
    }

    public function setStudyClass($study_class)
    {
        $this->study_class = $study_class;
    }

    public function getStudyClass()
    {
        return $this->study_class;
    }
}


$bioStudent = new Student("Andrea", 24, 54545454, 'Medicina');
echo $bioStudent->getStudyClass() . '<br>';
echo $bioStudent->getName() . '<br>';
echo $bioStudent->getAge() . '<br>';
echo $bioStudent->getId() . '<br>';

?>