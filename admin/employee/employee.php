<?php

class DatabaseEmployee
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "database_restaurant";
    public $con;


    // Database Connection 
    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } else {
            return $this->con;
        }
    }


    public function insertData($employees)
    {

        $name_employee = $this->con->real_escape_string($_POST['name_employee']);
        $gender = $this->con->real_escape_string($_POST['gender']);
        $address = $this->con->real_escape_string($_POST['address']);
        $phone = $this->con->real_escape_string($_POST['phone']);
        $salary = $this->con->real_escape_string($_POST['salary']);
        // $age = $this->con->real_escape_string($_POST['age']);
        // $position = $this->con->real_escape_string($_POST['position']);
        // $dateOfwork = $this->con->real_escape_string($_POST['dateOfwork']);
        $query = "INSERT INTO employees(name_employeer,gender,`address`,phone,salary) VALUES('$name_employee','$gender','$address','$phone','$salary')";

        $sql = $this->con->query($query);
        if ($sql == true) {
            header("Location:index.php?msg1=insert");
        } else {
            echo "Registration failed try again!";
        }
    }

    // Fetch customer records for show listing
    public function displayData()
    {
        $query = "SELECT * FROM employees";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "No found records";
        }
    }

    // Fetch single data for edit from customer table
    public function displyaRecordById($id_employee)
    {
        // $query = "SELECT * FROM employees WHERE id_employee = '$id_employee'";
        // V
        // V
        $query = "SELECT * FROM employees WHERE id_employeer = '$id_employee'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Record not found";
        }
    }


    public function search($search)
    {

        $query = "SELECT * FROM employees WHERE name_employeer LIKE '%$search%'";
        $result = $this->con->query($query);
        if ($result == true) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "khong hien thi duoc.";
        }

    }

    // Update customer data into customer table
    public function updateRecord($postData)
    {
        $id_employee = $this->con->real_escape_string($_POST['id_employee']);
        $name_employee = $this->con->real_escape_string($_POST['name_employee']);
        $gender = $this->con->real_escape_string($_POST['gender']);
        // $age =$this->con->real_escape_string($_POST['age']);
        $address = $this->con->real_escape_string($_POST['address']);
        $phone = $this->con->real_escape_string($_POST['phone']);
        // $positions =$this->con->real_escape_string($_POST['position']);
        $salary = $this->con->real_escape_string($_POST['salary']);
        // $dateOfwork =$this->con->real_escape_string($_POST['dateOfwork']);

        if (!empty($postData)) {
            $query = "UPDATE employees SET  name_employeer = '$name_employee',  gender = '$gender', address ='$address', phone ='$phone', salary = '$salary' WHERE id_employeer = '$id_employee'";
            $sql = $this->con->query($query);
            if ($sql == true) {
                header("Location:index.php?msg2=update");
            } else {
                echo "Registration updated failed try again!";
            }
        }

    }


    // Delete customer data from customer table
    public function deleteRecord($id_employee)
    {
        echo $id_employee;

        $query = "DELETE FROM employees WHERE id_employeer = '$id_employee'";
        $sql = $this->con->query($query);
        if ($sql == true) {
            header("Location:index.php?msg3=delete");
        } else {
            echo "Record does not delete try again";
        }
    }

}

?>