<?php
include_once("header.php");

?>

 <div class="container">
      <div class="jumbotron">
        <h1>HNG Internship: Stage 1 </h1>
        <p class="lead"> Write a simple php script, Connect to a mysql database and read something from it and display</p>
        <a class="btn btn-lg btn-primary" href="https://hnginterns.slack.com/team/solar" role="button">View my Slack Team Profile</a>
      </div>
   


<div class ="row"> 
  
          <a class="btn btn-sm btn-success"  href="Views/User/add.php" role="button">Create User</a>

</div>

<div class="row">

<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Tel Number (+234)</th>
      <th>Created Date</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>


     <?php
            $Db = new DB();
            $users = $Db->getRows('users',array('order_by'=>'id DESC'));

            if(!empty($users)){
                
                
                $count = 0; foreach($users as $user){
                
                $count++;
                
    ?>
            <tr>
                <th scope="row"><?php echo $count; ?></th>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['created_date']; ?></td>
                <td>
                    <a href="Views/User/edit.php?id=<?php echo $user['id']; ?>" >edit</a>
                    <a href="RequestAction/UserAction.php?request_type=delete&id=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?');">delete</a>
                </td>
            </tr>
            <?php
        
        }
        
        
        }
        else{
            
        ?>
            <tr><td colspan="4">No user(s) found......</td>
           
           
            <?php
         }
         
         ?>



  </tbody>
</table>

</div>



 </div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>    
  </body>
</html>

