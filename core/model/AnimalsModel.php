
<?php
require_once __DIR__."/../interfaces/DbInterface.php";
require_once __DIR__."/../libs/DbClass.php";



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
            $sql = "SELECT * FROM animals WHERE id = ?";
            return ($this->querySelect($sql,array($params['id'])))?:false;
        }

        $sql = "SELECT * FROM animals,categories WHERE categories.id = animals.category_id  LIMIT 10";
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