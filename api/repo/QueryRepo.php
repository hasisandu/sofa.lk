<?php

require_once __DIR__.'/SuperRepo.php';

interface QueryRepo extends SuperRepo
{
    function getProductID():int;
}