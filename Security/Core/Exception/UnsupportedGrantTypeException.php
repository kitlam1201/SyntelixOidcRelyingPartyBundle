<?php

/*
 * This file is part of the SyntelixOidcRelayingPartyBundle package.
 */

namespace Syntelix\Bundle\OidcRelyingPartyBundle\Security\Core\Exception;

use InvalidArgumentException;

/**
 * UnsupportedGrantTypeException.
 */
class UnsupportedGrantTypeException extends InvalidArgumentException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'Grant type used is not supported';
    }
}
