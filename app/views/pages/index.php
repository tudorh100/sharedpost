<?php   require_once APPROOT . '/views/inc/header.php';  ?>
<div class="jumbotron jumbotron-flud text-center">
<div class="container">
<!-- coming from the controler/pages.php  index class file -->
<h1 class="display-3"><?php echo $data['title'];?>  </h1>
<!-- coming from the controler/pages.php file -->

<p class="lead"><?php echo $data['description'];?>
</p>
</div>

</div>

<?php   require_once APPROOT . '/views/inc/footer.php';  ?>
