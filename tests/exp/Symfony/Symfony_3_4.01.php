<?php

$expected     = array('Symfony\Component\Validator\Exception\LogicException',
                       'Symfony\Component\Messenger\Middleware\SendMessageMiddleware( )',
                     );

$expected_not = array('NotSymfony\Component\Messenger\Middleware\SendMessageMiddleware( )',
                     );

?>