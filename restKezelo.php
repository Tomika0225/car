<?php

class restKezelo
{
    private $httpVersion = "HTTP/1.1";
    public function sethttpFejlec($statuskod)
    {
        $statusUzenet = $this->gethttpStatusUzenet($statusKod);
        header($this->httpVersion. " ".$statusKod. " ".$statusUzenet);
        header("Content-Type: Application/json; charset=utf-8");
    }

    public function gethttpStatusUzenet($statusKod)
    {
        $httpStatus = array(
            200 = > "OK",
            400 = > "Bad Request",
            200 = > "Not Found",
        );
        return ($httpStatus[$statusKod]);
    }
}
?>