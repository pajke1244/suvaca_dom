 <?php require ('top.php'); ?>

 <?php 

//funkcija za prikazivanje usera

 $sql= "SELECT * FROM admin_users";
 $result=mysqli_query($conn,$sql);
 ?>
 <div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Orders </h4>
               </div>
               <div class="card-body--">
                  <div style="width: 100%;">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>ID</th>                              
                              <th>Username</th>                              
                              <th>Action</th>
                           </tr>
                        </thead>
                        <?php 
                        if ($result) {                  
                          while ($row=mysqli_fetch_assoc($result)) { ?>
                           <tbody>
                              <tr>                         
                                 <td> <span class=""><?php echo $row['id'] ?></span> </td>
                                 <td> <span class=""><?php echo $row['username'] ?></span> </td>
                                 <td><a class="btn btn-danger" href='admin.php?delete=<?php echo $row['id'] ?>'>Delete</a></td>                 
                              </tr>
                           </tbody>
                        <?php }
                     }else{
                        echo "DOSLO JE DO GRESKE";
                     }
                     ?>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>     
<?php require ('footer.php'); ?>


<?php 

//delete funkcija
if (isset($_GET['delete'])) {
   $the_delete_admin=$_GET['delete'];
   $query=" delete from admin_users where id=$the_delete_admin ";
   $admin_delete=mysqli_query($conn,$query);
   header("Location: admin.php");

}



?>