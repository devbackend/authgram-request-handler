<?php
namespace Devbackend\AuthGramRequestHandler\wrappers;

/**
 * Interface for authorise request
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
interface AuthRequest {
	/**
	 * Get token from request.
	 *
	 * @return string
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getToken(): string;

	/**
	 * Get auth key from request.
	 *
	 * @return string
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getAuthKey(): string;

	/**
	 * Get user instance from request.
	 *
	 * @return User
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getUser(): User;
}