<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticLibreBundle\Helper;

use Mautic\CoreBundle\Factory\MauticFactory;
use Mautic\FormBundle\Entity\Action;
use Mautic\LeadBundle\Entity\Lead;

class FormSubmitHelper
{
    /**
     * @param               $tokens
     * @param Action        $action
     * @param MauticFactory $factory
     * @param               $feedback
     */
    public static function exampleSubmit($tokens, Action $action, MauticFactory $factory, $feedback) {
        print_r($tokens);
        print 'Do what ever you want here';
        die;
    }
}
