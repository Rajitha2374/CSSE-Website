
<?php
include 'Database.php';
?>
<?php

$db = new Database();
    $q = $_GET['q'];
    $query = "SELECT * FROM route WHERE routeid='$q'";   
if(!empty($_GET['q'])){ 
    $result = $db->select($query);
    if($result){
    while($output = $result->fetch_assoc()){
    echo '
                  
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="start" name="start" class="form-control" value="'.$output['start'].'" >
                            <label for="email" class="">Start</label>
                        </div>
                    </div>
                 

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="end" name="end" class="form-control" value="'.$output['end'].'">
                            <label for="subject" class="">End</label>
                        </div>
                    </div>
                </div>
       
                <div class="row">

                    
                    <div class="col-md-12">

                        <div class="md-form">
                            <input type="text" id="des" name="des" rows="2" class="form-control md-textarea" value="'.$output['desk'].'"/>
                            <label for="message">Description</label>
                        </div>

                    </div>
                </div>';
    
        }
    }
    
}


?>





