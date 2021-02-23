<?php include 'includes/header.inc.php';?>
<?php include 'includes/sidenav.inc.php';?> 
<?php include 'includes/topnav.inc.php';?> 
     <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Sale</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="http://iqonic.design/themes/posdash/html/backend/page-list-returns.html" data-toggle="validator">
                            <div class="row">                                  
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Date *</label>
                                        <input type="text" class="form-control" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Customer Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter Customer Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product Name *</label>
                                       <input type="text" class="form-control" placeholder="Enter Product Name" required> 
                                       <div class="help-block with-errors"></div>
                                    </div> 
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price *</label>
                                        <input type="text" class="form-control" placeholder="Enter Product Price" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product Code*</label>
                                        <input type="text" class="form-control" placeholder="Enter Product Code" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                      
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Quantity *</label>
                                        <input type="text" class="form-control" placeholder="Enter Product Quantity" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Total</label>
                                        <input type="text" class="form-control" placeholder="Product Total price">
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub Total</label>
                                        <input type="text" class="form-control" placeholder="Total">
                                    </div>
                                </div>
                               
                               
                                 
                                
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Add Sale</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                        <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                           <br>
                            <th>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox1">
                                    <label for="checkbox1" class="mb-0"></label>
                                </div>
                            </th>
                            <th>Product</th>
                            <th>Product Code</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                    <label for="checkbox2" class="mb-0"></label>
                                </div>
                            </td>
                            <td>Clove</td>
                            <td>C1</td>
                            <td>10 Kg</td>
                            <td>100</td>
                            <td>1000</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox3">
                                    <label for="checkbox3" class="mb-0"></label>
                                </div>
                            </td>
                        
                            <td>Cardamom</td>
                            <td>CA1</td>
                            <td>10 Kg</td>
                            <td>200</td>
                            <td>2000</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
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
        </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <?php include 'includes/footer.inc.php';?>