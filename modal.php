<!-- Modal one -->
<div class="modal fade" id="modalOne">
  <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="appliances-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="appliances" aria-selected="true"><i class="fas fa-tools"></i> Appliances & Electronics Repair</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="electrician-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="electrician" aria-selected="false"><i class="fas fa-charging-station"> </i>Electrician</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="plumber-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="plumber" aria-selected="false"><i class="fas fa-shower"></i>Plumber</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="carpenter-tab" data-toggle="tab" href="#carpenter" role="tab" aria-controls="carpenter" aria-selected="false"><i class="fas fa-couch"></i>Carpenter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="painting-tab" data-toggle="tab" href="#painting" role="tab" aria-controls="painting" aria-selected="false"><i class="fas fa-paint-roller"></i>Home Painting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="income-tab" data-toggle="tab" href="#income" role="tab" aria-controls="income" aria-selected="false"><i class="fab fa-btc"></i>Income Tax Filling</a>
              </li>
            </ul>
          </div>
          <div class="col-6">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="appliances-tab">
                <ul class="nav flex-column tab-content-nav" id="list">
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="1" > AC Services and Repair</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="2" > Washing Machine Services and Repair</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="3" > RO Water Purifier Services</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="4" > Other Services</a> </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="electrician-tab">
                <ul class="nav flex-column tab-content-nav" id="list">
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="5" > Repair</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="6" > Wiring</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="7" > New Installation</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="8" > Other Services</a> </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="plumber-tab">
                <ul class="nav flex-column tab-content-nav" id="list">
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="9" > Pipe and Tab Fitting</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="10" > Water Leakages Repair and Fix</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="11" > Installation Services</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="12" > Other Services</a> </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="carpenter" role="tabpanel" aria-labelledby="carpenter-tab">
                <ul class="nav flex-column tab-content-nav" id="list">
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="13" > Furniture Made and Repair</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="14" > Other Services</a> </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="painting" role="tabpanel" aria-labelledby="painting-tab">
                <ul class="nav flex-column tab-content-nav" id="list">
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="15" > Home Painting</a> </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="income" role="tabpanel" aria-labelledby="income-tab">
                <ul class="nav flex-column tab-content-nav" id="list">
                  <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target="#modalTwo" id="16" > Income Tax Filling</a> </li>
                </ul>
              </div>

            </div><!-- / tab-content -->
          </div>
        </div>
      </div>

    </div>
  </div><!-- / modal-dialog modal-lg -->
</div><!-- / modal -->

<!-- modal one start -->
<div class="modal fade" id="modalTwo">
  <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="headTag"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <p id="here"></p>
          </div>
          <div class="col-6">
            <form class="" action="" method="post">
              <div class="form-group">
                <input type="text" name="name" class="form-control" value="" placeholder="Name"  required>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="address" class="form-control address" placeholder="Address" required>
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit"> <i class="fas fa-map-marker-alt"></i> </button>
                   </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control phone" value="" placeholder="Phone number" required maxlength="10" >
                <!-- <span class="error" style="color: red; display: none">* Input digits (0 - 9)</span> -->
              </div>
              <button type="submit" class="btn btn-outline-danger">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- / modal-dialog modal-lg -->
</div><!-- / modal -->

<script type="text/javascript" >
  $(document).ready(function() {
   $('#list li a').click(function() {
     //Get the id of list items
       var ID = $(this).attr('id');
     //alert(ID);
     var headTag;
     var detail;
     if (ID == 1) {
       // detail = "first";
       headTag = "AC services in Ranchi";
       detail = "Get AC services in Ranchi at your place within 90 minutes. We offer you a 30 Day service guarantee. We provide you with background verified trained technician who is well equipped with their equipment. Only genuine spare parts are supplied with fixed pricing.";
       // document.getElementById("here").innerHTML = detail;
     }
     if (ID == 2) {
       headTag = "Washing machine in Ranchi";
       detail = "Get Washing Machine repair in Ranchi near you within 90 minutes. If you're tired of the frequent breakdown of your washing machine, then don't worry, we've got you covered. We understand how frustrating it can get and thus give you a platform to hire the best technicians to undertake washing machine repair service near you. Get that faulty washing machine fixed right away. Book now at Seva@Home!";
       // document.getElementById("here").innerHTML = detail;
     }
     if (ID == 3) {
       headTag = "Best RO repair services in Ranchi";
      detail ="Are you looking for the best RO repair service in Ranchi? At Ranchi, we provide you with a platform wherein you can hire the best RO service experts near you! We have a team of trusted Ranchi professionals who strive hard to deliver you the best RO repair service near you";
     }
     if (ID == 4) {
       headTag = "AC services in Ranchi";
      detail ="For other services regarding Appliances And Electronics you can Contact Us.";
     }
     if (ID == 5) {
       headTag = "Get electrician in Ranchi";
      detail ="Get Electricians in Ranchi near you within 90 minutes. Seva@Home will help you in taking away the pain of finding the trusted electricians to cater to your needs, right at the comfort of your home. With reasonable pricing, you can book electrician online anywhere in Ranchi with just a few clicks.";
     }
     if (ID == 6) {
       headTag = "Get electrician in Ranchi";
      detail ="Seva@Home will help you in taking away the pain of finding the trusted electricians to cater to your needs, right at the comfort of your home. With reasonable pricing, you can book electrician online anywhere in Ranchi with just a few clicks.";
     }
     if (ID == 7) {
       headTag = "Get electrician in Ranchi";
      detail ="Seva@Home will help you in taking away the pain of finding the trusted electricians to cater to your needs, right at the comfort of your home. With reasonable pricing, you can book electrician online anywhere in Ranchi with just a few clicks.";
     }
     if (ID == 8) {
       headTag = "Get electrician in Ranchi";
      detail ="For other services regarding Electrician you can Contact Us.";
     }
     if (ID == 9) {
       headTag = "Get Plumber in Ranchi";
      detail ="For Pipe and Tab Fitting, get Plumbers in Ranchi near you within 90 minutes.";
     }
     if (ID == 10) {
       headTag = "Get Plumber in Ranchi";
      detail ="Get Plumbers in Ranchi near you within 90 minutes for fix water leakage problems";
     }
     if (ID == 11) {
       headTag = "Get best Plumber in Ranchi";
      detail ="For new installation, get Plumbers in Ranchi near you within 90 minutes. With reasonable pricing, you can avail our Plumbing services anywhere in Ranchi with just a few clicks. Book Now!";
     }
     if (ID == 12) {
       headTag = "Get Plumber in Ranchi";
      detail ="For other types of plumber service book Plumber Now!";
     }
     if (ID == 13) {
       headTag = "Best Carpenter in Ranchi";
      detail ="Get Carpenters in Ranchi near you within 90 minutes. Ranchi will help you in taking away the pain of finding a trusted Carpenter to cater to your needs, right at the comfort of your home.";
     }
     if (ID == 14) {
       headTag = "Best Carpenter in Ranchi";
      detail ="Seva@Home’s trained and certified carpenters offer hassle-free service in Ranchi. For other types of Carpenter service book Plumber Now!. ";
     }
     if (ID == 15) {
       headTag = "Best Home Penter in Ranchi";
      detail ="Get Home Penter in Ranchi near you within 90 minutes. With reasonable pricing, you can book penter online anywhere in Ranchi with just a few clicks.";
    }
    if (ID == 16) {
      headTag = "Get Tax Filling services in Ranchi";
     detail ="Seva@Home also provide the service of tax filling. For tax filling contact us now!";
    }

    document.getElementById("headTag").innerHTML = headTag;
     document.getElementById("here").innerHTML = detail;
   });
   });

</script>

<!--   phone number validation*  -->
<script type="text/javascript">
$(document).ready(function() {

$(".phone").bind("keypress", function (e) {

    var keyCode = e.which ? e.which : e.keyCode
    if (!(keyCode >= 48 && keyCode <= 57)) {
      // $(".error").css("display", "inline");
      return false;
    }
    // else{
    //   $(".error").css("display", "none");
    // }

});
});
</script>
