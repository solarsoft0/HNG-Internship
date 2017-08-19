<?php

include_once("./../../header.php");




?>


<div class="container">
    
              <div class="jumbotron">
        <h1>Edit User</h1>
       
      </div>
   
                <form method="post" action="../../RequestAction/UserAction.php" class="form-inline" id="userForm">

  <label class="form-label" for="inlineFormInput">Full Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="name" placeholder="Full Name">


  <label class="form-label" for="inlineFormInput">Email</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="email" placeholder="Full Name" >


  
  <label class="form-label" for="inlineFormInput">Tel Number</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name = "phone" placeholder="Full Name" >


                <input type="hidden" name="request_type" value="add"/>

  <button type="submit" class="btn btn-primary">Create User</button>
</form>


</div>
