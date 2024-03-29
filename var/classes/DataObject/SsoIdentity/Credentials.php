<?php 

namespace Pimcore\Model\DataObject\SsoIdentity;

class Credentials extends \Pimcore\Model\DataObject\Objectbrick {



protected $brickGetters = array('OAuth1Token','OAuth2Token');


protected $OAuth1Token = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth1Token
*/
public function getOAuth1Token() { 
   return $this->OAuth1Token; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\OAuth1Token $OAuth1Token
* @return \Pimcore\Model\DataObject\SsoIdentity\Credentials
*/
public function setOAuth1Token ($OAuth1Token) {
	$this->OAuth1Token = $OAuth1Token;
	return $this;
}

protected $OAuth2Token = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth2Token
*/
public function getOAuth2Token() { 
   return $this->OAuth2Token; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\OAuth2Token $OAuth2Token
* @return \Pimcore\Model\DataObject\SsoIdentity\Credentials
*/
public function setOAuth2Token ($OAuth2Token) {
	$this->OAuth2Token = $OAuth2Token;
	return $this;
}

}

