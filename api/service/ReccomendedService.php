<?php

require_once __DIR__ . '/../business/impl/ReccomendedBoIMPL.php';
require_once __DIR__ . '/../core/ReccomendedDTO.php';

$recomended = new ReccomendedBoIMPL();
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":
        $operation = $_POST["operation"];
        switch ($operation) {
            case "add":
                ob_start();
                ob_end_clean();

                $productid = $_POST["productid"];
                $status = $_POST["status"];
                echo $isadded = $recomended->addReccomended(new ReccomendedDTO($productid, $status));
                break;
        }
        break;
}
