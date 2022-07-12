<?php
  /**
  * @file
  * Contains \Drupal\wasim\Conroller\WasimFirstController.
  */

  namespace Drupal\wasim\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class WasimFirstController extends ControllerBase {
    public function message() {
      return array(
        '#type' => 'markup',
        '#markup' => t('Wasim is doing a good job. Hope that I get that job at IBM.')
      );
    }
  }