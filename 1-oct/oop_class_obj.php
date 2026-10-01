<?php


class Human
{
    public string $myname;
    private string $privtaVar;
    public function __construct(string $myname, string $privtaVar)
    {

        $this->myname = $myname;
        $this->privtaVar = $privtaVar;

    }
    public function nature()
    {
        echo "$this->myname nature is currapation <br>";
    }
    public function Walk()
    {
        echo "$this->myname can walk daily $this->privtaVar ";
    }
}

class Devil extends Human
{
    public function behav()
    {

        echo "$this->myname can destroy her life";
    }
}


$sojib = new Human("sojib", "pri");

$sojib->nature();
$sojib->Walk();

$tis = new Devil("Sumon", "prrr");

$tis->behav();

