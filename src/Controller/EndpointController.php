<?php

/**
 * @file
 * Contains \Drupal\travelclick_bookingmask\Controller\EndpointController.
 */

namespace Drupal\travelclick_bookingmask\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\travelclick_bookingmask\Form\ConfigForm;

/**
 * Class EndpointController.
 *
 * @package Drupal\travelclick_bookingmask\Controller
 */
class EndpointController extends ControllerBase {



  /**
   * Buildurl.
   *
   * @return string
   *   Return Hello string.
   */
  public function buildUrl($endpointurl, $hotelid, $datein, $dateout) {

    //Convert dates to the correct m/d/Y format
    $checkin = date('m/d/Y', strtotime($datein));
    $checkout = date('m/d/Y', strtotime($dateout));

    $hotel = $hotelid;
    $endpoint = $endpointurl;

    return $endpoint . '&hotelid=' . $hotel . '&datein=' .$checkin . '&dateout=' .$checkout;

  }

}
