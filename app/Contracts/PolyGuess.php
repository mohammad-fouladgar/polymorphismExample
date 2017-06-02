<?php
namespace App\Contracts;

/**
 * 
 */
interface PolyGuess {

    /**
     * [print description]
     * @param  [type] $candidate [description]
     * @param  [type] $count     [description]
     * @return [type]            [description]
     */
    public function print($candidate,$count);
}