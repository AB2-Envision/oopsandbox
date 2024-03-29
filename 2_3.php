<?php

// Define a class
class User {
    // Proparties (attributes)

    public $name;

    // Methods (functions)

    public function sayHello() {
        return $this->name . ' Says Hello';
    }
}

// Instantiate a user object from a user class
$user1 = new User();
$user1->name = 'Brad';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();

echo '<br>';

// Create a new user
$user2 = new User();
$user2->name = 'Jeff';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();