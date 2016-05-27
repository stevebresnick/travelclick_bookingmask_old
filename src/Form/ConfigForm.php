<?php

/**
 * @file
 * Contains \Drupal\travelclick_bookingmask\Form\ConfigForm.
 */

namespace Drupal\travelclick_bookingmask\Form;

use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ConfigForm.
 *
 * @package Drupal\travelclick_bookingmask\Form
 */
class ConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {

    return [
      'travelclick_bookingmask.ihotelier'
    ];

  }


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('travelclick_bookingmask.ihotelier');
    $form['hotelid'] = array(
      '#type' => 'number',
      '#title' => $this->t('Hotel ID'),
      '#description' => $this->t('Unique Hotel ID'),
      '#default_value' => $config->get('hotelid'),
    );
    $form['url_endpoint'] = array(
      '#type' => 'url',
      '#title' => $this->t('URL Endpoint'),
      '#description' => $this->t('Endpoint URL for the ihotelier booking mask engine'),
      '#default_value' => $config->get('endpointurl'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $values = $form_state->getValues();
    $this->config('travelclick_bookingmask.ihotelier')->set('hotelid', $values['hotelid'])->save();
    $this->config('travelclick_bookingmask.ihotelier')->set('endpointurl', $values['url_endpoint'])->save();
  }

}
