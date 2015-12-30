<?php
/**
 * @file
 * Contains \Drupal\cupcake\Controller\CupcakeController.
 */

namespace Drupal\cupcake\Controller;

/**
 * CupcakeController.
 */
class CupcakeController {
  /**
   * Generates an example page.
   */
  public function cupcake() {
      echo "pasa por acá";
    return array(
      '#markup' => t('Hello World!'),
    );
  }      
}