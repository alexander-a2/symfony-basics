<?php

namespace AlexanderA2\SymfonyBasics\Controller;

use AlexanderA2\SymfonyBasics\Exception\ConfigException;
use AlexanderA2\SymfonyBasics\Helper\ControllerHelper;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BasicsController extends AbstractController
{
    #[Route('set-locale/{locale}', name: 'set_locale')]
    public function setLocaleAction(
        EntityManagerInterface $entityManager,
        ControllerHelper       $controllerHelper,
                               $locale,
    ): Response {
        if ($this->getUser() && in_array($locale, $this->getParameter('kernel.enabled_locales'))) {
            $this->getUser()->setLocale($locale);
            $entityManager->flush();
        }

        return $controllerHelper->redirectBack();
    }
}