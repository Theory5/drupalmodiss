<?php
/**
 * @file
 * Contains \Drupal\selfscan\Controller\HelloController.
 */

namespace Drupal\selfscan\Controller;

use Drupal\Core\Controller\ControllerBase;

class selfscan extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
    );
  }
}
?>
