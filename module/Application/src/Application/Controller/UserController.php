<?php

namespace Application\Controller;
use Application\Service\UserManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
class UserController extends AbstractActionController
{
	public function listAction()
	{
		/** @var UserManager $userManager */
		$userManager = $this->getServiceLocator()->get('userManager');

		return new ViewModel([
			'users' => $userManager->getList()
		]);
	}

	public function addAction()
	{
		return new ViewModel();
	}
}