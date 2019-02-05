<?php
namespace App\Tests\Factory;

use App\Factory\DataFactory;
use App\Model\Address;
use App\Model\PropertiesResponse;
use App\Model\PropertyResponse;
use App\Model\StreetResponse;
use App\Model\StreetsResponse;

use PHPUnit\Framework\TestCase;

class DataFactoryTest extends TestCase 
{

    public function testCreateStreetsExpectingValidResponse() {
       
        //Arrange
        $dataFactory = new DataFactory();

        $expectedResult = $this->createValidStreets();

        //Act 
        $result = $dataFactory->createStreets('meruscourt');

        //Assert
        $this->assertEquals($expectedResult, json_encode($result));
    }

    public function testCreateStreetsExpectingEmpytyResponse() {
       
        //Arrange
        $dataFactory = new DataFactory();

        $expectedResult = $this->createEmptyStreets();

        //Act 
        $result = $dataFactory->createStreets('InvalidSearchTerm');

        //Assert
        $this->assertEquals($expectedResult, json_encode($result));
    }

    public function testCreatePropertiesExpectingValidResponse() {
       
        //Arrange
        $dataFactory = new DataFactory();

        $expectedResult = $this->createValidProperties();

        //Act 
        $result = $dataFactory->createProperties('LE191RJ');

        //Assert
        $this->assertEquals($expectedResult, json_encode($result));
    }

    public function testCreatePropertiesExpectingEmptyResponse() {
       
        //Arrange
        $dataFactory = new DataFactory();

        $expectedResult = $this->createEmptyProperties();

        //Act 
        $result = $dataFactory->createProperties('InvalidPostCode');

        //Assert
        $this->assertEquals($expectedResult, json_encode($result));
    }

    public function testCreateStreetExpectingValidResponse() {
       
        //Arrange
        $dataFactory = new DataFactory();

        $expectedResult = $this->createValidStreet();

        //Act 
        $result = $dataFactory->createStreet('10001228376');

        //Assert
        $this->assertEquals($expectedResult, json_encode($result));
    }

    public function testCreateStreetExpectingNullResponse() {
       
        //Arrange
        $dataFactory = new DataFactory();

        $expectedResult = null;

        //Act 
        $result = $dataFactory->createStreet('INVALIDSTREET');

        //Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testCreatePropertyExpectingValidResponse() {
       
        //Arrange
        $dataFactory = new DataFactory();

        $expectedResult = $this->createValidProperty();

        //Act 
        $result = $dataFactory->createProperty('10001228376');

        //Assert
        $this->assertEquals($expectedResult, json_encode($result));
    }

    public function testCreatePropertyExpectingNullResponse() {
       
        //Arrange
        $dataFactory = new DataFactory();

        $expectedResult = null;

        //Act 
        $result = $dataFactory->createProperty('INVALIDPROPERTY');

        //Assert
        $this->assertEquals($expectedResult, $result);
    }

    private function createValidStreets()
    {
        return '{"streets":[{"identifier":"10001228376","paon":null,"saon":null,"street_name":"MERUS COURT","locality":"MERIDIAN BUSINESS PARK","town":"BRAUNSTONE TOWN","post_town":null,"post_code":null,"easting":null,"northing":null,"uprn":null,"usrn":"2802454","logical_status":null},{"identifier":"45671258378","paon":null,"saon":null,"street_name":"MERUS COURT","locality":"MERIDIAN BUSINESS PARK","town":"BRAUNSTONE TOWN","post_town":null,"post_code":null,"easting":null,"northing":null,"uprn":null,"usrn":"3937452","logical_status":null}]}';
    }

    private function createEmptyStreets()
    {
        return '{"streets":[]}';
    }
   
    private function createValidProperties()
    {
        return '{"properties":[{"identifier":"10001228376","paon":"1 UNIVERSE HOUSE","saon":null,"street_name":"MERUS COURT","locality":"MERIDIAN BUSINESS PARK","town":"BRAUNSTONE TOWN","post_town":null,"post_code":"LE19 1RJ","easting":"454801","northing":"302081","uprn":"10001228376","usrn":"2802454","logical_status":null},{"identifier":"45671258378","paon":"2 UNIVERSE HOUSE","saon":null,"street_name":"MERUS COURT","locality":"MERIDIAN BUSINESS PARK","town":"BRAUNSTONE TOWN","post_town":null,"post_code":"LE19 1RJ","easting":"454801","northing":"302081","uprn":"45671258378","usrn":"2935454","logical_status":null}]}';
    }
  
    private function createEmptyProperties()
    {
        return '{"properties":[]}';
    }

    private function createValidStreet()
    {
        return '{"street":{"identifier":"10001228376","paon":null,"saon":null,"street_name":"MERUS COURT","locality":"MERIDIAN BUSINESS PARK","town":"BRAUNSTONE TOWN","post_town":null,"post_code":null,"easting":null,"northing":null,"uprn":null,"usrn":"2802454","logical_status":null}}';
    }

    private function createValidProperty()
    {
        return '{"property":{"identifier":"10001228376","paon":"1 UNIVERSE HOUSE","saon":null,"street_name":"MERUS COURT","locality":"MERIDIAN BUSINESS PARK","town":"BRAUNSTONE TOWN","post_town":null,"post_code":"LE19 1RJ","easting":"454801","northing":"302081","uprn":"10001228376","usrn":"2802454","logical_status":null}}';
    }
}