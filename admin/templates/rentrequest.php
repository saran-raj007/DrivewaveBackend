<?php require_once 'include/top.php'; ?>
<?php require_once 'include/sidemenu.php'; ?>
{% include "include/top.php" %}
{% include "include/sidemenu.php" %}


<div class="content-body">
    <div class="container-fluid">
        <div class="room-nav order-summary">
            
        </div>
        <div class="tab-content room-block order-summary-block">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="table-responsive">
                    <table id="example3" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                
                                <th>No</th>
                                <th>Booking ID</th>
                                <th>Username</th>
                                <th>User emailid</th>
                                <th>Vehicle Type</th>
                                 <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>1</td>
                                <td>B202412 </td>
                                <td>Jeffry</td>
                                <td>Jeffry@gmail.com</td>
                                <td>Car</td>
                                <td>₹2500</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#view_order" ><i class="far bi bi-eye-fill"></i></a>
                                    </div>
                                </td>												
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------->
<!--**********************************
    Add Guest start
***********************************-->
<!-- Modal -->
<div class="modal fade guestadd" id="view_order">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">view Booking Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-4">
                    <div class="col">
                        <label>Booking Id</label><br>
                        <span id="view_orid">B202412</span>
                    </div>
                    <div class="col">
                        <label>Username</label><br>
                        <span id="view_ordate">Jeffry</span>
                    </div>
                    <div class="col">
                        <label>User EmailID</label><br>
                        <span id="view_cusname">Jeffry@gmail.com</span>
                    </div>

                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label>Total Price</label><br>
                        <span id="view_nopro">₹2500</span>
                    </div>
                    <div class="col">
                        <label>Pickup Datetime</label><br>
                        <span id="view_orprice">17-3-2024,2:00 pm</span>
                    </div>
                    <div class="col">
                        <label>Drop Datetime</label><br>
                        <span id="view_orphno">18-3-2024,10:00 am</span>
                    </div>

                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label>Vehicle Type</label><br>
                        <span id="view_pin">Car</span>
                    </div>
                    <div class="col-md-4">
                        <label> Vehicle Name and model</label><br>
                        <span id="view_add"> Ford Mustang GT</span>
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------->
<div class="modal fade payment-way" id="print_bill">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"id="contentprint">
            <div class="modal-header">
                <h5 class="modal-title">Order Bill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="paymentprocess" class="form-label">Customer Name</label>
                               <div class="input-text">
                                 <sapn id="bill_cusname">User__01</sapn>
                               </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="totalamount" class="form-label">Phone Number</label>
                            <div class="input-text">
                                <span id="bill_phonenum">+91 9045234567</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">No of products</label>
                            <div class="input-text">
                                <span id="bill_nopro">3</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">Payment method</label>
                            <div class="input-text">
                                <span id="bill_paymentmethod">3</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">Payment id</label>
                            <div class="input-text">
                                <span id="bill_paymentid">3</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">Address Type</label>
                            <div class="input-text">
                            
                            <span id="p_addtype">45,xyz street</span><br>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">Locality</label>
                            <div class="input-text">
                            
                            <span id="bill_local">45,xyz street</span><br>
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">Landmark</label>
                            <div class="input-text">
                            
                            <span id="bill_land">45,xyz street</span><br>
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">Pin code</label>
                            <div class="input-text">
                            
                            <span id="bill_pin">45,xyz street</span><br>
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">Alternative mobile no</label>
                            <div class="input-text">
                            
                            <span id="bill_altpno">45,xyz street</span><br>
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-block">
                            <label for="Tips" class="form-label">Address</label>
                            <div class="input-text">
                            
                            <span id="bill_cadd">45,xyz street</span><br>
                            <!-- <span>unknown area</span><br>
                            <span>Unknown city</span><br>
                            <span>unknown distric with pincode</span><br> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                    <table class="des">
                     <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Offer</th>
                        <th>Price</th>
                    </tr>
                    <tbody id="p_bill">
                    <!--<tr>
                        <td>1</td>
                        <td>Guava Leaf Powder </td>
                        <td>10</td>
                        <td>₹50</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> Guava Leaf Powder</td>
                        <td>15</td>
                        <td>₹70</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Guava Leaf Powder</td>
                        <td>8</td>
                        <td>₹40</td>
                    </tr>   
                    <tr>
                      <td colspan=3>Total Price</td>
                      <td>₹500</td>
                   </tr> -->
                   </tbody>
                </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
                <div class="pay-section">
                    <div class="form-check">
                        <!-- <input type="checkbox" class="form-check-input" id="printreport">
                        <label class="form-check-label" for="printreport">Print Receipt</label> -->
                    </div>
                    <a href="" class="btn btn-primary" download="" target="_blank" id="print">Print</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="complete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Complete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="statid" name="statid">
        <h4>Do you want to compelete it?</h4>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn-close btn btn-danger" data-dismiss="modal">Close</button> -->
        <button type="button" onclick="update_state()" class="btn  btn-primary">Complete</button>
      </div>
    </div>
  </div>
</div>

{% include "include/bottom.php" %}
<?php require_once 'include/bottom.php'; ?>
<script>
  
  function view_order(id){
    $.ajax({
        type : 'PUT',
        url : '/admin/view_order/'+id,
        id : id,
        encode: true,
        dataType: 'json',
        processData: false,
        contentType: false,
    }).done(function(data){
        $("#view_orid").html(data.order_id);
        $("#view_ordate").html(data.order_received_date);
        $("#view_cusname").html(data.customer_name);
        $("#view_nopro").html(data.no_of_product);
        $("#view_orprice").html(data.total_price);
        $("#view_orphno").html(data.add.phone_no);
        $("#view_add").html(data.add.complete_address);
        $("#view_pin").html(data.add.pin_code);
        $("#view_addtype").html(data.add.address_type);
        $("#view_local").html(data.add.locality);
        $("#view_land").html(data.add.landmark);
        $("#view_paymentmethod").html(data.payment_method);
        $("#view_paymentid").html(data.payment_id);
        var tableContainer = document.getElementById("cre");
        while (tableContainer.firstChild) {
            tableContainer.removeChild(tableContainer.firstChild);
        }
        var no=0;
        for(var i of data.allpro){
            no++;
            var tableRow = document.createElement("tr");
            var td1 = document.createElement("td");
            var td2 = document.createElement("td");
            var td3 = document.createElement("td");
            var td4 = document.createElement("td");
            var td5 = document.createElement("td");
            var td6 = document.createElement("td");

            td1.textContent =no;
            td2.textContent = i.product_id;
            td3.textContent = i.product_name;
            td4.textContent = i.quantity;
            td5.textContent = i.offer_percentage+'%';
            td6.textContent = i.price;
            tableRow.appendChild(td1);
            tableRow.appendChild(td2);
            tableRow.appendChild(td3);
            tableRow.appendChild(td4);
            tableRow.appendChild(td5);
            tableRow.appendChild(td6);
            tableContainer.appendChild(tableRow);

        }
        var tableRow = document.createElement("tr");
        var td1 = document.createElement("td");
        var td2 = document.createElement("td");
        td1.textContent ="Total Price";
        td1.colSpan=5;
        td2.textContent ='₹'+data.total_price;
        tableRow.appendChild(td1);
        tableRow.appendChild(td2);
        tableContainer.appendChild(tableRow);


        $("#view_order").modal('show');

    });
  }
  function print_bill(id){
    $.ajax({
        type : 'PUT',
        url : '/admin/view_order/'+id,
        id : id,
        encode: true,
        dataType: 'json',
        processData: false,
        contentType: false,
    }).done(function(data){
        $("#bill_cusname").html(data.add.full_Name);
        $("#bill_phonenum").html(data.add.phone_no);
        $("#bill_nopro").html(data.no_of_product);
        $("#p_addtype").html(data.add.address_type);
        $("#bill_local").html(data.add.locality);
        $("#bill_land").html(data.add.landmark);
        $("#bill_pin").html(data.add.pin_code);
        $("#bill_altpno").html(data.add.alternative_phoneno);
        $("#bill_cadd").html(data.add.complete_address);
        $("#bill_paymentmethod").html(data.payment_method);
        $("#bill_paymentid").html(data.payment_id);
        var myLink = document.getElementById('print');
        myLink.href=data.pdf;
        myLink.download=data.pdf;
        var tableContainer = document.getElementById("p_bill");
        while (tableContainer.firstChild) {
            tableContainer.removeChild(tableContainer.firstChild);
        }
        var no=0;
        for(var i of data.allpro){
            no++;
            var tableRow = document.createElement("tr");
            var td1 = document.createElement("td");
            
            var td3 = document.createElement("td");
            var td4 = document.createElement("td");
            var td5 = document.createElement("td");
            var td6 = document.createElement("td");

            td1.textContent =no;
            td3.textContent = i.product_name;
            td4.textContent = i.quantity;
            td5.textContent = i.offer_percentage+'%';
            td6.textContent = i.price;
            tableRow.appendChild(td1);
           
            tableRow.appendChild(td3);
            tableRow.appendChild(td4);
            tableRow.appendChild(td5);
            tableRow.appendChild(td6);
            tableContainer.appendChild(tableRow);

        }
        var tableRow = document.createElement("tr");
        var td1 = document.createElement("td");
        var td2 = document.createElement("td");
        td1.textContent ="Total Price";
        td1.colSpan=4;
        td2.textContent ='₹'+data.total_price;
        tableRow.appendChild(td1);
        tableRow.appendChild(td2);
        tableContainer.appendChild(tableRow);

        $("#print_bill").modal('show');


    });

  }
  function change_status(id){
    $("#statid").val(id);
    $("#complete").modal('show');
  }
  function update_state(){
    var id = document.getElementById('statid').value;
        
        $.ajax( {
            type    : "get",
            url     : '/admin/update_state/'+id,
            id    : id,
            contentType: "application/json",
            success: function(data) {
                location.reload();
            },
        });
        return false;
  }

  
</script>