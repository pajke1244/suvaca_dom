 <?php require ('top.php'); ?>

 <?php 

//funkcija za prikazivanje kategorija

 $sql= "SELECT * FROM categories";
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
                  <div class="">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Categories title</th>                              
                              <th>Status</th>
                              <th>Action</th>
                              <th>Action</th>
                              <th>Action</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <?php 
                        if ($result) {                  
                          while ($row=mysqli_fetch_assoc($result)) { 
                           if ($row['status']==1) {
                              $status_n='dostupno';
                           }else{
                              $status_n='nedostupno';
                           }
                           ?>
                           <tbody>
                              <tr>                         
                                 <td> <span class=""><?php echo $row['id'] ?></span> </td>
                                 <td> <span class=""><?php echo $row['categories_name'] ?></span> </td>
                                 <td> <span class=""><?php echo $status_n ?></span> </td>
                                 <td><a class="btn btn-primary" href='categories.php?approve=<?php echo $row['id'] ?>'>Dostupno</a></td>                  
                                 <td><a class="btn btn-primary" href='categories.php?unapproved=<?php echo $row['id'] ?>'>Nedostupno</a></td>
                                 <td><a class="btn btn-info" href='new_categories.php?new'>Dodaj</a></td>                 
                                 <td><a class="btn btn-danger" href='categories.php?delete=<?php echo $row['id'] ?>'>Delete</a></td>                 
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
   //unpprove funkcija
if (isset($_GET['unapproved'])) {
   $the_unapprove_cat=$_GET['unapproved'];
   $query=" UPDATE  categories set status = '0' where id= $the_unapprove_cat ";
   $cat_unpprove=mysqli_query($conn,$query);
   header("Location: categories.php");

}

//approve funkcija

if (isset($_GET['approve'])) {
   $the_approve_cat=$_GET['approve'];
   $query=" UPDATE  categories set status = '1' where id= $the_approve_cat ";
   $cat_approve=mysqli_query($conn,$query);
   header("Location: categories.php");

}

//delete funkcija
if (isset($_GET['delete'])) {
   $the_delete_cat=$_GET['delete'];
   $query=" delete from categories where id=$the_delete_cat ";
   $cat_delete=mysqli_query($conn,$query);
   header("Location: categories.php");

}



?>