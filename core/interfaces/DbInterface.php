<?php
/**
 * Created by PhpStorm.
 * User: valik-pc
 * Date: 23.10.14
 * Time: 12:29
 */

interface DbInterface {
    public function get(array $params = array());

    public function update(array $params = array());

    public function delete(array $params = array());

    public function add(array $params = array());
} 