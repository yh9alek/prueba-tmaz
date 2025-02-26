<?php

class A {
    public static function other() {
        static::foo();
    }

}