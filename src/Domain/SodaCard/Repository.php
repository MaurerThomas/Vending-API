<?php

namespace Domain\SodaCard;

use Domain\SodaCard;

interface Repository
{
    /**
     * @param SodaCard $sodaCard
     */
    public function save(SodaCard $sodaCard);

    /**
     * @param $id
     * @return SodaCard|null
     */
    public function find($id);

    /**
     * @return SodaCard[]
     */
    public function findAll();

    /**
     * @param SodaCard $sodaCard
     */
    public function update(SodaCard $sodaCard);

    /**
     * @param $id
     */
    public function destroy($id);
}