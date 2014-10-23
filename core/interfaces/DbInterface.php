<?php
/**
 * Created by PhpStorm.
 * User: valik-pc
 * Date: 23.10.14
 * Time: 12:29
 */

interface DbInterface {
    public function get();

    public function update();

    public function delete();

    public function add();
} 