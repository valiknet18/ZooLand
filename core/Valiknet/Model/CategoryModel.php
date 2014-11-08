<?php
namespace Valiknet\Model;

use Valiknet\Interfaces\DbInterface;
use Valiknet\Libs\DbClass;

class CategoryModel extends DbClass implements DbInterface
{
    public function get(array $array = array())
    {
        return $this->querySelect("SELECT * FROM categories ORDER BY id DESC");
    }

    /**
     * @param array $array
     */
    public function update(array $array = array())
    {

    }

    public function add($str)
    {
        list($name, $value) = explode("=",$str);
        $data[$name] = $value;

        $sql = "INSERT INTO categories(cname) VALUES(?)";
        if($this->queryAdd($sql, array($data["name_category"]))){
            return $this->get();
        }
        return false;
    }

    public function delete(array $array = array())
    {
        if(isset($array['id'])){
            $sql = "DELETE FROM categories WHERE id = ?";

            if($this->queryDelete($sql, array($array['id']))){
                return $this->get();
            }

            return false;
        }


    }
} 