<?php

namespace Devbackend\AuthGramRequestHandler\objects;

use Devbackend\AuthGramRequestHandler\wrappers\AuthRequest;
use Devbackend\AuthGramRequestHandler\wrappers\User;

/**
 * @inheritdoc
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
class AuthgramRequest extends AbstractObject implements AuthRequest {
	/** @var string */
	protected $authKey;

	/** @var string */
	protected $token;

	/** @var User */
	protected $user;

	/**
	 * @inheritdoc
	 *
	 * @author Кривонос Иван <devbackend@yandex.ru>
	 */
	public function __construct(array $instance) {
		parent::__construct($instance);

		$this->user = new AuthgramUser($instance['user']);
	}

	/**
	 * @inheritdoc
	 */
	public function getToken(): string {
		return $this->token;
	}

	/**
	 * @inheritdoc
	 */
	public function getAuthKey(): string {
		return $this->authKey;
	}

	/**
	 * @inheritdoc
	 */
	public function getUser(): User {
		return $this->user;
	}
}