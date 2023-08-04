<?php 

namespace Models;

use Core\Model;

class Usuario extends Model
{

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
