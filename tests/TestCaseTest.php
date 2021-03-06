<?php

declare(encoding='UTF-8');
namespace JoltTest;

use \Jolt\Configuration,
	\JoltTest\TestCase;

require_once 'Jolt/Configuration.php';

class TestCaseTest extends TestCase {
	
	public function testBuildMockConfiguration_CanSetArrayOfParameters() {
		$cfg1 = new Configuration;
		$cfg1->key2 = 'value2';
		$cfg1->key1 = 'value1';
		
		$cfgArray = array('key1' => 'value1', 'key2' => 'value2');
		$cfg2 = $this->buildMockConfiguration($cfgArray);
		
		foreach ( $cfgArray as $k => $v ) {
			$this->assertEquals($cfg1->$k, $cfg2->$k);
		}
	}
	
	public function testBuildMockAbstractRoute_ReturnsJoltRouteObject() {
		$abstractRoute = $this->buildMockAbstractRoute();
		$this->assertTrue($abstractRoute instanceof \Jolt\Route);
	}
	
	public function testBuildMockNamedRoute_ReturnsJoltRouteNamedObject() {
		$namedRoute = $this->buildMockNamedRoute('GET', '/user', 'User', 'addAction');
		$this->assertTrue($namedRoute instanceof \Jolt\Route\Named);
		$this->assertFalse($namedRoute instanceof \Jolt\Route\Restful);
	}
	
	public function testBuildMockRestfulRoute_ReturnsJoltRouteRestfulObject() {
		$restfulRoute = $this->buildMockRestfulRoute('/user', 'User');
		$this->assertTrue($restfulRoute instanceof \Jolt\Route\Restful);
		$this->assertFalse($restfulRoute instanceof \Jolt\Route\Named);
	}
	
}