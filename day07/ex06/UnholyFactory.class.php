<?php

class UnholyFactory {

    private $fighters = array();
    public function absorb($obj)
    {
        if ($obj instanceof Fighter)
        {
            if(!in_array($obj, $this->fighters))
            {
                if($obj != null)
                    $this->fighters[] = $obj;
                echo "(Factory absorbed a fighter of type ".get_class($obj) .")". PHP_EOL;
            }
            else
                echo "(Factory already absorbed a fighter of type ".get_class($obj) .")". PHP_EOL;
        }
        else
            echo "(Factory can't absorb this, it's not a fighter)". PHP_EOL;
    }
    public function fabricate($rf)
    {
        foreach($this->fighters as $elm)
        {
            if ($elm->type == $rf)
            {
                echo "(Factory fabricates a fighter of type ".$rf.")". PHP_EOL;
                return $elm;
            }
        }
        echo "(Factory hasn't absorbed any fighter of type llama)". PHP_EOL;
                return null;
    }

}

?>