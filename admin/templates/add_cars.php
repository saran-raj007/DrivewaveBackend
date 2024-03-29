<?php require_once 'include/top.php'; ?>
<?php require_once 'include/sidemenu.php'; ?>
{% include "include/top.php" %}
{% include "include/sidemenu.php" %}


<div class="content-body">
    <div class="container-fluid">
        <div class="reservation-area">
            <h3>Add Cars</h3>
            <div class="form-body special_services">
                <form action="#" method="POST">
                    <div class="guest-information-area">
                        <h4>Car Information</h4>
                        <span id="errmsg"></span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-block">
                                    <label for="guestsub" class="form-label">Car Name and model</label>
                                    <div class="input-text">
            
                                        <input type="text" class="form-control" id="carname" name="carname" placeholder="Car Name and model" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-block">
                                    <label for="guestnumber" class="form-label">Fuel type</label>
                                    <div class="input-text">
                                        <select class="form-control wide" id="carfuel" name="carfuel" required>
                                            <option value="" selected disabled>Select Fuel type</option>
                                            <option value="Petrol" >Petrol</option>
                                            <option value="Diesel" >Diesel</option>
                                            <option value="Electric" >Electric</option>
                                            
                                        </select>
                                   </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-block">
                                    <label for="guestemail" class="form-label">Cost pre/Hr</label>
                                    <input type="number" class="form-control" name="costperhr" min="0" id="costperhr" placeholder="cost per/hr" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block">
                                    <label for="guestnumber" class="form-label">Vehicle type</label>
                                    <div class="input-text">
                                        <select class="form-control wide" id="vehicletype" name="vehicletype" required>
                                            <option value="" selected disabled>Select Vehicle type</option>
                                            <option value="scooter" >Hatchback</option>
                                            <option value="motorcycle" >Sedan</option>
                                            <option value="motorcycle" >SUV</option>
                                            <option value="motorcycle" >Luxury</option>
                                            {% for i in category%}
                                            <option value="{{i.cat_name}}">{{i.cat_name}}</option>
                                            {% endfor %}
                                            
                                            
                                        </select>
                                   </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-block">
                                    <label for="guestnumber" class="form-label">City Name</label>
                                    <div class="input-text">
                                        <select class="form-control wide" id="bikefuel" name="bikefuel" required>
                                            <option value="" selected disabled>Select city</option>
                                            <option value="Petrol" >Petrol</option>
                                            <option value="Electric" >Electric</option>
                                            {% for i in category%}
                                            <option value="{{i.cat_name}}">{{i.cat_name}}</option>
                                            {% endfor %}
                                            
                                            
                                        </select>
                                   </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-block">
                                    <label for="guestnumber" class="form-label">vehicle Location</label>
                                    <div class="input-text">
                                        <select class="form-control wide" id="bikefuel" name="bikefuel" required>
                                            <option value="" selected disabled>Select vehicle location</option>
                                            <option value="Petrol" >Petrol</option>
                                            <option value="Electric" >Electric</option>
                                            {% for i in category%}
                                            <option value="{{i.cat_name}}">{{i.cat_name}}</option>
                                            {% endfor %}
                                            
                                            
                                        </select>
                                   </div>
                                    
                                </div>
                           
                           
                           
                        </div>
                    </div>
                    <div class="col-xl-12">
                                <div class="mb-3 row">

                                    <div class="col-lg-12">
                                        <label class="col-lg-12 col-form-label" for="validationCustom01">Car IMages

                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="mb-3 row guestadd expense">
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">

                                                    <div class="col-lg-12">
                                                        <div class="input-block profile">
                                                            <p>Image 1<span class="text-danger">*</span></p>
                                                                <label for="pimage1" class="form-label"><img id="addoutput" src="templates/images/profile/profile1.png"></label>
                                                            <input type="file" accept="image/*" name="pimage1" id="pimage1" oninput="addoutput.src=window.URL.createObjectURL(this.files[0])" required>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">

                                                    <div class="col-lg-12">
                                                        <div class="input-block profile">
                                                            <p>Image 2<span class="text-danger">*</span></p>
                                                            <label for="pimage2" class="form-label"><img id="addoutput1" src="templates/images/profile/profile1.png"></label>
                                                            <input type="file" accept="image/*" name="pimage2" id="pimage2" oninput="addoutput1.src=window.URL.createObjectURL(this.files[0])" required>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">

                                                    <div class="col-lg-12">
                                                        <div class="input-block profile">
                                                            <p>Image 3<span class="text-danger">*</span></p>
                                                            <label for="pimage3" class="form-label"><img id="addoutput2" src="templates/images/profile/profile1.png"></label>
                                                            <input type="file" accept="image/*" name="pimage3" id="pimage3" oninput="addoutput2.src=window.URL.createObjectURL(this.files[0])" required>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">

                                                    <div class="col-lg-12">
                                                        <div class="input-block profile">
                                                            <p>Image 4<span class="text-danger">*</span></p>
                                                            <label for="pimage4" class="form-label"><img id="addoutput3" src="templates/images/profile/profile1.png"></label>
                                                            <input type="file" accept="image/*" name="pimage4" id="pimage4" oninput="addoutput3.src=window.URL.createObjectURL(this.files[0])" required>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                <h5><strong>Extra features in Car</strong></h5>
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <label for="product_discription+" class="form-label">Transmission</label>
                                    <div class="input-text">
                                        <select class="form-control wide" id="transmission" name="transmission" required>
                                            <option value="" selected disabled>Select Transmission type</option>
                                            <option value="scooter" >Manual</option>
                                            <option value="motorcycle" >Automatic</option>
                                            
                                            
                                            
                                        </select>
                                   </div>
                                  </div>
                                  <div class="mb-3 col-md-6 col-sm-6">
                                    <label for="product_methodOfUse" class="form-label">Seats</label>
                                    <div class="input-text">
                                        <select class="form-control wide" id="seats" name="seats" required>
                                            <option value="" selected disabled>Select Seats</option>
                                            <option value="scooter"> 4/5 seater</option>
                                            <option value="motorcycle"> 6/7 seater</option>                                            
                                        </select>
                                   </div>
                                  </div>  
                               
                                <h5><strong>Others</strong></h5>
                                <div class="mb-3 col-md-3 col-sm-2">
                                    <input type="checkbox" id="airbags" name="airbags"/>
                                    <label>2 Front Airbags</label>
                                </div>
                                <div class="mb-3 col-md-3 col-sm-2">
                                    <input type="checkbox" id="musicsystem" name="musicsystem"/>
                                    <label>Music System</label>
                                </div>
                                <div class="mb-3 col-md-3 col-sm-2">
                                    <input type="checkbox" id="usbcharger" name="usbcharger"/>
                                    <label> USB charger</label>
                                </div>
                                <div class="mb-3 col-md-3 col-sm-2">
                                    <input type="checkbox" id="powersteering" name="powersteering"/>
                                    <label> Power steering</label>
                                </div>
                                <div class="mb-3 col-md-3 col-sm-2">
                                    <input type="checkbox" id="airconditioning" name="airconditioning"/>
                                    <label>Air Conditioning</label>
                                </div>
                                <div class="mb-3 col-md-3 col-sm-2">
                                    <input type="checkbox" id="toolkit" name="toolkit"/>
                                    <label> Toolkit</label>
                                </div>
                                <div class="mb-3 col-md-3 col-sm-2">
                                    <input type="checkbox" id="reversecam" name="reversecam"/>
                                    <label>  Reverse Camera</label>
                                </div>
                                <div class="mb-3 col-md-3 col-sm-2">
                                    <input type="checkbox" id="sparetyre" name="sparetyre"/>
                                    <label>Spare Tyre</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="add_car()" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


{% include "include/bottom.php" %}
<?php require_once 'include/bottom.php'; ?>
<script type="text/javascript">
    function add_car(){
        
      var formData = new FormData();
      formData.append("productname", $("#productname").val());
      formData.append("pcategory", $("#pcategory").val());
      formData.append("quantity", $("#quantity").val());
      formData.append("price", $("#price").val());
      formData.append("ptype",$("#ptype").val());
      formData.append("pimage1", $("#pimage1")[0].files[0]);
      formData.append("pimage2", $("#pimage2")[0].files[0]);
      formData.append("pimage3", $("#pimage3")[0].files[0]);
      formData.append("pimage4", $("#pimage4")[0].files[0]);
      formData.append("product_discription", $("#product_discription").val());
      formData.append("product_methodofuse", $("#product_methodofuse").val());
      formData.append("product_benefits", $("#product_benefits").val());

      $.ajax({
        type :"POST",
        url:"/admin/addnew_product",
        data: formData,
        encode: true,
        dataType: 'json',
        processData: false,
        contentType: false,

      }).done(function(data1){
        if(data1=="Done"){
            location.reload();
        }
        else{
            $("#errmsg").html(data1);
        }

      });
        
    }

</script>


