<div class="container-fluid homebg">
    <div class="row">
      <div class="col-lg-5 col-lg-5 col-xs-6 col-12"> &nbsp; </div>
      <div class="col-lg-7 col-lg-7 col-xs-6 col-12 p-0"> <img src="assets/images/home-bg.jpg"> </div>
    </div>
    <div class="container-xl">
      <div class="banner-section"> <span><?= $page->shortCode()->html() ?></span>
        <h1><span><?= $page->ModernInovationText()->html() ?></span> <span><?= $page->digital()->html() ?></span></h1>
        <h2><?= $page->shortCodeText()->html() ?></h2>
        <a href="#" class="btn-banner">Služby</a> <a href="#" class="btn-banner">Reference</a> </div>
    </div>
  </div>
  <!-----------------------------START NASE SLUZBY----------------------------------->
  <div class="container-fluid pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="wedesign-head">
            <h3><?= $page->ourService()->html() ?></h3>
            <h2><?= $page->ourServiceContent()->html() ?></h2>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="wedesign-content">
            <p><?= $page->ourServiceContentRight()->html() ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-70">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-6 col-12 ">
          <div class="servicelist red-left-border"> <img src="assets/images/icon-1.png">
            <h3><?= $page->block1()->html() ?></h3>
            <p><?= $page->block1content()->html() ?></p>
            <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-6 col-12 ">
          <div class="servicelist"> <img src="assets/images/icon-2.png">
            <h3><?= $page->block2()->html() ?></h3>
            <p><?= $page->block2content()->html() ?></p>
            <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-6 col-12 ">
          <div class="servicelist red-right-border"> <img src="assets/images/icon-3.png">
            <h3><?= $page->block3()->html() ?></h3>
            <p><?= $page->block3content()->html() ?></p>
            <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-6 col-12 ">
          <div class="servicelist red-left-border"> <img src="assets/images/icon-4.png">
            <h3><?= $page->block4()->html() ?></h3>
            <p><?= $page->block4content()->html() ?></p>
            <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-6 col-12 ">
          <div class="servicelist"> <img src="assets/images/icon-5.png">
            <h3><?= $page->block5()->html() ?></h3>
            <p><?= $page->block5content()->html() ?></p>
            <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-6 col-12 ">
          <div class="servicelist red-right-border"> <img src="assets/images/icon-6.png">
            <h3><?= $page->block6()->html() ?></h3>
            <p><?= $page->block6content()->html() ?></p>
            <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
        </div>
      </div>
    </div>
  
    <div class="container mt-70">
      <div class="row">
        <div class="col-12 dividehead">
          <h3><span><?= $page->blockClients()->html() ?></span></h3>
        </div>
        <div class="col-12">
          <div class="designlist">
            <ul>
              <li><img src="assets/images/ss-1.png"></li>
              <li><img src="assets/images/ss-2.png"></li>
              <li><img src="assets/images/ss-3.png"></li>
              <li><img src="assets/images/ss-4.png"></li>
              <li><img src="assets/images/ss-5.png"></li>
              <li><img src="assets/images/ss-6.png"></li>
              <li><img src="assets/images/ss-7.png"></li>
              <li><img src="assets/images/ss-8.png"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-----------------------------START OWL CAROUSEL----------------------------------->
  <div class="container-fluid pt-100 pb-100 bg-grey">
    <div class="container">
     <div class="row">
        <div class="col-12">
            <h2 class="project-head"><?= $page->blockStudy()->html() ?></h2>
      </div>
     </div> 
      <div class="row">
        <div class="col-12">
          <div class="demo-2 owl-carousel owl-theme">
            <div class="item">
              <div class="carouselslide"> 
              <span>Mobilni applikace</span>
              <img src="assets/images/o-1.svg" />
              <div class="owl-content">
                <p>??????????????? <br>
                  ????????????????????</p>
                <a href="#"  class="btn-white">Prohlednout si</a>
               </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselslide"> <span>Mobilni applikace</span> <img src="assets/images/o-2.svg" />
              <div class="owl-content">
                <p>???????????????<br>
                  ??????????????????</p>
                <a href="#"  class="btn-white">Prohlednout si</a> </div></div>
            </div>
            <div class="item">
              <div class="carouselslide"> <span>Mobilni applikace</span> <img src="assets/images/o-3.svg" /><div class="owl-content">
                <p>???????????????<br>
                  ??????????????????</p>
                <a href="#"  class="btn-white">Prohlednout si</a> </div></div>
            </div>
            <div class="item">
              <div class="carouselslide"> <span>Mobilni applikace</span> <img src="assets/images/o-4.svg" /><div class="owl-content">
                <p>??????????????<br>
                  ??????????????????</p>
                <a href="#" class="btn-white">Prohlednout si</a> </div></div>
            </div>          
             <div class="item">
              <div class="carouselslide"> 
              <span>Mobilni applikace</span>
              <img src="assets/images/o-1.svg" />
              <div class="owl-content">
                <p>??????????????? <br>
                  ????????????????????</p>
                <a href="#"  class="btn-white">Prohlednout si</a>
               </div>
              </div>
            </div>
            <div class="item">
              <div class="carouselslide"> <span>Mobilni applikace</span> <img src="assets/images/o-2.svg" />
              <div class="owl-content">
                <p>???????????????<br>
                  ??????????????????</p>
                <a href="#"  class="btn-white">Prohlednout si</a> </div></div>
            </div>
            <div class="item">
              <div class="carouselslide"> <span>Mobilni applikace</span> <img src="assets/images/o-3.svg" /><div class="owl-content">
                <p>???????????????<br>
                  ??????????????????</p>
                <a href="#"  class="btn-white">Prohlednout si</a> </div></div>
            </div>
            <div class="item">
              <div class="carouselslide"> <span>Mobilni applikace</span> <img src="assets/images/o-4.svg" /><div class="owl-content">
                <p>??????????????<br>
                  ??????????????????</p>
                <a href="#" class="btn-white">Prohlednout si</a> </div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-----------------------------END NASE PROJEKTY----------------------------------->
  <div class="container-fluid pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="conas-head">
            <h2> <?= $page->ourKnowleadge()->html() ?> <br>
              odlišuje od 
              ostatních?</h2>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="conaslist"> <img src="assets/images/m-1.png">
                <h3><?= $page->blockTechnologyHeadline()->html() ?> </h3>
                <p><?= $page->blockTechnology()->html() ?> </p>
                <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="conaslist"> <img src="assets/images/m-2.png">
                <h3><?= $page->blockSecurityHeadline()->html() ?> </h3>
                <p><?= $page->oblockSecurity()->html() ?> </p>
                <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="conaslist"> <img src="assets/images/m-3.png">
                <h3><?= $page->blockTeamHeadLine()->html() ?> </h3>
                <p><?= $page->blockTeam()->html() ?> </p>
                <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="conaslist"> <img src="assets/images/m-4.png">
                <h3><?= $page->blockQualityHeadLine()->html() ?> </h3>
                <p><?= $page->blockQuality()->html() ?> </p>
                <a href="#">Zjistit více <i class="fa fa-long-arrow-right"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-----------------------------START EFEKTIVNE----------------------------------->
  <div class="container-fluid pt-100 pb-100 bg-black border-red-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="efektivnce-head">
            <h3><?= $page->technologieHeadLine()->html() ?> </h3>
            <h2><?= $page->technologie()->html() ?> </h2>
          </div>
        </div>
      </div>
      <div class="row mt-70">
        <div class="col-lg-12">
          <div class="efektivncelist">
            <ul>
              <li><img src="assets/images/c-1.png"></li>
              <li><img src="assets/images/c-2.png"></li>
              <li><img src="assets/images/c-3.png"></li>
              <li><img src="assets/images/c-4.png"></li>
              <li><img src="assets/images/c-5.png"></li>
              <li><img src="assets/images/c-6.png"></li>
              <li><img src="assets/images/c-7.png"></li>
              <li><img src="assets/images/c-8.png"></li>
              <li><img src="assets/images/c-9.png"></li>
              <li><img src="assets/images/c-10.png"></li>
              <li><img src="assets/images/c-11.png"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-----------------------------START NAVRHUJEME----------------------------------->
  <div class="container-fluid pt-100 pb-100 navrhujeme">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2><?= $page->blockDesignHeadLine()->html() ?> </h2>
          <p><?= $page->blockDesign()->html() ?> </p>
          <a href="#" class="btn-red bg-red"><?= $page->btnOnas()->html() ?></a> <a href="#" class="btn-white"><?= $page->btnKariera()->html() ?></a> </div>
        <div class="col-lg-6"> <img src="assets/images/bottombg.png"> </div>
      </div>
    </div>
  </div>
  <!-----------------------------START CONTACT----------------------------------->
  <div class="container-fluid pt-100 pb-100 bg-grey">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="contacticon"> <i class="fa fa-thumbs-up"></i> </div>
          <div class="contactinfo socialmedia">
            <h2><?= $page->followUs()->html() ?> </h2>
            <p><?= $page->followUsText()->html() ?> </p>
            <ul>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="contacticon"> <i class="fa fa-map-marker"></i> </div>
          <div class="contactinfo contactadd">
            <h2> <?= $page->contactHeader()->html() ?> </h2>
            <p><?= $page->street()->html() ?> <br>
            <?= $page->zip()->html() ?> <br>
            <?= $page->city()->html() ?> <br>
            <?= $page->country()->html() ?> </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="contacticon"> <i class="fa fa-phone"></i> </div>
          <div class="contactinfo contact-detail">
            <h2><?= $page->callUsHeader()->html() ?> </h2>
            <p><?= $page->callUs()->html() ?>  <a href="tel:+420773759527"> </a></p>
            <p><?= $page->email()->html() ?>  <a href="mailto:info@unicoeurope.com"> <?= $page->emailFull()->html() ?></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="contacticon"> <i class="fa fa-pencil"></i> </div>
          <div class="contactinfo contact-write b-r-none">
            <h2> <?= $page->writeUs()->html() ?> </h2>
            <p><?= $page->needMeeting()->html() ?> </p>
            <a class="btn-chci" href="#"><?= $page->meetingNow()->html() ?> </a> </div>
        </div>
      </div>
    </div>
  </div>