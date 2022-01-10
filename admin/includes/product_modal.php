<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Product</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="product_add.php" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input autocomplete="off" type="text" class="form-control" id="datepicker_add" name="date_product" required>
                      </div>
                    </div>
                </div>
          		 
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="category" id="category" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM category";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  	<label for="name_product" class="col-sm-3 control-label">Product Name</label>

                  	<div class="col-sm-9">
                    	<input autocomplete="off" type="text" class="form-control" id="name_product" name="name_product" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="container_name" class="col-sm-3 control-label">Container</label>

                  	<div class="col-sm-9">
                    	<input autocomplete="off" type="text" class="form-control" id="container_name" name="container_name" required>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="container_weight" class="col-sm-3 control-label">Weight</label>

                  	<div class="col-sm-9">
                    	<input autocomplete="off" type="text" class="form-control" id="container_weight" name="container_weight" required>
                  	</div>
                </div>


                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Opening</label>

                    <div class="col-sm-9">
                      <input  autocomplete="off" type="text" class="form-control" id="opening" name="opening" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Add</label>

                    <div class="col-sm-9">
                      <input autocomplete="off" type="text" class="form-control" id="add" name="add_product" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Closing</label>

                    <div class="col-sm-9">
                      <input autocomplete="off" type="text" class="form-control" id="closing" name="closing" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Warning</label>

                    <div class="col-sm-9">
                      <input autocomplete="off" type="text" class="form-control" id="warning" name="warning" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Update Product</b></h4>
          	</div>

            
        
            <div class="modal-body">
            	<form class="form-horizontal" method="POST" action="product_edit.php">
            		<input type="hidden" id="proid" name="id">

                <div class="form-group">
                    <label for="edit_category" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="category" id="edit_category" required>
                        
                        <?php
                          $sql = "SELECT * FROM category";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="edit_product" class="col-sm-3 control-label">Product Name</label>

                    <div class="col-sm-9">
                      <input autocomplete="off" type="text" class="form-control" id="edit_product" name="namep">
                    </div>
                </div>

                <div class="form-group">
                  	<label for="container_name" class="col-sm-3 control-label">Container</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_container" name="container_name">
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="container_weight" class="col-sm-3 control-label">Weight</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_weight" name="container_weight">
                  	</div>
                </div>

                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Opening</label>

                    <div class="col-sm-9">
                      <input autocomplete="off" type="text" class="form-control" id="edit_opening" name="opening" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Add</label>

                    <div class="col-sm-9">
                      <input autocomplete="off" type="text" class="form-control" id="edit_add" name="add_product" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Closing</label>

                    <div class="col-sm-9">
                      <input autocomplete="off" type="text" class="form-control" id="edit_closing" name="closing" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Warning</label>

                    <div class="col-sm-9">
                      <input autocomplete="off" type="text" class="form-control" id="edit_warning" name="warning" >
                    </div>
                </div>
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Deleting...</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="product_delete.php">
            		<input type="hidden" id="del_proid" name="id">
            		<div class="text-center">
	                	<p>DELETE PRODUCT</p>
	                	<h2 id="del_product" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>