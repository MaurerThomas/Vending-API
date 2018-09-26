<?php

namespace Domain;


class SodaCardUid
{

    /**
     * @var int
     */
    private $key;

    /**
     * @var int
     */
    private $value;

    /**
     * SodaCardUid constructor.
     * @param int $key
     * @param int $value
     */
    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }


}