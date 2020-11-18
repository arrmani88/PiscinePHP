<?php
abstract class Fighter {
    public $type;
    abstract public function fight($target);
    public function __construct($arg)
    {
        $this->type = $arg;
    }
}

?>