<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticLibreBundle\EventListener;

use Mautic\CoreBundle\EventListener\CommonSubscriber;
use Mautic\FormBundle\Event\FormBuilderEvent;
use Mautic\FormBundle\FormEvents;

/**
 * Class FormSubscriber.
 */
class FormSubscriber extends CommonSubscriber {
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::FORM_ON_BUILD => ['onFormBuilder', 0],
        ];
    }

    /**
     * Add a send email actions to available form submit actions.
     *
     * @param FormBuilderEvent $event
     */
    public function onFormBuilder(FormBuilderEvent $event)
    {
        // Add form submit actions
        $action = [
            'group'             => 'Custom',
            'label'             => 'Action submit custom Libre',
            'description'       => 'Example custom action submit',
            'formType'          => 'example_form',
            'formTheme'         => 'MauticEmailBundle:FormTheme\EmailSendList',
            'callback'          => '\MauticPlugin\MauticLibreBundle\Helper\FormSubmitHelper::exampleSubmit',
            'allowCampaignForm' => true,
        ];

        $event->addSubmitAction('mautic_libre.example_action.user', $action);

    }
}
