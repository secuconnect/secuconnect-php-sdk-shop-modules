<?php

namespace Secuconnect\Client\Authentication;

/**
 * Class AuthenticationCredentials
 */
abstract class AuthenticationCredentials
{
    /**
     * @var array<string, mixed>
     */
    protected $credentials;

    /**
     * Getter for credentials field.
     *
     * @return array<string, mixed>
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Setter for credentials field.
     *
     * @param array<string, mixed> $credentials
     * @return void
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Function to get shortcut for specific credentials.
     *
     * @return string
     */
    abstract public function getUniqueKey();
}
