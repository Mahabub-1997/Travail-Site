<?php include 'header.php' ?>

    <section class="pt-5">
        <div class="container">
            <div class="card table-bordered table-striped">
                <div class="row">
                    <div class="col-md-6">
                         <img src="asset/img/<?php echo $product['image'] ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3><?php echo $product['name'] ?></h3>

                        <h6><?php echo $product['price'] ?></h6>
                        <p><?php echo $product['description'] ?></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php' ?>
