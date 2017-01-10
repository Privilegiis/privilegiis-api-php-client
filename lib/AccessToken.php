<?php

namespace Swagger\Client;

class AccessToken
{
    /** access_token */
    private $accessToken;
    /** token_type */
    private $tokenType;
    /** expires_in */
    private $expiresIn;
	/** expires_date */
	private $expiresDate;
	/** scope */
	private $scope;
	/** clientId */
	private $clientId;
	
	
    public function __construct(array $data)
    {
        
        foreach (array('token_type', 'access_token') as $key) {
            if (!array_key_exists($key, $data)) {
                throw new Exception(sprintf("missing field '%s'", $key));
            }
        }
        $this->setAccessToken($data['access_token']);
        $this->setTokenType($data['token_type']);
        $expiresIn = array_key_exists('expires_in', $data) ? $data['expires_in'] : null;
        $this->setExpiresIn($expiresIn);
		
		$expire = new \DateTime();
		$expire->modify('+'. $expiresIn . ' seconds');
		$this->setExpiresDate($expire);
		
		$this->setClientId($data['clientId']);
		$this->setScope($data['scope']);
		
    }
	
	public function checkTokenExpired()
    {
		if ($this->getExpiresDate() == null || new \DateTime() >= $this->getExpiresDate()){
			return true;
		}
		return false;
    }
	
    public function setAccessToken($accessToken)
    {
        if (!is_string($accessToken) || 0 >= strlen($accessToken)) {
            throw new Exception('access_token needs to be a non-empty string');
        }
        $this->accessToken = $accessToken;
    }
	
    public function getAccessToken()
    {
        return $this->accessToken;
    }
	
    public function setTokenType($tokenType)
    {
        if (!is_string($tokenType) || 0 >= strlen($tokenType)) {
            throw new Exception('token_type needs to be a non-empty string');
        }
        // Google uses "Bearer" instead of "bearer", so we need to lowercase it...
        if (!in_array(strtolower($tokenType), array('bearer'))) {
            throw new Exception(sprintf("unsupported token type '%s'", $tokenType));
        }
        $this->tokenType = $tokenType;
    }
	
    public function getTokenType()
    {
        return $this->tokenType;
    }
	
    public function setExpiresIn($expiresIn)
    {
        if (null !== $expiresIn) {
            if (!is_numeric($expiresIn) || 0 >= $expiresIn) {
                throw new Exception('expires_in should be positive integer or null');
            }
            $expiresIn = (int) $expiresIn;
        }
        $this->expiresIn = $expiresIn;
    }
	
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

	public function setExpiresDate($expires)
    {
       $this->expiresDate = $expires;
    }
	
    public function getExpiresDate()
    {
        return $this->expiresDate;
    }
	
	public function getClientId()
    {
        return $this->clientId;
    }
	
	public function setClientId($clientId)
    {
    	$this->clientId = $clientId;  
    }
	
    public function getScope()
    {
        return $this->scope;
    }
	
	public function setScope($scope)
    {
    	$this->scope = $scope;  
    }
}