<?php

require_once __DIR__.'/../core/ReccomendedDTO.php';
interface RecomendedRepo extends SuperRepo
{
function addReccomended(ReccomendedDTO $DTO):bool;
function updateReccomended(ReccomendedDTO $DTO):bool;
function deleteReccomended($id):bool;
function searchReccomended($id):ReccomendedDTO;
function getAllReccomended():array;

}