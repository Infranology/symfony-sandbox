<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Exception;

/**
 * UsernameNotFoundException is thrown if a User cannot be found by its username.
 *
 * @author Fabien Potencier <fabien.potencier@symfony-project.com>
 */
class UsernameNotFoundException extends AuthenticationException
{
}
