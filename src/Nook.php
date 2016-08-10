<?php


namespace Acme;


class Nook implements eReaderInterface
{

    public function turnOn()
    {
        var_dump('Turn the Nook On');
    }

    public function pressNextButton()
    {
        var_dump("Press the next button on the Nook");
    }
}