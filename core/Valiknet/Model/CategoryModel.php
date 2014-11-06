<?php
namespace Valiknet\Model;

use Valiknet\Interfaces\DbInterface;
use Valiknet\Libs\DbClass;

class CategoryModel extends DbClass implements DbInterface
{
    public function get(array $array = array())
    {
        return $this->querySelect("SELECT * FROM categories");
    }

    /**
     * @param array $array
     */
    public function update(array $array = array())
    {

    }

    public function add(array $array = array())
    {

    }

    public function delete(array $array = array())
    {

    }
} 