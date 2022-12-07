<?php
require_once "Models/Model.php";
//model3
class Model3 extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProducts()
    {
        $rs = $this->conn->query("SELECT * FROM products");
        $arr = [];
        while($row = $rs->fetch_assoc()){
            $arr[] = $row;
        }

        return $arr;
    }

    public function save(array $form)
    {
        return $this->conn
            ->query("UPDATE products SET title = '".$form['title']."', price = '".$form['price']."'  WHERE id ='".$form['id']."'");
    }

    public function delete($id)
    {
        return $this->conn
            ->query("DELETE FROM products WHERE id='".$id."'");
    }
}