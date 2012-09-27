<?php

namespace spec\L3l0\BeerArchiveBundle\Controller;


class DefaultController extends \spec\ControllerSpecification
{
    function it_should_respond_for_login_action_call()
    {
        $response = $this->object->loginAction();
        $response->shouldNotBe(null);
        $response->getStatusCode()->shouldReturn(200);
    }
}