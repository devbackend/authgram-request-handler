<?php

namespace AuthGramRequestHandler\objects;

use AuthGramRequestHandler\wrappers\User;

/**
 * @inheritdoc
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
class AuthgramUser extends AbstractObject implements User {
	/** @var string Identifier of user in UUID format */
	protected $uuid;

	/** @var string User nickname */
	protected $username;

	/** @var string Name of user */
	protected $firstName;

	/** @var string Surname of user */
	protected $lastName;

	/** @var string Profile photo url of user, if exists */
	protected $profilePhotoUrl;

	/**
	 * @inheritdoc
	 */
	public function getUuid(): string {
		return $this->uuid;
	}

	/**
	 * @inheritdoc
	 */
	public function getProfilePhotoUrl(): string {
		return $this->profilePhotoUrl;
	}

	/**
	 * @inheritdoc
	 */
	public function getLastName(): string {
		return $this->lastName;
	}

	/**
	 * @inheritdoc
	 */
	public function getFirstName(): string {
		return $this->firstName;
	}

	/**
	 * @inheritdoc
	 */
	public function getUsername(): string {
		return $this->username;
	}
}