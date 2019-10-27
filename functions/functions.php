<?php

/**
 * dump : Debug Function
 *
 * @param  mixed
 *
 * @return void
 */
function dump($var)
{
    foreach ($GLOBALS as $var_name => $value) {
        if ($var === $value) {
            echo '<strong>$' . $var_name . ' :</strong>';
            break;
        }
    }
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * title
 *
 * @return string the title of the page
 */
function title(): ?string
{
    foreach (ROUTES as $request => $page) {

        if ($_SERVER['REQUEST_URI'] == $request) {
            return $page[1];
        }
    }
    return '';
}

/**
 * getPage : 
 *
 * @return string the page to show
 */
function getPage(): string
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
        redirect_404();
    }
}

/**
 * redirect_404
 *
 * @return void
 */
function redirect_404()
{
    header("HTTP/1.0 404 Not Found");
    header('Location:/404');
}

/**
 * collection : Extract the collection in url
 *
 * @return string
 */
function collection(): string
{
    $string = $_SERVER['REQUEST_URI'];
    $pattern = '#\/(\w+)(\?.*)?#';
    $replacement = '${1}';
    return preg_replace($pattern, $replacement, $string);
}

/**
 * catalogue : return datas of collection in array
 *
 * @param  string $collection the collection name
 *
 * @return array
 */
function catalogue(string $collection): array
{
    foreach (COL_LIST as $name => $col) {
        if ($name === $collection) {
            return $col;
        }
    }
    redirect_404();
}

/**
 * product
 *
 * @param  mixed $data
 * @param  mixed $req
 *
 * @return array product datas
 */
function product(array $data, array $req): array
{
    foreach ($data as $product) {
        if ($req['ref'] === $product['ref']) {
            return $product;
        }
    }
    return $product = [];
}

/**
 * productUrl
 *
 * @param  mixed $collection
 * @param  mixed $product
 *
 * @return string
 */
function productUrl($collection, $product): string
{
    return $collection . '?product=' . strtolower(str_replace(' ', '_', $product['designation'])) . '&ref=' . $product['ref'];
}

/**
 * breadcrumb
 *
 * @return string <li><a href="link">title</a></li>
 */
function breadcrumb(): string
{
    $breadcrumb = "\n<li><a href='/' >Accueil</a></li>\n";
    
    foreach (ROUTES as $request => $page) {
        if (empty($_GET)) {
            if ($_SERVER['REQUEST_URI'] == $request) {
                $breadcrumb .= '<li><a href="' . $request . '">' . $page[1] . "</a></li>\n";
            }
        } elseif (!empty($_GET)) {
            $collection = '/' . collection();

            if ($collection == $request) {
                $breadcrumb .= '<li><a href="/' . collection() . '">' . $page[1] . "</a></li>\n";
            }
        }
    }
    if (!empty($_GET['product'])) {
        $collection = collection();
        $data = catalogue($collection);
        $product = product($data, $_GET);

        $breadcrumb .= '<li><a href="' . productUrl($collection, $product) . '">' . $product['designation'] . "</a></li>\n";
    }

    return $breadcrumb;
}

/**
 * message return an alert message
 *
 * @return string
 */
function message(): ?string
{
    if (!empty($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
        return $message;
    }
    return '';
}
