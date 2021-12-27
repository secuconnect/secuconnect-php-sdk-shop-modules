<?php
/**
 * SmartDevicesApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Secuconnect API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\SmartDevicesDTO;
use Secuconnect\Client\Model\SmartDevicesList;
use Secuconnect\Client\Model\SmartDevicesProductModel;

/**
 * SmartDevicesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Secuconnect\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartDevicesApiTest extends TestCase
{
    /**
     * @var SmartDevicesApi
     */
    private static $api;

    /**
     * @var SecuconnectObjects
     */
    private static $instance;

    /**
     * @var SmartDevicesList
     */
    private static $smartDevicesList;

    /**
     * @var SmartDevicesDTO
     */
    private static $smartDevicesDTO;

    /**
     * @var SmartDevicesProductModel
     */
    private static $smartDevicesProductModel;

    /**
     * Setup before running any test cases
     * @throws ApiException
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new SmartDevicesApi();
    }

    /**
     * Test case for getAll
     *
     * GET Smart/Devices.
     *
     * @throws ApiException
     */
    public function testGetAll()
    {
        try {
            self::$smartDevicesList = self::$api->getAll(
                null,
                null,
                null,
                ['online' => true],
                null
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$smartDevicesList);
        $this->assertInstanceOf(SmartDevicesList::class, self::$smartDevicesList);
        $this->assertInternalType('int', self::$smartDevicesList->getCount());

        foreach (self::$smartDevicesList->getData() as $smartDevice) {
            $this->assertInstanceOf(SmartDevicesProductModel::class, $smartDevice);
            $this->assertEquals('smart.devices', $smartDevice->getObject());
            $this->assertNotEmpty($smartDevice->getId());
            $this->assertNotEmpty($smartDevice->getMerchant());
            $this->assertNotEmpty($smartDevice->getMerchant()->getId());
            $this->assertNotEmpty($smartDevice->getStore());
            $this->assertNotEmpty($smartDevice->getStore()->getId());
            $this->assertNotEmpty($smartDevice->getVendor());
            $this->assertNotEmpty($smartDevice->getVendorUid());
            $this->assertNotEmpty($smartDevice->getType());
            $this->assertNotEmpty($smartDevice->getCreated());
        }
    }

    /**
     * Test case for getOne
     *
     * GET Smart/Devices/{id}.
     *
     * @depends testGetAll
     *
     * @throws ApiException
     */
    public function testGetOne()
    {
        try {
            $response = self::$api->getOne(self::$smartDevicesList->getData()[0]->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(SmartDevicesProductModel::class, $response);

        $this->assertEquals('smart.devices', $response->getObject());
        $this->assertNotEmpty($response->getId());
        $this->assertNotEmpty($response->getMerchant());
        $this->assertNotEmpty($response->getMerchant()->getId());
        $this->assertNotEmpty($response->getStore());
        $this->assertNotEmpty($response->getStore()->getId());
        $this->assertNotEmpty($response->getVendor());
        $this->assertNotEmpty($response->getVendorUid());
        $this->assertNotEmpty($response->getType());
        $this->assertNotEmpty($response->getCreated());
    }

    /**
     * Test case for getRouting
     *
     * GET Smart/Devices/{smartDeviceId}/routing/type/{type}.
     *
     * @depends testGetAll
     *
     * @throws ApiException
     */
    public function testGetRouting()
    {
        $this->markTestIncomplete('Needs to be fixed.');

        try {
            $smartDevice = self::$api->getRouting(self::$smartDevicesList->getData()[0]->getId(), self::$smartDevicesList->getData()[0]->getType());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        // print_r($response);
        $this->assertInstanceOf(SmartDevicesProductModel::class, $smartDevice);
        $this->assertEquals('smart.devices', $smartDevice->getObject());
        $this->assertNotEmpty($smartDevice->getId());
        $this->assertNotEmpty($smartDevice->getMerchant());
        $this->assertNotEmpty($smartDevice->getMerchant()->getId());
        $this->assertNotEmpty($smartDevice->getStore());
        $this->assertNotEmpty($smartDevice->getStore()->getId());
        $this->assertNotEmpty($smartDevice->getVendor());
        $this->assertNotEmpty($smartDevice->getVendorUid());
        $this->assertNotEmpty($smartDevice->getType());
        $this->assertNotEmpty($smartDevice->getCreated());
    }

    /**
     * Test case for addDevice
     *
     * POST Smart/Devices.
     *
     * @depends testGetAll
     *
     * @throws ApiException
     */
    public function testAddDevice()
    {
        $this->markTestIncomplete('Needs to be fixed.');

        self::$smartDevicesDTO = new SmartDevicesDTO();
        self::$smartDevicesDTO->setMerchant(self::$smartDevicesList->getData()[0]->getMerchant()->getId());
        self::$smartDevicesDTO->setStore(self::$smartDevicesList->getData()[0]->getStore()->getId());
        self::$smartDevicesDTO->setVendor("shopware");
        self::$smartDevicesDTO->setVendorUid(rand(100000000, 999999999)); // FIXME: in real life this should be a unique UId
        self::$smartDevicesDTO->setType("cashier");

        try {
            self::$smartDevicesProductModel = self::$api->addDevice(self::$smartDevicesDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$smartDevicesProductModel);
        $this->assertInstanceOf(SmartDevicesProductModel::class, self::$smartDevicesProductModel);

        $this->assertEquals('smart.devices', self::$smartDevicesProductModel->getObject());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getMerchant());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getMerchant()->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getStore());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getStore()->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getVendor());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getVendorUid());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getType());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getCreated());
    }

    /**
     * Test case for updateDevice
     *
     * PUT Smart/Devices/{id}.
     *
     * @depends testGetAll
     * @depends testAddDevice
     *
     * @throws ApiException
     */
    public function testUpdateDevice()
    {
        self::$smartDevicesDTO->setVendor("shopware");

        try {
            self::$smartDevicesProductModel = self::$api->updateDevice(self::$smartDevicesProductModel->getId(), self::$smartDevicesDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$smartDevicesProductModel);
        $this->assertInstanceOf(SmartDevicesProductModel::class, self::$smartDevicesProductModel);

        $this->assertEquals('smart.devices', self::$smartDevicesProductModel->getObject());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getMerchant());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getMerchant()->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getStore());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getStore()->getId());
        $this->assertEquals("shopware", self::$smartDevicesProductModel->getVendor());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getVendorUid());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getType());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getCreated());
    }
}
