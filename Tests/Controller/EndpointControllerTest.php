<?php

/**
 * @file
 * Contains \Drupal\travelclick_bookingmask\Tests\EndpointController.
 */

namespace Drupal\travelclick_bookingmask\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the travelclick_bookingmask module.
 */
class EndpointControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "travelclick_bookingmask EndpointController's controller functionality",
      'description' => 'Test Unit for module travelclick_bookingmask and controller EndpointController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests travelclick_bookingmask functionality.
   */
  public function testEndpointController() {
    // Check that the basic functions of module travelclick_bookingmask.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
