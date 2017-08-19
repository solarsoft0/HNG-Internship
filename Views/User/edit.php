<?php

include_once("./../../header.php");



$db = new DB();
$userData = $db->getRows('users',array('where'=>array('id'=>$_GET['id']),'return_type'=>'single'));
if(!empty($userData)){
?>


<div class="container">
    
              <div class="jumbotron">
        <h1>Edit User</h1>
       
      </div>
   
                <form method="post" action="../../RequestAction/UserAction.php" class="form-inline" id="userForm">

  <label class="form-label" for="inlineFormInput">Full Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="name" placeholder="Full Name" value="<?php echo $userData['name']; ?>">


  <label class="form-label" for="inlineFormInput">Email</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="email" placeholder="Full Name" value="<?php echo $userData['email']; ?>">


  
  <label class="form-label" for="inlineFormInput">Tel Number</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name = "phone" placeholder="Full Name" value="<?php echo $userData['phone']; ?>">


 <input type="hidden" name="id" value="<?php echo $userData['id']; ?>"/>
                <input type="hidden" name="request_type" value="edit"/>

  <button type="submit" class="btn btn-primary">Update</button>
</form>


</div>
<?php } ?>