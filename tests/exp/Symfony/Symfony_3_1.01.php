<?php

$expected     = array('Symfony\Component\DependencyInjection\Exception\EnvNotFoundException',
                       'Symfony\Component\DependencyInjection\Compiler\RegisterEnvVarProcessorsPass( )',
                     );

$expected_not = array('NotSymfony\Component\DependencyInjection\Compiler\RegisterEnvVarProcessorsPass( )',
                     );

?>