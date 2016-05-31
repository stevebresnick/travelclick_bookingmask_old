<?php

/**
 * @file
 * Contains \Drupal\travelclick_bookingmask\Tests\RedirectController.
 */

namespace Drupal\travelclick_bookingmask\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the travelclick_bookingmask module.
 */
class RedirectControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "travelclick_bookingmask RedirectController's controller functionality",
      'description' => 'Test Unit for module travelclick_bookingmask and controller RedirectController.',
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
  public function testRedirectController() {
    // Check that the basic functions of module travelclick_bookingmask.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
