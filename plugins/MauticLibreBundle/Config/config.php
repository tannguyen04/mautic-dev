<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return [
  'name'        => 'Mautic Libre',
  'description' => 'Enables integrations with Libre',
  'version'     => '1.0',
  'author'      => 'Tan Nguyen',
  'services' => [
    'events' => [
      'mautic_libre.email.formbundle.subscriber' => [
        'class' => 'MauticPlugin\MauticLibreBundle\EventListener\FormSubscriber',
      ],
    ],
    'forms' => [
      'mautic_libre.form.type.example_form' => [
        'class'     => 'MauticPlugin\MauticLibreBundle\Form\Type\ExampleForm',
        'arguments' => 'mautic.factory',
        'alias'     => 'example_form',
      ],
    ]
  ]
];
