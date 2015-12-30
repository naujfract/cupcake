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
  public function demo() {
    return array(
      '#markup' => t('Hello World!'),
    );
  }      
}