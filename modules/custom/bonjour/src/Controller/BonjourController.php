<?php

namespace Drupal\bonjour\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class BonjourController extends ControllerBase
{

    /**
     * Returns a simple page.
     *
     * @return array
     *   A simple renderable array.
     */
    public function bonjour()
    {
        return [
            '#markup' => 'Hello, world',
        ];
    }
}
