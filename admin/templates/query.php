<?php require_once 'include/top.php'; ?>
<?php require_once 'include/sidemenu.php'; ?>
{% include "include/top.php" %}
{% include "include/sidemenu.php" %}


<div class="content-body">
    <div class="container-fluid">
        <div class="row guest-database-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Query</h4>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Query ID</th>
                                        <th>Email ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Q202423</td>
                                        <td>jeffry@gmail.com</td>
                                        <td>
                                            <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#view_review" > <i class="far fa-clipboard"></i></a>

                                                <!-- <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#guestadd"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp delete-guest"><i class="fa fa-trash"></i></a> -->
                                            </div>												
                                        </td>												
                                    </tr>
                                    <!--<tr>
                                        <td>2</td>
                                        <td>#P1</td>
                                        <td>Guava Leaf Powder</td>
                                        <td>5%</td>
                                        
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#viewreview"><i class="far fa-clipboard"></i></a>
                                                 <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#guestadd"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp delete-guest"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>#P1</td>
                                        <td>Guava Leaf Powder</td>
                                        <td>4%</td>
                                        
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#viewreview"><i class="far fa-clipboard"></i></a>
                                                 <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" type="button" data-bs-toggle="modal" data-bs-target="#guestadd"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp delete-guest"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>-->
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
<div class="modal fade guestadd" id="guestadd">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            </div>
            </div>
    </div>
</div>
<!--**********************************
    Add Guest end
***********************************-->

<!--**********************************
    Add Guest start
***********************************-->
<div class="modal fade guestadd" id="view_review">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Query Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body testr">
                <label>Booking ID</label><br>
                <span>B203423</sapn><br>
                  <label>User Name</label><br>
                <span>jeffry</sapn><br>
                <label>Email ID</label><br>
                <span>jeffry@gmail.com</span><br>
                <label>Query</label><br>
                <sapn>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
  <!-- Modal -->
  <div class="modal" id="viewreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Product Reveiw</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row" id="reviewcontent">
              <!-- <div class="col-md-4">
                <div class="card">

                  <div class="card-body">
                    <h5 class="card-title">User__001</h5>
                    <p class="customerRating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star"></i>
                    </p>
                    <p class="card-text">I recently incorporated Guava Leaf Powder into my daily routine, and I am thoroughly impressed with its numerous health benefits. Not only is it an excellent source of antioxidants, but it also boasts an array of essential nutrients, making it a valuable addition to my wellness regimen</p>
                  </div>
                  <div class="card-footer">
                        <input type="checkbox">
                        <label>View</label>
                </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">

                  <div class="card-body">
                    <h5 class="card-title">user__002</h5>
                    <p class="customerRating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                    </p>
                    <p class="card-text">I recently incorporated Guava Leaf Powder into my daily routine, and I am thoroughly impressed with its numerous health benefits. Not only is it an excellent source of antioxidants, but it also boasts an array of essential nutrients, making it a valuable addition to my wellness regimen</p>
                  </div>
                  <div class="card-footer">
                        <input type="checkbox">
                        <label>View</label>
                </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">

                  <div class="card-body">
                    <h5 class="card-title">user__003</h5>
                    <p class="customerRating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                    </p>
                    <p class="card-text">I recently incorporated Guava Leaf Powder into my daily routine, and I am thoroughly impressed with its numerous health benefits. Not only is it an excellent source of antioxidants, but it also boasts an array of essential nutrients, making it a valuable addition to my wellness regimen</p>
                  </div>
                  <div class="card-footer">
                        <input type="checkbox">
                        <label>View</label>
                </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">

                  <div class="card-body">
                    <h5 class="card-title">user__04</h5>
                    <p class="customerRating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                    </p>
                    <p class="card-text">I recently incorporated Guava Leaf Powder into my daily routine, and I am thoroughly impressed with its numerous health benefits. Not only is it an excellent source of antioxidants, but it also boasts an array of essential nutrients, making it a valuable addition to my wellness regimen</p>
                  </div>
                  <div class="card-footer">
                        <input type="checkbox">
                        <label>View</label>
                </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">

                  <div class="card-body">
                    <h5 class="card-title">User__05</h5>
                    <p class="customerRating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                    </p>
                    <p class="card-text">I recently incorporated Guava Leaf Powder into my daily routine, and I am thoroughly impressed with its numerous health benefits. Not only is it an excellent source of antioxidants, but it also boasts an array of essential nutrients, making it a valuable addition to my wellness regimen</p>
                  </div>
                  <div class="card-footer">
                        <input type="checkbox">
                        <label>View</label>
                </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>


{% include "include/bottom.php" %}
<?php require_once 'include/bottom.php'; ?>
<script type="text/javascript">
  function fetch_review(id){
    

    
    $.ajax({
      type : 'PUT',
      url : '/admin/show_review/'+id,
      id : id,
      encode: true,
      dataType: 'json',
      processData: false,
      contentType: false,
      

    }).done(function(data){
      const cardContainer = document.getElementById("reviewcontent");
      while (cardContainer.firstChild) {
        cardContainer.removeChild(cardContainer.firstChild);
      }
            
      for(var i of data){
        

        // Create elements
        const cardDiv = document.createElement("div");
        cardDiv.className = "col-md-4";

        const card = document.createElement("div");
        card.className = "card";

        const cardBody = document.createElement("div");
        cardBody.className = "card-body";

        const title = document.createElement("h5");
        title.className = "card-title";
        title.textContent = i.user_name;

        const rating = document.createElement("p");
        rating.className = "customerRating";
        for (let j = 0; j < i.no_of_star_given_by_user; j++) {
            
            const star = document.createElement("i");
            star.className = "bi bi-star-fill";
            rating.appendChild(star);
        }
        const review = document.createElement("p");
        review.className = "card-text";
        review.textContent = i.review_content;

        // Append elements
        cardBody.appendChild(title);
        cardBody.appendChild(rating);
        cardBody.appendChild(review);

        card.appendChild(cardBody);

        const cardFooter = document.createElement("div");
        cardFooter.className = "card-footer";

        const checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.value=i.id;
        checkbox.oninput = function() {
            change_displaystate(this.value); // Pass this.value as a parameter
        };
        if(i.display_status=="visible"){
          checkbox.checked=true;
        }

        const label = document.createElement("label");
        label.textContent = " View";

        cardFooter.appendChild(checkbox);
        cardFooter.appendChild(label);

        card.appendChild(cardFooter);

        cardDiv.appendChild(card);

        // Append the card to the container
        cardContainer.appendChild(cardDiv);

      }
      $("#viewreview").modal('show');


    });
  }
  function change_displaystate(id){
    $.ajax({
      type: 'PUT',
      url : '/admin/change_displaystate/'+id,
      id : id,
      encode: true,
      dataType: 'json',
      processData: false,
      contentType: false,

    }).done(function(data){


    });
  }
</script>

