<?php include 'header.php' ?>

<section class="pt-5">
    <div class="container">
        <div class="card table-bordered table-striped">
            <div class="row">
                <?php  foreach ($products as $product) { ?>
                <div class="card">
                    <div class="col-md-3">
                           <div class="card-header">
                               <img src="asset/img/<?php echo $product['image'] ?>" class="img-fluid" alt="">
                           </div>

                            <div class="card-title">
                                <h6><?php echo $product['name'] ?></h6>
                            </div>
                           <div class="card-text">
                               <h6><?php echo $product['price'] ?></h6>
                           </div>
                        <hr>
                        <a href="action.php?page=details&id=<?php echo $product['id'] ?>" class="btn btn-primary"> Details</a>
                      </div>

                <?php } ?>
               </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>

