<?php

trait Loggable {
    public function log($message) {
        echo "Logging: $message\n";
    }
}

class User {
    use Loggable;

    private string $username;

    public function __construct(string $username) {
        $this->username = $username;
    }

    public function getUsername(): string {
        return $this->username;
    }
}

class Product {
    use Loggable;

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}


$user = new User("Dilshan");
$user->log("User logged in: " . $user->getUsername());

$product = new Product("Smartphone");
$product->log("Product added: " . $product->getName());




