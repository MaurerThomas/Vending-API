<?php

namespace Domain;


class SodaCard
{

    /**
     * @var User
     */
    private $user;

    /**
     * SodaCard constructor.
     * @param int $id
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }


}
