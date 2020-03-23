<?php

namespace MyNamespace;

echo __LINE__;
echo "\n==========\n";

echo __FILE__;
echo "\n==========\n";

echo __DIR__;
echo "\n==========\n";

function myFunction()
{
    echo __FUNCTION__;
}

myFunction();
echo "\n==========\n";

Class MyClass
{

    public function __construct()
    {
        echo __CLASS__;
        echo "\n";
        echo __METHOD__;
    }

}

new MyClass();
echo "\n==========\n";

trait MyTrait
{

    public function myMethod()
    {
        echo __CLASS__;
        echo "\n";
        echo __TRAIT__;
        echo "\n";
        echo __METHOD__;
    }

}

class MyTraitUsage
{

    use MyTrait;
}

$obj = new MyTraitUsage();
$obj->myMethod();
echo "\n==========\n";

echo __NAMESPACE__;