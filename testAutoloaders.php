<?php
class Autoloader1
{
    public static function autoload ($class)
    {
        var_dump("Loading {$class} from " . __CLASS__);

        spl_autoload_register(["Autoloader2", "autoload"]);
    }
}
class Autoloader2
{
    public static function autoload ($class)
    {
        var_dump("Loading {$class} from " . __CLASS__);exit;
    }
}

spl_autoload_register(["Autoloader1", "autoload"]);

$r = new Foo();
