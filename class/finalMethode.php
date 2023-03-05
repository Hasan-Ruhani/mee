<?php
//if you use final methode in function so you do not extends parent class

    class ourClass{
        final function doSomthing(){
            echo "Doing Somthing";
        }
    }

    class myClass extends ourClass{
        // function doSomthing(){
        //     echo "Doing Nothing";
        // }
    }

    $a = new myClass();
    $a -> doSomthing();