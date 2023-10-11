<?php

function redirect(string $path): void {
    header("Location: $path");
    die();
}

function dd(mixed $item): void {
    var_dump($item);
    die();
}

function infoMessage(string $message): void {
    session_start();
    $_SESSION["message"] = $message;
}

function queryStringToArray(): array {
    $querySeparator = "&";
    $queryKeyValueSeparator = "=";
    $inputQuery = $_SERVER['QUERY_STRING'];
    
    $eachQuery = explode($querySeparator, $inputQuery);

    $result = [];

    foreach ($eachQuery as $query) {
        [$key, $value] = explode($queryKeyValueSeparator, $query);
        $result[$key] = $value;
    }

    return $result;
}
