<?php

require_once 'Exception.php';

/**
 * This class is an entrance for building an application. It is entirely
 * static and gives you access to building new objects, starting the 
 * application, and basic CSRF protection.
 * 
 * @author vmc <vmc@leftnode.com>
 */
class Jolt {
	private static $router = NULL;
	private static $dispatcher = NULL;
	private static $client = NULL;
	
	private $config = array();
	
	public static function attachRouter(Jolt_Router $router) {
		if ( 0 === $router->getRouteCount() ) {
			throw new Jolt_Exception('jolt_router_empty');
		}
		
		self::$router = $router;
	}
	
	public static function attachDispatcher(Jolt_Dispatcher $dispatcher) {
		self::$dispatcher = $dispatcher;
	}
	
	public static function attachClient(Jolt_Client $client) {
		self::$client = $client;
	}
	
	
	
	public static function buildJoltObject($object) {
		
	}
	
	
	
	public static function execute() {
		
	}

	public static function setApplicationConfig(array $config) {
		
	}
	
	/*
	public static function startSession() {
		
	}
	*/
}