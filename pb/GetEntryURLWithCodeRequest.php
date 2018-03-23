<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sso/v1/identity_provider.proto

namespace Sso\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>sso.v1.GetEntryURLWithCodeRequest</code>
 */
class GetEntryURLWithCodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The service provider ID.    
     * </pre>
     *
     * <code>string service_provider_id = 1;</code>
     */
    private $service_provider_id = '';
    /**
     * <pre>
     * The session ID the identity provider wants to pass along to the service providers.
     * </pre>
     *
     * <code>string session_id = 2;</code>
     */
    private $session_id = '';
    /**
     * <pre>
     * The user ID.
     * </pre>
     *
     * <code>string user_id = 3;</code>
     */
    private $user_id = '';
    /**
     * <pre>
     * The user's email.
     * </pre>
     *
     * <code>string email = 4;</code>
     */
    private $email = '';
    /**
     * <pre>
     * The service context needed to help determine which identity provider to use.
     * </pre>
     *
     * <code>.sso.v1.ServiceContext context = 5;</code>
     */
    private $context = null;
    /**
     * <pre>
     * The next URL to send the user to, once the code exchange is complete on the entry URL.
     * </pre>
     *
     * <code>string next_url = 6;</code>
     */
    private $next_url = '';

    public function __construct() {
        \GPBMetadata\Sso\V1\IdentityProvider::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The service provider ID.    
     * </pre>
     *
     * <code>string service_provider_id = 1;</code>
     */
    public function getServiceProviderId()
    {
        return $this->service_provider_id;
    }

    /**
     * <pre>
     * The service provider ID.    
     * </pre>
     *
     * <code>string service_provider_id = 1;</code>
     */
    public function setServiceProviderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_provider_id = $var;
    }

    /**
     * <pre>
     * The session ID the identity provider wants to pass along to the service providers.
     * </pre>
     *
     * <code>string session_id = 2;</code>
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * <pre>
     * The session ID the identity provider wants to pass along to the service providers.
     * </pre>
     *
     * <code>string session_id = 2;</code>
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;
    }

    /**
     * <pre>
     * The user ID.
     * </pre>
     *
     * <code>string user_id = 3;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <pre>
     * The user ID.
     * </pre>
     *
     * <code>string user_id = 3;</code>
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;
    }

    /**
     * <pre>
     * The user's email.
     * </pre>
     *
     * <code>string email = 4;</code>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <pre>
     * The user's email.
     * </pre>
     *
     * <code>string email = 4;</code>
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;
    }

    /**
     * <pre>
     * The service context needed to help determine which identity provider to use.
     * </pre>
     *
     * <code>.sso.v1.ServiceContext context = 5;</code>
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * <pre>
     * The service context needed to help determine which identity provider to use.
     * </pre>
     *
     * <code>.sso.v1.ServiceContext context = 5;</code>
     */
    public function setContext(&$var)
    {
        GPBUtil::checkMessage($var, \Sso\V1\ServiceContext::class);
        $this->context = $var;
    }

    /**
     * <pre>
     * The next URL to send the user to, once the code exchange is complete on the entry URL.
     * </pre>
     *
     * <code>string next_url = 6;</code>
     */
    public function getNextUrl()
    {
        return $this->next_url;
    }

    /**
     * <pre>
     * The next URL to send the user to, once the code exchange is complete on the entry URL.
     * </pre>
     *
     * <code>string next_url = 6;</code>
     */
    public function setNextUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_url = $var;
    }

}
