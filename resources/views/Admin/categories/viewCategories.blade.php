@extends('Admin.Master')

 @section('content')
 <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12 ">
                <div class="card">
                    
                    <div class="card-body">
                        <h3 class="header-title">All Categories</h3>
                        <br>
                        <div class="col-lg-12">
                            <div class="text-lg-right mt-3 mt-lg-0">
                                
                                <a href="#custom-modal" class="btn btn-primary waves-effect waves-light"
                                    data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i
                                        class="mdi mdi-plus-circle mr-1"></i> Add Category</a>
                            </div>
                        </div>
                         <br>
                        <table id="key-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <tr>
                                    <td> 1</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    
                                </tr>
                                
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        
         <!-- Modal -->
         <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.modal.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">New Category</h4>
            <div class="custom-modal-text text-left">
                <form >
                    <div class="form-group  mb-3">
                        <label for="catName" class="col-3 col-form-label">Category Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="catName" name="catName" placeholder="Category Name">
                        </div>
                    </div>
                    <div class="form-group  mb-3">
                        <label for="catDesc" class="col-5 col-form-label">Category Description</label>
                        <div class="col-9">
                            <textarea rows="3" class="form-control" id="catDesc" name="catDesc" placeholder="Category Description"> </textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<div>
    
 @endsection