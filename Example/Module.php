<?php

namespace Example;


/**
 * The default module configurator
 *
 * @author suleymanmelikoglu
 */
class Module {
    
    /**
     * the implementation of the autoloader provider,
     * returns an array for the AutoloaderFactory
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,

                ),
            ),
        );
    }
    
    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }
}
