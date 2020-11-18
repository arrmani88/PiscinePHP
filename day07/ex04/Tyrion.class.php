<?php

class Tyrion{
    public function sleepWith($prs) {
        if ($prs instanceof Jaime)
            print("Not even if I'm drunk !" . PHP_EOL);
        if ($prs instanceof Sansa)
            print("Let's do this." . PHP_EOL);
        if ($prs instanceof Cersei)
            print("Not even if I'm drunk !" . PHP_EOL);
    }
}
?>