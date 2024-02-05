<?php

// class MyClass
// {
//     private readonly type propertyName;
// }

//------------------------------

// class MyClass
// {
//     public function __construct(private readonly type propertyName)
//     {
//     }
// }

//-------------------------------

class User
{
    public readonly string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

