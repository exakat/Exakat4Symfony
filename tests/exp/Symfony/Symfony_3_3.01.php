<?php

$expected     = array('Symfony\Component\VarExporter\Exception\NotInstantiableTypeException',
                       'Symfony\Component\Messenger\Transport\Enhancers\StopWhenMemoryUsageIsExceededReceiver( )',
                     );

$expected_not = array('NotSymfony\Component\Messenger\Transport\Enhancers\StopWhenMemoryUsageIsExceededReceiver( )',
                     );

?>