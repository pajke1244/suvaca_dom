<?php require ('top.php'); ?>
<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header"><strong>Add</strong><small> Category</small></div>
               <div class="card-body card-block">
                  <div class="form-group">
                     <label for="company" class=" form-control-label">Category name</label>
                     <input type="text" id="company" placeholder="Enter your category name" name="category" class="form-control">
                  </div>            
                  <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="insert">
                     <span id="payment-button-amount">Insert</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
<?php require ('footer.php'); ?>