

  <h2 align="center">Confirm</h2><hr>


 <?php 
     
     $username = $_GET['username'];
     

                                              
  include('includes/dbconfig.php');
  $ref = "Pending Accounts/Consumer";


$getdata = $database ->getReference($ref)->getChild($username)->getValue();


 ?>
 <h3>&nbsp;&nbsp;&nbsp;&nbsp;Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $getdata['name']; ?></h3> 
 
 <form  method="post" action="addcon.php">
 <input type="text" name="username" value="<?php echo $username; ?>" />
<div>    
  <table class="table" width="400px">
    <thead>
      <tr>
  <input type="hidden"  /> 
  <input type="hidden"  />
    <td width="118">Account Number:</td>
    <td width="66"><input type="text" name="c_no" value="<?php echo $getdata['c_no']; ?>" /> </td>
    
    <td><input type="text" name="name" value="<?php echo $getdata['name']; ?>"   /></td>
    
      </tr>
    </thead>
    
    <tbody>
      <tr>
     <td>Meter Number:</td>
    <td><input type="text" name="username" value="<?php echo $getdata['username']; ?>" /></td>
    
    <td><input type="number" name="mo_no" value="<?php echo $getdata['mo_no']; ?>"   /></td>
   
     </tr>
     <tr>
       <td>Consumer Type:</td>
    <td><input type="text"  name="customer_type" value="<?php echo $getdata['customer_type']; ?>" /></td>
   
  </tr>
      <tr>
    
    
    <td><input type="text" name="email" value="<?php echo $getdata['email']; ?>" /></td>
    <td><input type="number" name="meter_no" value="<?php echo $getdata['meter_no']; ?>" /></td>
    <td><input type="password" name="password" value="<?php echo $getdata['password']; ?>" /></td>
     </tr>
     
  
    
      <tr>
      
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="addcon" class="btn btn-default">ADD</button></td>
      </tr>
    </tbody>
   
  </table>
</div> 

</form>







<!--<style>
.floated {
   float:left;
   margin-right:10px;
}
</style>

  <h3 align="center">Are you sure you want to add this user?</h3><hr>


      <tr>
      
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="total" class="floated">Yes</button></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="total" class="floated">No</button></td>
        
      </tr>
    </tbody>
   
  </table>
</div> 

</form> -->
