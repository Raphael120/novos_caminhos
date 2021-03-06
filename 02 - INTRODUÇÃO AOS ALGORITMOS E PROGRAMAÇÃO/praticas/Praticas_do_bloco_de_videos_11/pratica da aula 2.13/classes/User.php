<?php

class User
{
    private $firstName;
    public $lastName;
    public $email;

    /**
     * Obter o valor da propriedade firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Definir o valor da propriedade firstName
     *
     * @param string $firstName
     * @return object
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Obter o valor da propriedade lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName)
    {
        $this->lastName =  filter_var($lastName, FILTER_SANITIZE_STRING);

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
            return true;
        } else {
            $this ->email = null;
            return false;
        }
        return $this;
    }
}