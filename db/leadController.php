<?php
    class leadController{
       private $db; 

       function __construct($conn){
           $this->db = $conn;
       }
//========================Insertar=======================

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

//========================Listar=======================
    
       
       public function getLeads(){
           $sql = "SELECT * FROM `lead` l INNER JOIN ocupaciones o ON l.ocupacion_id = o.ocupacion_id" ;
           $result = $this->db-> query($sql);
           return $result;
       }


//========================Listar ocupaciones=======================
       
       public function getOcupaciones(){
           $sql = "SELECT * FROM `ocupaciones`";
           $result = $this->db-> query($sql);
           return $result;
       }
    }
?>