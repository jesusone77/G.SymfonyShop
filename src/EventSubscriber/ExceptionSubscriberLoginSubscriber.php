<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Event\AuthenticationSuccessEvent;
use Symfony\Component\HttpFoundation\Session\Session;

class ExceptionSubscriberLoginSubscriber implements EventSubscriberInterface
{
    public function onSecurityAuthenticationSuccess(AuthenticationSuccessEvent $event): void
    {
        // ...

        // $session = new Session();
        // $session->start();
        // $session->session_destroy();

    }

    public static function getSubscribedEvents(): array
    {
        return [
            'security.authentication.success' => 'onSecurityAuthenticationSuccess',
        ];
    }
}
