<!DOCTYPE html>
 <?php
            // main menu items
            $items = $pages->listed();
            // only show the menu if items are available
            if($items->isNotEmpty()):
            ?>
<html lang="en">
<head>
  <title><?= $site->title() ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?=css("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" ) ?> 
  <?=css("assets/css/bootstrap.min.css" ) ?> 
  <?=css("assets/css/owl.carousel.css") ?>
  <?=css('assets/css/style.css') ?> 
  
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-3"><a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg"> <span></span></a> </div>
          <div class="col-lg-6 col-9">
            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
            <div class="nav-section collapse navbar-collapse justify-content-left" id="navbar-collapse-toggle">
            <nav>
            <ul class="navbar-nav ml-auto">
              <?php foreach($items as $item): ?>
                <li class="nav-item"><a class="nav-link"<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
            <?php endforeach ?>
            </ul>
            </nav>
            <?php endif ?>
            </div>
          </div>
          <div class="col-lg-4 d-none d-lg-block"> <a class="btn-chci" href="#">Chci schůzku</a> <a class="btn-call" href="tel:+420 773 759 527"><img src="assets/images/call.svg"> 420 773 759 527</a> </div>
        </div>
      </div>
    </nav>
  </header>