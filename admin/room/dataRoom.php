<?php 
class DatabaseRoom {
    public $servername = "localhost";
    public $username   = "root";
    public $password   = "";
    public $database   = "database_restaurant";
    public $dbRoom;
    
    public function __construct()
    {
        $this->dbConnection();
    }
    public function dbConnection(){
        $this->dbRoom = new mysqli($this->servername, $this->username, $this->password,$this->database);
        if(!$this->dbRoom) {
            print($this->dbRoom->num_error);
            exit();
        }
        

    }
    public function saveRoom ($post){    
        $name_room = $this->dbRoom->real_escape_string($_POST['name_room']);
        $category_id = $this->dbRoom->real_escape_string($_POST['category_id']);
        $image = $this->dbRoom->real_escape_string($_POST['image']);
        $price = $this->dbRoom->real_escape_string($_POST['price']);
        $created_day = $this->dbRoom->real_escape_string($_POST['created_day']);
        $quantity_person= $this->dbRoom->real_escape_string($_POST['quantity_person']);
        $description = $this->dbRoom->real_escape_string($_POST['description']);
       // $image_room = 'img-room/'. $image;
        
        $insert = "INSERT INTO room_restaurant (name_room,category_id,image_room,`description`,price,created_day,quantity_person)VALUES('$name_room','$category_id','$image_room','$description','$price','$created_day','$quantity_person')";
        $result=$this->dbRoom->query($insert);
           if($result == true){
            
            header("Location:roomAdmin.php?msg3=insert");
        }
        else {
            echo "Add khong thanh cong";
        }
    }
    

    //-------------Delete-----------

    public function deleteRoom($id){
        
        $delete = "DELETE FROM room_restaurant WHERE id_room = '$id'";
		    $sql = $this->dbRoom->query($delete);
            if ($sql==true) {
                echo "Da xoa thanh cong";
                header("Location:roomAdmin.php?msg3=delete");
            }
            else {
                echo "Khong xoa duoc";
            }

}
//---------Update-------------

public function updateRoom($post){
  
        $id_room = $this->dbRoom->real_escape_string($_POST['id']);
        $name_room = $this->dbRoom->real_escape_string($_POST['name_room']);
        $category_id = $this->dbRoom->real_escape_string($_POST['category_id']);
        $image = $this->dbRoom->real_escape_string($_POST['image']);
        $description = $this->dbRoom->real_escape_string($_POST['description']);
        $price = $this->dbRoom->real_escape_string($_POST['price']);
        $created_day = $this->dbRoom->real_escape_string($_POST['created_day']);
        $quantity_person= $this->dbRoom->real_escape_string($_POST['quantity_person']);
       

        $image = 'img-room/'. $image;
        $update="UPDATE room_restaurant SET id_room ='$id_room', name_room = '$name_room', category_id ='$category_id', image_room ='$image',description='$description',price ='$price', created_day='$created_day', quantity_person ='$quantity_person' WHERE id_room = '$id_room'";
        $result=$this->dbRoom->query($update);
        if ($result == true){
             header("Location:roomAdmin.php?msg2=update");
        }else{
            echo "Update khong thanh cong";
        }  
        
}
//-----------Xuat du lieu------------//
public function display(){
    $query = "SELECT * FROM room_restaurant";
                    
               $result = $this->dbRoom->query($query);
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
public function search($search){

    $query = "SELECT * FROM room_restaurant WHERE name_room LIKE '%$search%'";
    $result = $this->dbRoom->query($query);
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





            public function displyaRecordById($id)
            {
                $query = "SELECT * FROM room_restaurant WHERE id_room = '$id'";
                $result = $this->dbRoom->query($query);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
                }else{
                echo "Không tìm thấy tài khoản đó";
                }
            }


    
    }
 ?>


                    
