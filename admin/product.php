<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-purple-light sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Business</li>
        <li class="active">Products</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
               <a href="#addnew" data-toggle="modal" class="btn btn-primary bg-purple custom btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Date</th>
                  <th>Category</th>
                  <th>Product Name</th>
                  <th>Container</th>
                  <th>Weight</th>
                  <th>Opening</th>
                  <th>Add</th>
                  <th>Closing</th>
                  <th>Warning</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, products.id AS proid FROM products LEFT JOIN category ON category.id=products.category_id ORDER BY products.date_product DESC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $qty_status = '';
                          if($row['closing_product'] != 0){
                            if($row['closing_product'] <= $row['warning_product']) {
                            $qty_status = '<span class="label label-warning pull-right">Low !</span>';
                          }}
                         
                        echo"
                          <tr>
                            <td>".$row['date_product']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['name_product']."</td>
                            <td>".$row['container_name']."</td>
                            <td>".$row['container_weight']."</td>
                            <td>".$row['opening_product']."</td>
                            <td>".$row['add_product']."</td>
                            <td>".$row['closing_product']."</td>
                            <td>".$row['warning_product'].$qty_status."</td>
                            <td>
                              <button class='btn btn-success btn-sm btn-flat edit' data-id='".$row['proid']."'><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm btn-flat delete' data-id='".$row['proid']."'><i class='fa fa-trash'></i> Delete</button>
                            </td>
                          </tr>
                       ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/product_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
   $(document).ready(function(){
    $("body").on("click"  , ".edit" ,  function(e) {
      e.preventDefault();
      var id = $(this).data('id');
      $.ajax({
    type: 'POST',
    url: 'product_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#edit').modal('show');
      $('#proid').val(response.proid);
      $('#edit_category').val(response.name);
      $('#edit_product').val(response.name_product);
      $('#edit_container').val(response.container_name);
      $('#edit_weight').val(response.container_weight);
      $('#edit_opening').val(response.opening_product);
      $('#edit_add').val(response.add_product);
      $('#edit_closing').val(response.closing_product);
      $('#edit_warning').val(response.warning_product);
      $('#category_val').val(response.category_id).html(response.name);
      $('#del_proid').val(response.proid);
      $('#del_product').html(response.name_product);


    }
  });
    });

    $("body").on("click"  , ".delete" ,  function(e) {
      e.preventDefault();
      var id = $(this).data('id');
      $.ajax({
        type: 'POST',
    url: 'product_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#delete').modal('show');
      $('#proid').val(response.proid);
      $('#edit_category').val(response.name);
      $('#edit_product').val(response.name_product);
      $('#edit_container').val(response.container_name);
      $('#edit_weight').val(response.container_weight);
      $('#edit_opening').val(response.opening_product);
      $('#edit_add').val(response.add_product);
      $('#edit_closing').val(response.closing_product);
      $('#edit_warning').val(response.warning_product);
      $('#category_val').val(response.category_id);
      $('#del_proid').val(response.proid);
      $('#del_product').html(response.name_product); 
    }
  });
    });
   });

</script>
</body>
</html>