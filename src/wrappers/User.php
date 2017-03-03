<?php
namespace AuthGramRequestHandler\wrappers;

/**
 * Interface for user data.
 *
 * @property-read string $uuid      Identifier of user in UUID format
 * @property-read string $username  User nickname
 * @property-read string $firstName Name of user
 * @property-read string $lastName  Surname of user
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
interface User {}