<?php

namespace Application\Controller;
use Application\Service\UserManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
	public function indexAction()
	{
		/** @var UserManager $userManager */
		$userManager = $this->getServiceLocator()->get('userManager');

		$data = [
			'users' => $userManager->getList()
		];
//		var_dump($data);
		return new ViewModel($data);
	}

	public function addAction()
	{
		return new ViewModel();
	}
}