<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $UserCollection = UserMaster::model()->findbyAttributes(array('username' => $this->username));

		if(!isset($UserCollection) || $UserCollection === null){
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        } elseif(!$this->validatePassword($UserCollection->password)){
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        } else{
            $this->errorCode=self::ERROR_NONE;
            $this->setState('id', $UserCollection->user_master_id);
            $this->setState('user_type', $UserCollection->user_type);
            $this->setState('display_name', $UserCollection->username);
        }
		return !$this->errorCode;
	}

    // hash password
    public function hashPassword($password)
    {
        return md5($password);
    }

    // password validation
    public function validatePassword($password)
    {

        return $password===$this->hashPassword($this->password);
    }
}
