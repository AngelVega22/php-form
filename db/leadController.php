<?php
    class leadController{
       private $db; 

       function __construct($conn){
           $this->db = $conn;
       }

       public function insert($fname, $lname,$dob, $email,$contact, $ocupacion){
           try {
               $sql = "INSERT INTO lead (firstname,lastname,dateofbirth,emaillead,contactnumber,ocupacion_id)VALUES (:fname,:lname,:dob,:email,:contact,:ocupacion)";
               $stmt = $this-> db->prepare($sql);

               $stmt -> bindparam(':fname',$fname);
               $stmt -> bindparam(':lname',$lname);
               $stmt -> bindparam(':dob',$dob);
               $stmt -> bindparam(':email',$email);
               $stmt -> bindparam(':contact',$contact);
               $stmt -> bindparam(':ocupacion',$ocupacion);

               $stmt-> execute();
               return true;

           } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
        }
           
       }
    }
?>