
<link href="<?php base_url()?>assets/css/image.css" rel="stylesheet">
<div class="banner1">
  <div class="wthree_banner1_info">
    <h3><span>Transport</span> Booking Enquiry</h3>
  </div>
</div><hr/>
<div class="container">
  <div class="card-group">
    <div class="row">
          <div class="card col-md-4">
            <br><div class="card-body" align="center">
             <h4 style="color: blue;font-weight: bold"> 10 RS/- Per KM</h4>
             <br><h4 style="color: red;font-weight: bold;"> MINI</h4>
            </div>
          <img src="<?php base_url()?>assets/images/mini.jpg" alt=" " class="img-responsive card-img-top" onclick="modals()" /> 
          
          </div>
          <div class="card col-md-4"><br><div class="card-body" align="center">
             <h4 style="color: blue;font-weight: bold"> 12 RS/- Per KM</h4>
             <br><h4 style="color: red;font-weight: bold"> SEDAN</h4>
            </div>
         <img src="<?php base_url()?>assets/images/sedan.png" alt=" " class="img-responsive card-img-top" onclick="modals()"/>
            
          </div>
          <div class="card col-md-4"><br><div class="card-body" align="center" style="top:-20px">
             <h4 style="color: blue;font-weight: bold"> 16 RS/- Per KM</h4>
             <br><h4 style="color: red;font-weight: bold"> SUV</h4>
            </div><br><br>
           <img src="<?php base_url()?>assets/images/innova.png" alt=" " class="img-responsive card-img-top" onclick="modals()"/>
            
          </div>
        </div>
        </div>
        <div class="card-group">
          <div class="row">
          <div class="card col-md-6">
            <br><div class="card-body" align="center">
             <h4 style="color: blue;font-weight: bold"> 18 RS/- Per KM</h4>
             <br><h4 style="color: red;font-weight: bold"> TEMO Travelar</h4>
            </div>
           <img src="<?php base_url()?>assets/images/tempo.jpg" alt=" " class="img-responsive card-img-top" style="height: 220px" onclick="modals()" />
           
          </div>
          <div class="card col-md-6">
            <br><div class="card-body" align="center">
             <h4 style="color: blue;font-weight: bold"> 32 RS/- Per KM</h4>
             <br><h4 style="color: red;font-weight: bold"> BUS</h4>
            </div>
            <img src="<?php base_url()?>assets/images/transport1.jpg" alt=" " class="img-responsive card-img-top" onclick="modals()"/>
          </div>
        </div>
    </div>  
</div>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header btn-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: #fff; font-weight: bold">Booking Enquiry Form</h4>
        </div>
        <div class="modal-body">
          <h4><p><i>Once we receive the field form, we will contact you shortly to confirm Vehicle availability</i></p></h4>
          <form><div class="container">
  <div class="row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Full Name</label>
    <div class=" col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="First name">
    </div>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="Last name">
    </div>
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Email</label>
    <div class="col-sm-2">
        <input type="text" class="form-control form-control-sm" placeholder="Email">
    </div>    
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Phone</label>
    <div class="col-sm-2">
        <input type="text" class="form-control form-control-sm" placeholder="Phone">
    </div>    
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Address</label>
    <div class="col-sm-2">
        <input type="text" class="form-control form-control-sm" placeholder="Address line 1">
    </div> 
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm"></label>
    <div class="col-md-2 col-sm-2">
        <input type="text" class="form-control form-control-sm" placeholder="Address line 2">
    </div>    
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm"></label>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="City Name">
    </div>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="State Name">
    </div>
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm"></label>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="Postal/Pin Code">
    </div>
    <div class="col-md-2 col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="Country">
    </div>
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Seats</label>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="Number of Seats">
    </div>
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Vehicle</label>
    <div class="col-sm-2">
      <select class="form-control form-control-sm">
        <option> Select The Vehicles</option>
        <option>MINI</option>
        <option>Tempo Traveler</option>
        <option>Sedan</option>
        <option>Buses</option>
        <option>SUV</option>


      </select>
    </div>
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Place from</label>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="From Place">
    </div>
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Place To</label>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" placeholder="To Place">
    </div>
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">From Date</label>
    <div class="col-sm-2">
      <input type="date" class="form-control form-control-sm" placeholder="From Date">
    </div>
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">To Date</label>
    <div class="col-sm-2">
      <input type="date" class="form-control form-control-sm" placeholder="To Date">
    </div>
  </div>
  <div class="row" style="padding-top: 15px;">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Comments</label>
    <div class="col-sm-4">
        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Write Your Comments" required></textarea>
    </div>  
  </div> 
  <br>
</div>
</form>
        </div>
        <div class="modal-footer btn-primary">
          <button type="button" class="btn btn-info">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script type="text/javascript">
  function modals()
  {
    $('#myModal').modal('show');
  }
</script>