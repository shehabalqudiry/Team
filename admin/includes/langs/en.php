<?php

function en($phrase)
{
    static $lang = array(
        "shehab" => "alqudiry",
    );
    return $lang[$phrase];
}
