<?php

class A {

    public static function other() {
        static::foo();
    }

    static function foo() {
        
    }
    
}

echo "Estoy haciendo otra modificación";