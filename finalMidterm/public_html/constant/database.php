<?php
class a {
    public static $instance;
    public function __construct() {
        self::$instance = $this;
    }

    public static function get() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$a = a::get();
?>
