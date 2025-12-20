<?php

namespace Controllers;

use Controllers\Abstract\AbstractController;
use Factory\ManagerFactory;
use model\Manager\AppTimeManager;
use Twig\Environment;

class PublicController extends Abstract\AbstractController
{

    private AppTimeManager $appTimeManager;

    public function __construct(Environment $twig, ManagerFactory $managerFactory)
    {
        parent::__construct($twig, $managerFactory);
        $this->appTimeManager = $this->getManager(AppTimeManager::class);
    }

    public function browse(): void
    {
        global $systemMessage, $sessionRole;
        $currentTime = $this->appTimeManager->getAppTime();
        echo $this->twig->render('public/public.browse.html.twig', [
            'currentTime' => $currentTime,
        ]);
    }
}