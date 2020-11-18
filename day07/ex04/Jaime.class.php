<?php

class Jaime{
    public function sleepWith($prs) {
        if ($prs instanceof Tyrion)
            print("Not even if I'm drunk !" . PHP_EOL);
        if ($prs instanceof Sansa)
            print("Let's do this." . PHP_EOL);
        if ($prs instanceof Cersei)
            print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
    }
}
?>