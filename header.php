 <!DOCTYPE html>
<html>
<head>
    <title>Information</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

<section>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark " >
        <div class="container">
            <a href="" class="navbar-brand">Lizu  (-_-)</a>
            <ul class="navbar-nav">
                <li>
                    <a href="action.php?page=home" class="nav-link ">Home</a>
                </li>
                <li>
                    <a href="" class="nav-link">About</a>
                </li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">product Category</a>
                    <ul class="dropdown-menu">
                        <?php  foreach ($category as $category) { ?>
                            <li>
                                <a href="action.php?page=category&&id=<?php echo $category['id']?>" class="dropdown-item">
                                    <?php echo $category['category_name'];?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>

                <li>
                    <a href="" class="nav-link">Contact</a>
                </li>

            </ul>
        </div>
    </nav>
</section>
