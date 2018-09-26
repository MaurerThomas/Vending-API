<?php

namespace Domain\SodaCardUid;


interface Repository
{
    /**
     * @param $uid
     * @return int
     */
    public function save($uid);

    /**
     * @param $id
     * @return int
     */
    public function find($id);

    /**
     * @param $id
     */
    public function destroy($id);

}