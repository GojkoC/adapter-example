<?php


namespace Acme;


class Kindle implements eReaderInterface
{

    public function turnOn()
    {
        var_dump('Turn the Kindle On');
    }

    public function pressNextButton()
    {
        var_dump("Press the next button on the Kindle");
    }
}