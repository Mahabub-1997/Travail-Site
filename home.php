   <?php include 'header.php';?>



   <section class="py-5">
       <div class="container">
           <div class="row">

               <?php foreach ($product as $product) { ?>

               <div class="col-md-3">
                   <div class="card table-striped table-bordered">
                       <img src="asset/img/<?php echo $product['image'] ?>" alt="">
                       <div class="card-body ">
                           <h5 class="card-title">
                               <?php echo $product['name'] ?>
                           </h5>
                           <p class="card-text">
                               <?php echo $product['price'] ?>
                           </p>
                           <hr>
                           <a href="action.php?page=details&id=<?php echo $product['id'] ?>" class="btn btn-primary"> Details</a>
                       </div>
                   </div>
               </div>

               <?php } ?>

           </div>
       </div>
   </section>

   <?php include 'footer.php';?>