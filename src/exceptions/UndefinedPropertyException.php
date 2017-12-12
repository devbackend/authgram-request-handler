<?php

namespace AuthGramRequestHandler\exceptions;

use Exception;

/**
 * Exception when property doesn't exists on instance.
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
class UndefinedPropertyException extends Exception {
	public function __construct(string $className, string $property) {
		$message = 'Undefined property: ' . $className . '::' . $property;

		parent::__construct($message);
	}
}