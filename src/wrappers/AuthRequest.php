<?php
namespace AuthGramRequestHandler\wrappers;

/**
 * Interface for authorise request
 *
 * @property-read string    $token      Application's token
 * @property-read string    $authKey    User authorise key
 * @property-read User      $user       User data
 *
 * @author Ivan Krivonos <devbackend@yandex.ru>
 */
interface AuthRequest {}