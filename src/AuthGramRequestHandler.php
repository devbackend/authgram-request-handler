<?php
namespace Devbackend\AuthGramRequestHandler;

use Devbackend\AuthGramRequestHandler\exceptions\AuthgramRequestHandlerException;
use Devbackend\AuthGramRequestHandler\objects\AuthgramRequest;
use Devbackend\AuthGramRequestHandler\wrappers\AuthRequest;

/**
 * Handler of AuthGramBot authorise request.
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
class AuthGramRequestHandler {
	/** @var string Application token */
	protected $token;

	/** @var AuthRequest Authorise request instance */
	protected $request;

	/**
	 * @param string $token Application token
	 *
	 * @throws \Devbackend\AuthGramRequestHandler\exceptions\AuthgramRequestHandlerException
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function __construct($token) {
		$this->token = $token;

		$request = @file_get_contents('php://input');
		if (false === $request || '' === $request) {
			throw new AuthgramRequestHandlerException('Error at getting AuthGramBot request');
		}

		$request = @json_decode($request, true);

		$this->request = new AuthgramRequest($request);
	}

	/**
	 * Check that token from request equal to token of current application.
	 *
	 * @return bool
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function isValidToken() {
		return (null !== $this->request && $this->token === $this->request->getToken());
	}

	/**
	 * Getter for application token
	 *
	 * @return string
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Getter for AuthGramBot request data.
	 *
	 * @return AuthRequest
	 *
	 * @author Кривонос Иван <devbackend@yandex.ru>
	 */
	public function getRequest() {
		return $this->request;
	}
}