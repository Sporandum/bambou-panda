<?php

/**
 * dump : Debug Function
 *
 * @param  mixed $var
 *
 * @return void
 */
function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * title
 *
 * @return string the title of the page
 */
function title()
{
    foreach (ROUTES as $request => $page) {

        if ($_SERVER['REQUEST_URI'] == $request) {
            return $page[1];
        }
    }
}

/**
 * showPage
 *
 * @return void|string the page to include in index.php
 */
function getPage()
{
    $route = null;
    if (empty($_GET)) {
        foreach (ROUTES as $request => $page) {
            if ($_SERVER['REQUEST_URI'] == $request) {
                $route = $page[0];
            }
        }
    } else {
        $route = 'product.php';
    }

    if (!empty($route)) {
        return $route;
    } else {
        header("HTTP/1.0 404 Not Found");
        header('Location:/404');
    }
}

/**
 * breadcrumb
 *
 * @return string the link to the current page in breadcrumb
 */
function breadcrumb()
{
    foreach (ROUTES as $request => $page) {

        if ($_SERVER['REQUEST_URI'] == $request) {
            return '<a href="' . $request . '">' . $page[1] . '</a>';
        }
    }
}

/**
 * message
 *
 * @return string return alert message il existe
 */
function message() {
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
        return $message;
    }
}