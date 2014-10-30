<?php
namespace Valiknet\Interfaces;

interface DbInterface
{
    public function get(array $params = array());

    public function update(array $params = array());

    public function delete(array $params = array());

    public function add(array $params = array());
} 