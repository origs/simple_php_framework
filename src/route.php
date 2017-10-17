<?php

use Symfony\Component\Routing;
use Calendar\Controller\LeapYearController;

function is_leap_year($year = null)
{
    if (null === $year) {
        $year = date('Y');
    }

    return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
}

$routes = new Routing\RouteCollection();

$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => function ($request) {
        return render_template($request);
    }
)));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => array(new LeapYearController(), 'indexAction'),
)));

return $routes;
