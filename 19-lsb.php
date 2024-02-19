<?php

//Problem Before Late Static Binding
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();  // Outputs: A

//Solution with Late Static Binding
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Use static instead of self
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();  // Outputs: B
//-------------------------------------------------------------------

// class ParentClass {
//     protected static string $className = "ParentClass";

//     public static function getClassName(): string {
//         return static::$className;
//     }

//     public static function whoAmI(): string {
//         return "I am " . static::$className;
//     }
// }

// class ChildClass extends ParentClass {
//     protected static string $className = "ChildClass";
// }

// echo ParentClass::getClassName(); // Output: ParentClass
// echo ParentClass::whoAmI(); // Output: I am ParentClass

// echo ChildClass::getClassName(); // Output: ChildClass
// echo ChildClass::whoAmI(); // Output: I am ChildClass

class ParentClass {
    protected static string $className = "ParentClass";

    public static function getClassName(): string {
        return self::$className;
    }

    public static function whoAmI(): string {
        return "I am " . self::$className;
    }
}

class ChildClass extends ParentClass {
    protected static string $className = "ChildClass";
}

echo ParentClass::getClassName(); // Output: ParentClass
echo ParentClass::whoAmI(); // Output: I am ParentClass

echo ChildClass::getClassName(); // Output: ParentClass
echo ChildClass::whoAmI(); // Output: I am ParentClass

