<?php

namespace BankiruSchool\Routing\Tasks;

use BankiruSchool\Routing\Common\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class SomeController extends AbstractController
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(Request $request)
    {
        return $this->action($request);
    }
}