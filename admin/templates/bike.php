
{% include "include/top.php" %}
{% include "include/sidemenu.php" %}

<div class="content-body">
    <div class="container-fluid">
        <div class="row guest-database-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bikes</h4>
                        <a class="btn btn-primary" type="" href="/add_bikes">Add Bikes</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bike Name and model</th>
                                        <th>Cost per/hr</th>
                                        <th>Total Trips</th>
                                        <th>Fuel type</th>
                                        <th>Available Status</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td> Yamaha YZF-R1 2022 </td>
                                        <td> ₹250 </td>
                                        <td>4</td>
                                        <td>Petrol</td>
                                        <td>Unavailable</td> 
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#listeditem" ><i class="far bi bi-eye-fill"></i></a>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#editpro"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" onclick="del_conformation()"><i class="fa fa-trash"></i></a>
                                            </div>												
                                        </td>												
                                    </tr>
                                    <!-- <tr>
                                        <td>2</td>
                                        <td>Guava Leaf Powder</td>
                                        <td>Health care</td>
                                        <td>₹140</td>
                                        <td><a href="javascript:void(0);"><strong>--</strong></a></td>
                                        <td>10</td>
                                        
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#listeditem"><i class="far fa-clipboard"></i></a>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#guestadd"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp delete-guest"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Guava Leaf Powder</td>
                                        <td>Health care</td>
                                        <td>₹140</td>
                                        <td><a href="javascript:void(0);"><strong>--</strong></a></td>
                                        <td>10</td>
                                    
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#listeditem"><i class="far fa-clipboard"></i></a>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#editpro"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp delete-guest"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</div>

<!--**********************************
    Add Guest start
***********************************-->
<!-- Modal -->
<div class="modal fade guestadd" id="editpro">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Bike</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form>
                <div class="guest-information-area">
                    <h4>Bike Information</h4>
                    <span id="errmsg"></span>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block">
                                <label for="guestsub" class="form-label">Bike Name and model</label>
                                <div class="input-text">
        
                                    <input type="text" class="form-control" id="bikename" name="bikename" placeholder="Bike Name and model" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-block">
                                <label for="guestnumber" class="form-label">Fuel type</label>
                                <div class="input-text">
                                    <select class="form-control wide" id="bikefuel" name="bikefuel" required>
                                        <option value="" selected disabled>Select Fuel type</option>
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
                                        <option value="scooter" >scooter</option>
                                        <option value="motorcycle" >motorcycle</option>
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
                       
                        <!-- <div class="col-md-6">
                            <div class="input-block">
                                <label for="offer" class="form-label">Offers</label>
                                <select class="default-select form-control wide" name="offer" id="offer">
                                    <option selected>Select offer</option>
                                    <option value="10">10%</option>
                                    <option value="25">25%</option>
                                    <option value="50">50%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                        </div> -->
                       
                    </div>
                </div>
                <div class="col-xl-12">
                            <div class="mb-3 row">

                                <div class="col-lg-12">
                                    <label class="col-lg-12 col-form-label" for="validationCustom01">Bike IMages

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
                            <h5><strong>Extra features in Bike</strong></h5>
                            <div class="mb-3 col-md-6 col-sm-6">
                                <label for="product_discription+" class="form-label">start Type</label>
                                <div class="input-text">
                                    <select class="form-control wide" id="vehicletype" name="vehicletype" required>
                                        <option value="" selected disabled>Select start type</option>
                                        <option value="scooter" >Self start</option>
                                        <option value="motorcycle" >Kick start</option>
                                        
                                        
                                        
                                    </select>
                               </div>
                              </div>
                              <div class="mb-3 col-md-6 col-sm-6">
                                <label for="product_methodOfUse" class="form-label">CC of the Bike</label>
                                  <input type="number" min="50" id="bikecc" class="form-control" name="bikecc" placeholder="Bike cc"/>
                              </div>
                              <div class="mb-3 col-md-6 col-sm-6">
                                <label for="product_methodOfUse" class="form-label">Mileage</label>
                                  <input type="number" min="10" id="bikemileage" class="form-control" name="bikemileage" placeholder="Bike Mileage"/>
                              </div>
                              
                            </div>
                    </div>
                    <button type="button" onclick="add_product()" class="btn btn-primary">Submit</button>
                </div>
                
                    
                </form>
        </div>
    </div>
</div>
<!--**********************************
    Add Guest end
***********************************-->

<!--**********************************
    Add Guest start
***********************************-->
<!-- Modal -->

<!--**********************************
    Add Guest end
***********************************-->

<div class="modal fade guestadd filter-item1" id="listeditem">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Bike</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form>
                <div class="guest-information-area">
                    <h4>Bike Information</h4>
                    <span id="errmsg"></span>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block">
                                <label for="guestsub" class="form-label">Bike Name and model</label>
                                <div class="input-text">
                                   <span>Yamaha YZF-R1 2022</span>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-block">
                                <label for="guestnumber" class="form-label">Fuel type</label>
                                <div class="input-text">
                                    <span>Petrol</span>
                               </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="guestemail" class="form-label">Cost pre/Hr</label>
                            <div class="input-block">
                                
                                <span>₹250</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block">
                                <label for="guestnumber" class="form-label">Vehicle type</label>
                                <div class="input-text">
                                    <span>Motor cycle</span>
                               </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-block">
                                <label for="guestnumber" class="form-label">City Name</label>
                                <div class="input-text">
                                    <span>Chennai</span>
                               </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-block">
                                <label for="guestnumber" class="form-label">vehicle Location</label>
                                <div class="input-text">
                                    <span>Chennai Central Railway Station</span>
                               </div>
                                
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
                <div class="col-xl-12">
                            <div class="mb-3 row">

                                <div class="col-lg-12">
                                    <label class="col-lg-12 col-form-label" for="validationCustom01">Bike IMages

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="mb-3 row guestadd expense">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">

                                                <div class="col-lg-12">
                                                    <div class="input-block profile">
                                                        <p>Image 1<span class="text-danger">*</span></p>
                                                            <label for="pimage1" class="form-label"><img id="addoutput" src="templates/images/profile/profile1.png"></label>
                                                    
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
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                            <h5><strong>Extra features in Bike</strong></h5>
                            <div class="mb-3 col-md-6 col-sm-6">
                                <label for="product_discription+" class="form-label">start Type</label>
                                <div class="input-text">
                                    <span>Self start</span>
                               </div>
                              </div>
                              <div class="mb-3 col-md-6 col-sm-6">
                                <label for="product_methodOfUse" class="form-label">Bike CC</label>
                                <div class="input-text">
                                <span>998cc</span>
                                </div>
                              </div>
                              <div class="mb-3 col-md-6 col-sm-6">
                                <label for="product_methodOfUse" class="form-label">Mileage</label>
                                <div class="input-text">
                                  <span>20 km</span>
                                </div>
                              </div>
                              
                            </div>
                    </div>
                    
                </div>
                    
                </form>
                
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="delpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
        <input type="hidden" id="delid" name="delid">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
         Do you want to Delete the Product ?
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" onclick="del_product()" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>

{% include "include/bottom.php" %}
<?php require_once 'include/bottom.php'; ?>

<script type="text/javascript">
    function product_view(id){
        $.ajax({
            type : "PUT",
            url : "/admin/view_product/"+ id,
            id : id,
            encode: true,
            dataType: 'json',
            processData: false,
            contentType: false,

        }).done(function(data){
            var image_path1 = "htdocs/product_image/" + data.product_image1;
            var image_path2 = "htdocs/product_image/" + data.product_image2;
            var image_path3 = "htdocs/product_image/" + data.product_image3;
            var image_path4 = "htdocs/product_image/" + data.product_image4;
            $("#vproductname").html(data.product_name);
            $("#vproductcategory").html(data.product_category);
            $("#vproductprice").html(data.product_price);
            $("#vproductquantity").html(data.product_quantity);
            $("#vproducttype").html(data.product_type);
            $("#vproductoffer").html(data.product_offer);
            $("#vproductimg1").attr("src", image_path1);
            $("#vproductimg2").attr("src", image_path2);
            $("#vproductimg3").attr("src", image_path3);
            $("#vproductimg4").attr("src", image_path4);
            $("#vproductdis").html(data.product_description);
            $("#vproductmeth").html(data.method_of_use);
            $("#vproductben").html(data.benefits);
            $("#listeditem").modal('show');


        });
    }
    function edit_product(id){
        $.ajax({
            type : 'PUT',
            url :'/admin/view_product/'+ id,
            id :id ,
            encode: true,
            dataType: 'json',
            processData: false,
            contentType: false,
        }).done(function(data){
            var image_path1 = "htdocs/product_image/" + data.product_image1;
            var image_path2 = "htdocs/product_image/" + data.product_image2;
            var image_path3 = "htdocs/product_image/" + data.product_image3;
            var image_path4 = "htdocs/product_image/" + data.product_image4;
            $("#edit_proid").val(data.product_id);
            $("#edit_productname").val(data.product_name);
            $("#edit_productcategory").val(data.product_category);
            $("#edit_productprice").val(data.product_price);
            $("#edit_quantity").val(data.product_quantity);
            $("#edit_ptype").val(data.product_type);
            $("#editproimg1").attr("src", image_path1);
            $("#editproimg2").attr("src", image_path2);
            $("#editproimg3").attr("src", image_path3);
            $("#editproimg4").attr("src", image_path4);
            $("#edit_productdis").val(data.product_description);
            $("#edit_productmeth").val(data.method_of_use);
            $("#edit_productben").val(data.benefits);
            $("#editpro").modal('show');

        });
    }
    function update_product() {
        var imageUrl1 = document.getElementById('editproimg1').src;
        var imageUrl2 = document.getElementById('editproimg2').src;
        var imageUrl3 = document.getElementById('editproimg3').src;
        var imageUrl4 = document.getElementById('editproimg4').src;
        alert(imageUrl1);
        // var img1;
        // fetch(imageUrl2)
        //     .then(response => response.blob())
        //     .then(blob => {
        //         img1=blob;
        //         //alert(blob);
        //     });
        fetch(imageUrl1)
        .then(response =>response.blob())
        .then(blob => {
            fetch(imageUrl2)
            .then(response =>response.blob())
            .then(blob1 =>{
                fetch(imageUrl3)
                .then(response =>response.blob())
                .then(blob2 =>{
                    fetch(imageUrl4)
                    .then(response =>response.blob())
                    .then(blob3 =>{

          
        var formData = new FormData();
        formData.append("edit_proid", $("#edit_proid").val());
        formData.append("edit_productname", $("#edit_productname").val());
        formData.append("edit_productcategory", $("#edit_productcategory").val());
        formData.append("edit_productprice", $("#edit_productprice").val());
        formData.append("edit_productquantity",$("#edit_quantity").val());
        formData.append("edit_ptype",$("#edit_ptype").val());
        formData.append("edit_productdis", $("#edit_productdis").val());
        formData.append("edit_productmeth", $("#edit_productmeth").val());
        formData.append("edit_productben", $("#edit_productben").val());
        formData.append("edit_proimg1", blob);
        formData.append("edit_proimg2", blob1);
        formData.append("edit_proimg3", blob2);
        formData.append("edit_proimg4", blob3);
        alert(formData.edit_proimg1);
        

        
             
        

        $.ajax({
            type: 'POST',
            url: '/admin/update_product',
            data: formData,
            encode: true,
            dataType: 'json',
            processData: false,
            contentType: false,
        }).done(function(data1) {
            if (data1 == "Done") {
                location.reload();
            } else {
                $("#errmsg").html(data1);
            }
        });
        });
        });
        });
        });
       
    }
    function del_conformation(id){
        $("#delid").val(id);
        $("#delpro").modal('show');
    }
    function del_product(){
        var id = document.getElementById('delid').value;
        alert(id);
        $.ajax( {
            type    : "get",
            url     : '/admin/delete_product/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                location.reload();
            },
        });
        return false;

    }
    function change_state(id){
        //var id = document.getElementById('delid').value;
        
        $.ajax( {
            type    : "get",
            url     : '/admin/change_displaystatus/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                
            },
        });
        return false;

    }

</script>




<style>
  .checkbox-wrapper-8 .tgl {
    display: none;
  }
  .checkbox-wrapper-8 .tgl,
  .checkbox-wrapper-8 .tgl:after,
  .checkbox-wrapper-8 .tgl:before,
  .checkbox-wrapper-8 .tgl *,
  .checkbox-wrapper-8 .tgl *:after,
  .checkbox-wrapper-8 .tgl *:before,
  .checkbox-wrapper-8 .tgl + .tgl-btn {
    box-sizing: border-box;
  }
  .checkbox-wrapper-8 .tgl::-moz-selection,
  .checkbox-wrapper-8 .tgl:after::-moz-selection,
  .checkbox-wrapper-8 .tgl:before::-moz-selection,
  .checkbox-wrapper-8 .tgl *::-moz-selection,
  .checkbox-wrapper-8 .tgl *:after::-moz-selection,
  .checkbox-wrapper-8 .tgl *:before::-moz-selection,
  .checkbox-wrapper-8 .tgl + .tgl-btn::-moz-selection,
  .checkbox-wrapper-8 .tgl::selection,
  .checkbox-wrapper-8 .tgl:after::selection,
  .checkbox-wrapper-8 .tgl:before::selection,
  .checkbox-wrapper-8 .tgl *::selection,
  .checkbox-wrapper-8 .tgl *:after::selection,
  .checkbox-wrapper-8 .tgl *:before::selection,
  .checkbox-wrapper-8 .tgl + .tgl-btn::selection {
    background: none;
  }
  .checkbox-wrapper-8 .tgl + .tgl-btn {
    outline: 0;
    display: block;
    width: 4em;
    height: 2em;
    position: relative;
    cursor: pointer;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
  }
  .checkbox-wrapper-8 .tgl + .tgl-btn:after,
  .checkbox-wrapper-8 .tgl + .tgl-btn:before {
    position: relative;
    display: block;
    content: "";
    width: 60%;
    height: 100%;
  }
  .checkbox-wrapper-8 .tgl + .tgl-btn:after {
    left: 0;
  }
  .checkbox-wrapper-8 .tgl + .tgl-btn:before {
    display: none;
  }
  .checkbox-wrapper-8 .tgl:checked + .tgl-btn:after {
    left: 50%;
  }

  .checkbox-wrapper-8 .tgl-skewed + .tgl-btn {
    overflow: hidden;
    transform: skew(-10deg);
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    transition: all 0.2s ease;
    font-family: sans-serif;
    background: #888;
  }
  .checkbox-wrapper-8 .tgl-skewed + .tgl-btn:after,
  .checkbox-wrapper-8 .tgl-skewed + .tgl-btn:before {
    transform: skew(10deg);
    display: inline-block;
    transition: all 0.2s ease;
    width: 100%;
    text-align: center;
    position: absolute;
    line-height: 2em;
    font-weight: bold;
    color: #fff;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
  }
  .checkbox-wrapper-8 .tgl-skewed + .tgl-btn:after {
    left: 100%;
    content: attr(data-tg-on);
  }
  .checkbox-wrapper-8 .tgl-skewed + .tgl-btn:before{
    left: 0;
    content: attr(data-tg-off);
  }
  .checkbox-wrapper-8 .tgl-skewed + .tgl-btn:active {
    background: #888;
  }
  .checkbox-wrapper-8 .tgl-skewed + .tgl-btn:active:before {
    left: -10%;
  }
  .checkbox-wrapper-8 .tgl-skewed:checked + .tgl-btn {
    background: #86d993;
  }
  .checkbox-wrapper-8 .tgl-skewed:checked + .tgl-btn:before {
    left: -100%;
  }
  .checkbox-wrapper-8 .tgl-skewed:checked + .tgl-btn:after {
    left: 0;
  }
  .checkbox-wrapper-8 .tgl-skewed:checked + .tgl-btn:active:after {
    left: 10%;
  }
</style>
