<?php
namespace Valiknet\Model;


use Valiknet\Libs\DbClass;
use Valiknet\Interfaces\DbInterface;
/*
 * table animals
 *  id
 *  name
 *  text
 *  img
 *  count
 *  category_id
 *  created_at
 *  updated_at
 *  */


/*  table categories
 *      id
 *      name
*/
class AnimalsModel extends DbClass implements DbInterface
{
    public function get(array $params = array())
    {
        if(isset($params['id'])){
            $sql = "SELECT * FROM animals AS a INNER JOIN categories AS cat ON cat.id = a.category_id WHERE a.id = ?";
            return ($this->querySelect($sql,array($params['id'])))?:false;
        }

        if(isset($params['category_id'])){
            $sql = "SELECT * FROM animals AS a INNER JOIN categories AS cat ON cat.id = a.category_id WHERE a.category_id = ?";
            return ($this->querySelect($sql,array($params['category_id'])))?:false;
        }

        $sql = "SELECT * FROM animals as a INNER JOIN categories AS cat ON cat.id = a.category_id LIMIT 10";
        return $this->querySelect($sql);
    }

    public function update(array $params = array())
    {

    }

    public function delete(array $params = array())
    {

    }

    public function add(array $params = array())
    {

    }

} 