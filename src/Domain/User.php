<?php

namespace Domain;


class User
{

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $first_name;

    /**
     * @var string
     */
    private $last_name;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $password_confirmation;

    /**
     * @var string
     */
    private $custom_fields;

    /**
     * User constructor.
     * @param string $email
     * @param string $first_name
     * @param string $last_name
     * @param string $password
     * @param string $password_confirmation
     * @param string $custom_fields
     */
    public function __construct($email, $first_name, $last_name, $password, $password_confirmation, $custom_fields)
    {
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->password = $password;
        $this->password_confirmation = $password_confirmation;
        $this->custom_fields = $custom_fields;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getPasswordConfirmation()
    {
        return $this->password_confirmation;
    }

    /**
     * @return string
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }


}