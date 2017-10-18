<?php

namespace Calendar\Controller;

use Calendar\Model\LeapYear;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LeapYearController
{
    /**
     * @param Request $request
     * @param int|null $year
     * @return Response
     */
    public function indexAction(Request $request, int $year = null): Response
    {
        $leapYear = new LeapYear();
        if ($leapYear->isLeapYear($year)) {
            return new Response('Yep, this is a leap year!');
        }
        return new Response('Nope, this is not a leap year');
    }
}
