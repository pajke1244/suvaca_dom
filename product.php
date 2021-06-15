 <?php require ('top.php'); ?>

 <?php 

//funkcija za prikazivanje proizvoda
 $sql= "SELECT * from product ";
 $result=mysqli_query($conn,$sql);
 ?>
 <div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Proizvodi </h4>
               </div>
               <div class="card-body--">
                  <div class="">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>ID</th>                              
                              <th>Kategorija</th>                              
                              <th>Naziv proizvoda</th>
                              <th>Cena</th>
                              <th>Kolicina</th>
                              <th>Slika</th>
                              <th>Kratki opis</th>
                              <th>Status</th>
                              <th>Action</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <?php 
                        if ($result) {                  
                         while ($row=mysqli_fetch_assoc($result)) { 
                           if ($row['status']==1) {
                              $status_n='Na stanju';
                           }else{
                              $status_n='Nema na stanju';
                           }

                           ?>
                           <tbody>
                              <tr>                         
                                 <td> <span class=""><?php echo $row['id'] ?></span> </td>
                                 <td> <span class=""><?php echo $row['categories_id'] ?></span> </td>
                                 <td> <span class=""><?php echo $row['product_name'] ?></span> </td>
                                 <td> <span class=""><?php echo $row['product_price'] ?></span> </td>
                                 <td> <span class=""><?php echo $row['product_qty'] ?></span> </td>
                                 <td> <span class=""><?php echo $row['product_image'] ?></span> </td>
                                 <td> <span class=""><?php echo $row['short_desc'] ?></span> </td>
                                 <td> <span class=""><?php echo $status_n ?></span> </td>
                                 <td><a class="btn btn-danger" href='product.php?delete=<?php echo $row['id'] ?>'>Delete</a></td>                 
                                 <td><a class="btn btn-info" href='new_product.php?add_new'>Dodaj</a></td>                 
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