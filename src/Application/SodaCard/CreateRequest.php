<?php

namespace Application\SodaCard;


class CreateRequest
{
    private $id;

    private $email;

    private $first_name;

    private $last_name;

    private $slack_username;

    /**
     * CreateRequest constructor.
     * @param $id
     * @param $email
     * @param $first_name
     * @param $last_name
     * @param $slack_username
     */
    public function __construct($id, $email, $first_name, $last_name, $slack_username)
    {
        $this->id = $id;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->slack_username = $slack_username;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */
    public function getSlackUsername()
    {
        return $this->slack_username;
    }

}