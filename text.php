<?php

    class Animal
    {
        public $name = "Animal name";
        public $age = 18;
        public function cry()
        {
            echo "Animal can cry";
            echo "<br>";
        }
    }

    class cat extends Animal
    {
        public $name;
        public $color;
        function __construct($selfname,$color,$parentname,$age)
        {
            $this->name = $selfname;
            $this->color = $color;
            $this->age=$age;
        }
        public function cry()
        {
            echo "cat can cry";
            echo "<br>";
        }
        public function printout()
        {
            self::cry();
            parent::cry();
        }
    }
    $cat = new cat("cat name","red","animalname",19);
    $cat->printout();
    echo "this.\$name is $cat->name";
    echo "<br>";
    echo "this.\$age is $cat->age";
    echo "<br>";
    echo "this.\$color is $cat->color";
    echo "<br>";

?>
