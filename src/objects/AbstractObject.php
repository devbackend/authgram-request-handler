<?php

namespace AuthGramRequestHandler\objects;

use AuthGramRequestHandler\exceptions\UndefinedPropertyException;

/**
 * Abstract class for authgram object.
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
abstract class AbstractObject {
	/**
	 * @param array $instance
	 *
	 * @throws UndefinedPropertyException
	 *
	 * @author Ivan Krivonos <devbackend@yandex.ru>
	 */
	public function __construct($instance) {
		foreach ($instance as $property => $value) {
			if (false === property_exists($this, $property)) {
				throw new UndefinedPropertyException(get_class($this), $property);
			}

			$this->$property = $value;
		}
	}
}