<?php


/**
 *  Redirect to a direction
 */
function redirect(string $path): void {
    header("Location: $path");
    die();
}

/**
 *  Debug and die
 */
function dd(mixed $item): void {
    var_dump($item);
    die();
}

/**
 *  Set flash message to the session
 */
function infoMessage(string $message): void {
    session_start();
    $_SESSION["message"] = $message;
}
