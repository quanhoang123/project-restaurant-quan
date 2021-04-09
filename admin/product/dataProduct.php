

<?php 
class DatabaseProduct{
    public $servername = "localhost";
    public $username   = "root";
    public $password   = "";
    public $database   = "database_restaurant";
    public $dbProduct;
    public function __construct()
    {
        $this->dbConnection();
    }
    public function dbConnection(){
        $this->dbProduct = new mysqli($this->servername, $this->username, $this->password,$this->database);
        if(!$this->dbProduct) {
            print($this->dbProduct->num_error);
            exit();
        }
        else {
            // echo "Đã kết nối dữ liệu ";
        }

    }
    public function saveProduct ($post){

        
     echo  $name_newProd = $this->dbProduct->real_escape_string($_POST['name_product']);
      echo  $id_prodCate = $this->dbProduct->real_escape_string($_POST['id_prodCate']);
        $image = $this->dbProduct->real_escape_string($_POST['image']);
        $price = $this->dbProduct->real_escape_string($_POST['price']);
        $old_price = $this->dbProduct->real_escape_string($_POST['old_price']);

        $quantity=$this->dbProduct->real_escape_string($_POST['quantity']);
       
        $descriptions = $this->dbProduct->real_escape_string($_POST['descriptions']);
        $status = $this->dbProduct->real_escape_string($_POST['status']);
        $create_date = $this->dbProduct->real_escape_string($_POST['day']);


      //  $image = 'img-product/'. $image;
        
        $insert = "INSERT INTO product (name_newProd,id_prodCate,`image`,old_price,price,create_date,quantity,descriptions,`status`) VALUES('$name_newProd','$id_prodCate','$image','$old_price','$price','$create_date','$quantity','$descriptions','$status')";
        $result=$this->dbProduct->query($insert);
        echo var_dump($result);
           if($result == true){
            header("Location:productAdmin.php?msg1=delete");
        }
        else {
            echo "Them san pham khong thanh cong";
        }
    }
    

    //-------------Delete-----------

    public function deleteProduct($id){
        
        $delete = "DELETE FROM product WHERE id_newProd = '$id'";
		    $sql = $this->dbProduct->query($delete);
            if ($sql==true) {
                echo "Da xoa thanh cong";
                header("Location:productAdmin.php?msg3=delete");
            }
            else {
                echo "Khong xoa duoc";
            }

}


// public function check($post,$in){
//     $query = "SELECT * FROM product WHERE id_prodCate = $in";
//     $result = $this->dbProduct->query($query);

//     if(count($result)!=0){
//         $this->saveProduct($post);
//       }else{
//         echo " category khoong ttonf taij";
        
//       }
   
// }

public function search($search){

    $query = "SELECT * FROM product WHERE name_newProd LIKE '%$search%'";
    $result = $this->dbProduct->query($query);
    if ($result ==true){
        while($row = $result->fetch_assoc()){
            $data[] = $row;   
        }
        return $data;
    }
    else {
        echo "khong hien thi duoc.";
    }

}
//---------Update-------------

public function updateProduct($id_newProd){
      $id_newProd = $this->dbProduct->real_escape_string($_POST['id_newProd']);
        $name_product = $this->dbProduct->real_escape_string($_POST['name_product']);
        $category_id = $this->dbProduct->real_escape_string($_POST['category_id']);
        $image = $this->dbProduct->real_escape_string($_POST['image']);
        $price = $this->dbProduct->real_escape_string($_POST['price']);
      
        $quantity= $this->dbProduct->real_escape_string($_POST['quantity']);
        $status = $this->dbProduct->real_escape_string($_POST['status']);
        $description = $this->dbProduct->real_escape_string($_POST['description']);
        $create_date = $this->dbProduct->real_escape_string($_POST['create_date']);


        $img = '../img/img-product/'. $image;
        $update="update product SET name_newProd ='$name_product', id_prodCate ='$category_id',image ='$img', price ='$price',create_date='$create_date', quantity ='$quantity', descriptions='$description', status ='$status'  WHERE id_newProd = '$id_newProd' ";
        $result=$this->dbProduct->query($update);
        if ($result == true){
             header("Location:productAdmin.php?msg2=update");
        //  echo "Up thanh cong";
         
        }else{
            echo "Update khong thanh cong";
        }  
        
}
//-----------Xuat du lieu------------//
public function display(){
    $query = 'select * from product p 
            ';                  
               $result = $this->dbProduct->query($query);
               if ($result ==true){
                   while($row = $result->fetch_assoc()){
                       $data[] = $row;
                       
                   }
                   return $data;
               }
               else {
                   echo "khong hien thi duoc.";
               }
            } 
//----------------------------------------------------------//
            public function displyaRecordById($id_newProd)
            {
                $query = "select * from product p 
                INNER JOIN Product_category c
                on (p.id_prodCate=c.id_prodCate)         
                where p.id_prodCate= 1 and id_newProd='$id_newProd'";
                $result = $this->dbProduct->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
                }else{
                echo "Không tìm thấy tài khoản đó";
                }
            }



            
    }
 ?>

                    
