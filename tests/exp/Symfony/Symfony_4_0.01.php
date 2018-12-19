<?php

$expected     = array('Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\ValidateWorkflowsPass',
                       'Symfony\Component\HttpFoundation\File\Exception\PartialFileException( )',
                     );

$expected_not = array('NotSymfony\Component\HttpFoundation\File\Exception\PartialFileException( )',
                     );

?>