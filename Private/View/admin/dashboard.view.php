<?php

$this->view("admin/adminIncludes/header");
?>


<div class="container-fluid wrapper p-0">

    <?php $this->view("admin/adminIncludes/sidebar"); ?>

    <div class="content position-relative">

         <?php $this->view("admin/adminIncludes/navbar"); ?>

         <div class="main-content">
            <h1>Content</h1>
         </div>
    </div>
</div>


<?php


$this->view("admin/adminIncludes/footer");


?>