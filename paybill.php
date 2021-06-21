

  <h2 align="center">Consumer's Bill</h2><hr>

<p><?php $date1=date('m/d/y h:i:s');
 echo $date1;?></p>

 <?php 
     
     $meterno = $_GET['meter_no'];
     

                                              
  include('includes/dbconfig.php');
  $ref = "Bill Info/";


$getdata = $database ->getReference($ref)->getChild($meterno)->getValue();


 ?>
 <h3>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $getdata['name']; ?></h3> 
 
 <form  method="post" action="addbill.php">
 <input type="hidden" name="meter_no" value="<?php echo $meterno; ?>" />
<div>    
  <table class="table" width="500px">
    <thead>
      <tr>
  <input type="hidden"  /> 
  <input type="hidden" value="<?php echo $date1; ?>" />
    <td width="118">Present Reading:</td>
    <td width="66"><input type="text" name="last_unit" value="<?php echo $getdata['last_unit']; ?>" /> </td>
    <td>Cubic meter</td>
    <td><input type="hidden" name="name" value="<?php echo $getdata['name']; ?>"   /></td>
    
      </tr>
    </thead>
    
    <tbody>
      <tr>
     <td>Initial Amount:</td>
    <td><input type="text" name="pending_amount" value="<?php echo $getdata['pending_amount']; ?>" /></td>
    <td>PHP</td>
   
    
    <td><input type="hidden" name="deduction" value="<?php echo $getdata['deduction']; ?>"   /></td>
   
     </tr>
     <tr> 
     <td>Due Date:</td>
    <td><input type="text" name="due_date" value="<?php echo $getdata['due_date']; ?>"  /></td>
     </tr>
     <tr>
       <td>Remaining Installation Fee:</td>
    <td><input type="text"  name="lastinsfee" value="<?php echo $getdata['lastinsfee']; ?>" /></td>
    <td>PHP</td>
  </tr>
      <tr>
     <td>Penalty:</td>
    <td><input type="text" required placeholder="Enter 0 if none" name="penalty" value="<?php echo $getdata['penalty']; ?>"/></td>
    <td>PHP</td>
    
    <td><input type="hidden" name="c_no" value="<?php echo $getdata['c_no']; ?>" /></td>
   
    
     </tr>
     
     <tr>
     <td style="color:#F00;">Amount Paid</td>
    <td><input type="text"   required name="amount_paid" value="<?php echo $getdata['amount_paid']; ?>"/></td>
    <td>PHP</td>
    <td><input type="hidden" name="subamount" value="<?php echo $getdata['subamount']; ?>" /></td>
     </tr>
    
      <tr>
     
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="total" class="btn btn-default">ADD</button></td>
      </tr>
    </tbody>
   
  </table>
</div> 

</form>
