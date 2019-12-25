<?php

require_once __DIR__.'/../core/ReccomendedDTO.php';

interface ReccomendedBo
{
    function addReccomended(ReccomendedDTO $dto):bool;
    function updateReccomended(ReccomendedDTO $dto):bool;
    function deleteReccomended($id):bool;
    function searchReccomended($id):ReccomendedDTO;
    function getAllReccomends():array ;
}