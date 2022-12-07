<?php
require_once "./Models/Model.php";
class ProductModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sql = "SELECT * FROM products";
        $rs = $this->con->query($sql);
        $results = [];
        while($row = $rs->fetch_assoc()){
            $results[] = $row;
    }
    //    var_dump($results);exit;
        return $results;
    }

    public function index1()
    {
        $sql = "SELECT * FROM quanao";
        $rs = $this->con->query($sql);
        $results = [];
        while($row = $rs->fetch_assoc()){
            $results[] = $row;
    }
    //    var_dump($results);exit;
        return $results;
    }

    public function index2()
    {
        $sql = "SELECT * FROM dienthoai";
        $rs = $this->con->query($sql);
        $results = [];
        while($row = $rs->fetch_assoc()){
            $results[] = $row;
    }
    //    var_dump($results);exit;
        return $results;
    }

    public function index3()
    {
        $sql = "SELECT * FROM laptop";
        $rs = $this->con->query($sql);
        $results = [];
        while($row = $rs->fetch_assoc()){
            $results[] = $row;
    }
    //    var_dump($results);exit;
        return $results;
    }
    public function index4()
    {
        $sql = "SELECT * FROM mevabe";
        $rs = $this->con->query($sql);
        $results = [];
        while($row = $rs->fetch_assoc()){
            $results[] = $row;
    }
    //    var_dump($results);exit;
        return $results;
    }

    public function storeProduct($form)
    {   
        $tname = $_FILES['file']['tmp_name'];
        $uploads_dir = 'images';
        move_uploaded_file($tname,$uploads_dir.'/'.$form['image']);
        $sql = "INSERT INTO ".$form['products']."(tensp,gia,image) VALUES('".$form['tensp']."','".$form['gia']."','".$form['image']."')";
        $rs = $this->con->query($sql);
        return $rs;
    }

    //------------------------Product-----------------------------------
    public function deleteProduct($id)
    {

        $sql ="DELETE FROM products WHERE id='".$id."'";
        return $this->con->query($sql);
    }

    public function update($id)
    {
        $sql = "SELECT * FROM products WHERE id  = '".$id."'";
        $rs = $this->con->query($sql);
        return $rs->fetch_assoc(); // lay du lieu ra
    }
    
    public function Save($form)
    {
        $sql = "UPDATE products SET tensp = '".$form['tensp']."', gia = '".$form['gia']."', image = '".$form['image']."'  , id = '".$form['id']."'  WHERE id ='".$form['id']."'";
        return $this->con->query($sql);
    }
    //----------------------------------------------------------------------------------

    //------------------------Quần áo-----------------------------------
    public function deleteProduct1($id)
    {

        $sql ="DELETE FROM quanao WHERE id='".$id."'";
        return $this->con->query($sql);
    }

    public function update1($id)
    {
        $sql = "SELECT * FROM quanao WHERE id  = '".$id."'";
        $rs = $this->con->query($sql);
        return $rs->fetch_assoc(); // lay du lieu ra
    }
    
    public function Save1($form)
    {
        $sql = "UPDATE quanao SET tensp = '".$form['tensp']."', gia = '".$form['gia']."' , id = '".$form['id']."'  WHERE id ='".$form['id']."'";
        return $this->con->query($sql);
    }
    //----------------------------------------------------------------------------------

     //------------------------điện thoại-----------------------------------
     public function deleteProduct2($id)
     {
 
         $sql ="DELETE FROM dienthoai WHERE id='".$id."'";
         return $this->con->query($sql);
     }
 
     public function update2($id)
     {
         $sql = "SELECT * FROM dienthoai WHERE id  = '".$id."'";
         $rs = $this->con->query($sql);
         return $rs->fetch_assoc(); // lay du lieu ra
     }
     
     public function Save2($form)
     {
         $sql = "UPDATE dienthoai SET tensp = '".$form['tensp']."', gia = '".$form['gia']."' , id = '".$form['id']."'  WHERE id ='".$form['id']."'";
         return $this->con->query($sql);
     }
     //----------------------------------------------------------------------------------


      //------------------------Laptop-----------------------------------
    public function deleteProduct3($id)
    {

        $sql ="DELETE FROM laptop WHERE id='".$id."'";
        return $this->con->query($sql);
    }

    public function update3($id)
    {
        $sql = "SELECT * FROM laptop WHERE id  = '".$id."'";
        $rs = $this->con->query($sql);
        return $rs->fetch_assoc(); // lay du lieu ra
    }
    
    public function Save3($form)
    {
        $sql = "UPDATE laptop SET tensp = '".$form['tensp']."', gia = '".$form['gia']."' , id = '".$form['id']."'  WHERE id ='".$form['id']."'";
        return $this->con->query($sql);
    }
    //----------------------------------------------------------------------------------

     //------------------------Me va be-----------------------------------
     public function deleteProduct4($id)
     {
 
         $sql ="DELETE FROM mevabe WHERE id='".$id."'";
         return $this->con->query($sql);
     }
 
     public function update4($id)
     {
         $sql = "SELECT * FROM mevabe WHERE id  = '".$id."'";
         $rs = $this->con->query($sql);
         return $rs->fetch_assoc(); // lay du lieu ra
     }
     
     public function Save4($form)
     {
         $sql = "UPDATE mevabe SET tensp = '".$form['tensp']."', gia = '".$form['gia']."' , id = '".$form['id']."'  WHERE id ='".$form['id']."'";
         return $this->con->query($sql);
     }
     //----------------------------------------------------------------------------------
}


?>