<?php
return array(

    'controllers' => array(
        'invokables' => array(
            'Example\Controller\Example' => 'Example\Controller\ExampleController'
        )
    ),
    'router' => array(
        'routes' => array(
            'pouring' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/example[/:action][/:method]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'method'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Example\Controller\Example',
                        'action'     => 'index'
                    ),
                ),
            ),
        ),
    ),
);

