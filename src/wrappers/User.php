<?php
namespace AuthGramRequestHandler\wrappers;

/**
 * Interface for user data.
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
interface User {
	/**
	 * Return UUID.
	 *
	 * @return string
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getUuid(): string;

	/**
	 * Return profile photo url, if exists.
	 *
	 * @return string
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getProfilePhotoUrl(): string;

	/**
	 * Return last name, if exists.
	 *
	 * @return string
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getLastName(): string;

	/**
	 * Return first name, if exists.
	 *
	 * @return string
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getFirstName(): string;

	/**
	 * Return username, if exists.
	 *
	 * @return string
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getUsername(): string;
}