
<link href="<?php base_url()?>assets/css/image.css" rel="stylesheet">
<div class="banner1">
  <div class="wthree_banner1_info">
    <h3><span>Hotel</span>Booking</h3>
  </div>
</div><hr/>
<section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <img src="<?php base_url()?>assets/images/hotel.jpg" alt=" " class="img-card img-thumbnail" onclick='modals("<?php echo base_url()."assets/images/hotelbooking/";?>","s1.jpg","ss3.jpg","ss4.jpg","ss2.jpg","s5.jpg","ss6.jpg","HOTEL SAMUDRA")'/>
                        <div class="card-title" align="center" style="color: blue;font-weight: bold">Hotel Samudra</div></div>

                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <img src="<?php base_url()?>assets/images/palladium.jpg" alt=" " class="img-card img-thumbnail" onclick='modals("<?php echo base_url()."assets/images/hotelbooking/";?>","h1.jpg","h2.jpg","h3.jpg","h4.jpg","h5.jpg","h6.jpg","HOTEL PALLADIUM")'/>
                            <div class="card-title" align="center" style="color: blue;font-weight: bold">Hotel Palladium</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <img src="<?php base_url()?>assets/images/galaxy.jpg" alt=" " class="img-card img-thumbnail" onclick='modals("<?php echo base_url()."assets/images/hotelbooking/";?>","g1.jpg","g2.jpg","g3.jpg","g4.jpg","g5.jpg","g6.jpg","HOTEL THE GALAXY")'/>
                            <div class="card-title" align="center" style="color: blue;font-weight: bold">Hotel The Galaxy</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <img src="<?php base_url()?>assets/images/orchid.jpg" alt=" " class="img-card img-thumbnail" onclick='modals("<?php echo base_url()."assets/images/hotelbooking/";?>","o1.jpg","o2.jpg","o3.jpg","o4.jpg","o5.jpg","o6.jpg","HOTEL ORCHARD RESORT")'/>
                            <div class="card-title" align="center" style="color: blue;font-weight: bold">Hotel Orchard Resort</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <img src="<?php base_url()?>assets/images/westfort.jpg" alt=" " class="img-card img-thumbnail" onclick='modals("<?php echo base_url()."assets/images/hotelbooking/";?>","w1.jpg","w2.jpg","w3.jpg","w4.jpg","w5.jpg","w6.jpg","HOTEL WESTFORT")'/>
                            <div class="card-title" align="center" style="color: blue;font-weight: bold">Hotel WestFort</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header btn-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: #fff; font-weight: bold" ><span id='hotel'></span></h4>
        </div>
        <div class="modal-body">
          <br>
          <section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container" id="tabs">
                


            </div>
        </div>

    </div>
</section>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
  function modals(url,data1,data2,data3,data4,data5,data6,hotelname)
  {
    //alert(url+data1);
    $('#myModal').modal('show');
    var data=data1.split(":");
    var count=data.length;
    $("#tabs").html("");
    $("#hotel").html("");
    str="<div class='row'><div class='col-lg-3'><div class='card'><img src='"+url+data1+"' alt=' ' class='img-card img-thumbnail' style='height: 200px;'/></div></div><div class='col-lg-3'><div class='card'><img src='"+url+data2+"' alt=' ' class='img-card img-thumbnail' style='height: 200px;'/></div></div><div class='col-lg-3'><div class='card'><img src='"+url+data3+"' alt=' ' class='img-card img-thumbnail' style='height: 200px;'/></div></div></div><div class='row'><div class='col-lg-3'><div class='card'><img src='"+url+data4+"' alt=' ' class='img-card img-thumbnail' style='height: 200px;'/></div></div><div class='col-lg-3'><div class='card'><img src='"+url+data5+"' alt=' ' class='img-card img-thumbnail' style='height: 200px;'/></div></div><div class='col-lg-3'><div class='card'><img src='"+url+data6+"' alt=' ' class='img-card img-thumbnail' style='height: 200px;'/></div></div></div>";
  str+="<div class='container' align='center'><div class='row'><div class='col-lg-9'><input type='button' class='btn btn-primary' value='Enquiry' onclick='linkss()' target='_blank'></div></div><div><br>";
    $("#tabs").append(str);
    $("#hotel").append(hotelname);
  }
  function linkss()
  {
    window.location='https://payments.djubo.com/accounts/E8-IWXFIDQarGG7dQ7ydYQ/properties/GJvlOeuURHlc9sySIc7Dfg/payment/custom-payment/';
  }
</script>


