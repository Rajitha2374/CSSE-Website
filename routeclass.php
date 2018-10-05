<?php
include_once 'Database.php';
include_once 'Format.php';
?>

<?php
class Route{
    private $db;
    private $fm;
    
    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format();
    }
    
    
    // to insert the values to the database
    public function insertRoute($data){
    
        $routeid = mysqli_real_escape_string($this->db->link,$data['routeid']);
        $start = mysqli_real_escape_string($this->db->link,$data['start']);
        $end= mysqli_real_escape_string($this->db->link,$data['end']);
        $desc= mysqli_real_escape_string($this->db->link,$data['desk']);
    
        
        if(empty( $routeid) || empty(  $start) || empty($end) ||empty( $desc)){
                     $msg=' <div id="logalert" class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Fields must not be empty</div>';
            return $msg;
        }
   
            else{
            $query = "INSERT INTO route(routeid,start,end,desk) VALUES(' $desc','$itemname','$start','$end','$desc')";
            $bInsert = $this->db->insert($query);
        
        }
    }
 
    //to get the values by an ID

    public function getRouteById($id){
        $query = "SELECT * FROM route WHERE routeid='$id'";
        $result = $this->db->select($query);
        return $result;
    }
    
    
    //to update the values
    public function RouteUpdate($data,$sid){
      
        $routeid = mysqli_real_escape_string($this->db->link,$data['routeid']);
        $start = mysqli_real_escape_string($this->db->link,$data['start']);
        $end= mysqli_real_escape_string($this->db->link,$data['end']);
        $desc= mysqli_real_escape_string($this->db->link,$data['desk']);
    
        
        if(empty( $routeid) || empty(  $start) || empty($end) ||empty( $desc)){
                     $msg=' <div id="logalert" class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Fields must not be empty</div>';
            return $msg;
        }else{       

            $query = "UPDATE route SET
            routeid = '$stockid',
            start = '$start',
            end='$end',
            desk='$desk',
            WHERE routeid ='$sid'";
            
            $updated_row = $this->db->update($query);
             if($updated_row){
             $msg=' <div id="logalert" class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Brand Update Successfully !</div>';
            return $msg;
             }

            else{
                $msg=' <div id="logalert" class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Brand could not be Update !</div>';
            return $msg;
            }
        }
    }
    
    
        // to delete the route data
        public function delRoute($sid){
        $sid = mysqli_real_escape_string($this->db->link,$sid);
        $query = "DELETE FROM route WHERE routeid = '$sid'";
        $deldata = $this->db->delete($query);
        if($deldata){
             $msg=' <div id="logalert" class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Remove Successfully !</div>';
            return $msg;
           
        }else{
             $msg=' <div id="logalert" class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Brand could not be Removed !</div>';
            return $msg;
        }
        
    }
}
?>