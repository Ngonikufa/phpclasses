<?php

trait Presidency{

    public function president($position){
        return $position;
    }
}

class Party{
    use Presidency;
}

class National{
    use Presidency;
}

$party = new Party();
echo $party->president('This the party Presideny');

echo '<br>';

$national = new National();
echo $national->president('This is the national President');