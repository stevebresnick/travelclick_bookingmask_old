<?php

/**
 * @file
 * Contains \Drupal\travelclick_bookingmask\Controller\EndpointController.
 */

namespace Drupal\travelclick_bookingmask\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\travelclick_bookingmask\Form;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;

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

    $url = $endpointurl . '&hotelid=' . $hotelid . '&datein=' . $checkin . '&dateout=' . $checkout;

    //Stringify the result to pass as URL for redirect upon form submission
    return $url;

  }

  public function ihotelierRedirect($endpointurl, $hotelid, $datein, $dateout) {

    //Redirect to URL upon form submission

    $url = $this->buildUrl($endpointurl, $hotelid, $datein, $dateout);
    $uri = Url::toString($url);

    return new RedirectResponse(Url::fromUri($uri));
  }
}
