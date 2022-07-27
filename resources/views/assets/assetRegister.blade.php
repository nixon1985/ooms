<div class="page-inner">
    <!-- .page-title-bar -->
    <header class="page-title-bar">
        <!-- floating action -->
        <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
        <!-- title and toolbar -->
        <div class="d-md-flex align-items-md-start">
            <h1 class="page-title mr-sm-auto"> Assets Register </h1><!-- .btn-toolbar -->
        </div><!-- /title and toolbar -->
    </header><!-- /.page-title-bar -->

    <div class="nav-scroller border-bottom">
        <!-- .nav-tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab1" onClick="storeTabId('basicInfo')">Assets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2" onClick="storeTabId('service')">Register Form</a>
            </li>
        </ul><!-- /.nav-tabs -->
    </div><!-- /.nav-scroller -->



    <div class="page-section">

            <!-- .tab-content -->
            <div class="tab-content mt-4" id="asset-group-tab">
                <!-- .tab-pane -->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <!-- .card-body -->
                    <div class="card card-fluid">
                        <div class="card-body">
            <!-- .form-group -->
            <div class="form-group">
                <!-- .input-group -->
                <div class="input-group input-group-alt">
                    <!-- .input-group-prepend -->
                    <div class="input-group-prepend">
                        <select class="custom-select">
                            <option selected> Filter By </option>
                            <option value="1"> Tags </option>
                            <option value="2"> Vendor </option>
                            <option value="3"> Variants </option>
                            <option value="4"> Prices </option>
                            <option value="5"> Sales </option>
                        </select>
                    </div><!-- /.input-group-prepend -->
                    <!-- .input-group -->
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                        </div><input type="text" class="form-control" placeholder="Search record">
                    </div><!-- /.input-group -->
                </div><!-- /.input-group -->
            </div><!-- /.form-group -->
            <!-- .table-responsive -->
            <div class="text-muted"> Showing 1 to 10 of 1,000 entries </div>
            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                    <tr>
                        <th colspan="2" style="min-width:320px">
                            <div class="thead-dd dropdown">
                                <span class="custom-control custom-control-nolabel custom-checkbox"><input type="checkbox" class="custom-control-input" id="check-handle"> <label class="custom-control-label" for="check-handle"></label></span>
                                <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fa fa-caret-down"></span>
                                </div>
                                <div class="dropdown-menu">
                                    <div class="dropdown-arrow"></div><a class="dropdown-item" href="#">Select all</a> <a class="dropdown-item" href="#">Unselect all</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Bulk remove</a> <a class="dropdown-item" href="#">Bulk edit</a> <a class="dropdown-item" href="#">Separate actions</a>
                                </div>
                            </div>
                        </th>
                        <th> Inventory </th>
                        <th> Variants </th>
                        <th> Prices </th>
                        <th> Sales </th>
                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                    </tr>
                    </thead><!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p3"> <label class="custom-control-label" for="p3"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-1.jpg" alt="Card image cap"></a> <a href="#">Tomato - Green</a>
                        </td>
                        <td class="align-middle"> 329 </td>
                        <td class="align-middle"> 4 </td>
                        <td class="align-middle"> $31.70 </td>
                        <td class="align-middle"> 796 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p4"> <label class="custom-control-label" for="p4"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-3.jpg" alt="Card image cap"></a> <a href="#">Quiche Assorted</a>
                        </td>
                        <td class="align-middle"> 169 </td>
                        <td class="align-middle"> 1 </td>
                        <td class="align-middle"> $34.41 </td>
                        <td class="align-middle"> 1824 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p5"> <label class="custom-control-label" for="p5"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-5.jpg" alt="Card image cap"></a> <a href="#">Cookies Oatmeal Raisin</a>
                        </td>
                        <td class="align-middle"> 155 </td>
                        <td class="align-middle"> 2 </td>
                        <td class="align-middle"> $39.26 </td>
                        <td class="align-middle"> 366 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p6"> <label class="custom-control-label" for="p6"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-7.jpg" alt="Card image cap"></a> <a href="#">Lemonade - Mandarin, 591 Ml</a>
                        </td>
                        <td class="align-middle"> 391 </td>
                        <td class="align-middle"> 3 </td>
                        <td class="align-middle"> $34.03 </td>
                        <td class="align-middle"> 921 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p7"> <label class="custom-control-label" for="p7"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-2.jpg" alt="Card image cap"></a> <a href="#">Sour Puss - Tangerine</a>
                        </td>
                        <td class="align-middle"> 368 </td>
                        <td class="align-middle"> 4 </td>
                        <td class="align-middle"> $32.68 </td>
                        <td class="align-middle"> 1216 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p8"> <label class="custom-control-label" for="p8"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-6.jpg" alt="Card image cap"></a> <a href="#">Scallops - 20/30</a>
                        </td>
                        <td class="align-middle"> 345 </td>
                        <td class="align-middle"> 4 </td>
                        <td class="align-middle"> $29.34 </td>
                        <td class="align-middle"> 883 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p9"> <label class="custom-control-label" for="p9"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-4.jpg" alt="Card image cap"></a> <a href="#">Skirt - 29 Foot</a>
                        </td>
                        <td class="align-middle"> 432 </td>
                        <td class="align-middle"> 3 </td>
                        <td class="align-middle"> $23.50 </td>
                        <td class="align-middle"> 854 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p10"> <label class="custom-control-label" for="p10"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-8.jpg" alt="Card image cap"></a> <a href="#">Tea - Grapefruit Green Tea</a>
                        </td>
                        <td class="align-middle"> 461 </td>
                        <td class="align-middle"> 6 </td>
                        <td class="align-middle"> $29.09 </td>
                        <td class="align-middle"> 1694 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p11"> <label class="custom-control-label" for="p11"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-6.jpg" alt="Card image cap"></a> <a href="#">Pecan Raisin - Tarts</a>
                        </td>
                        <td class="align-middle"> 235 </td>
                        <td class="align-middle"> 1 </td>
                        <td class="align-middle"> $31.28 </td>
                        <td class="align-middle"> 353 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p12"> <label class="custom-control-label" for="p12"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1"><img class="img-fluid" src="assets/images/dummy/img-5.jpg" alt="Card image cap"></a> <a href="#">Wine - Chateau Bonnet</a>
                        </td>
                        <td class="align-middle"> 113 </td>
                        <td class="align-middle"> 2 </td>
                        <td class="align-middle"> $22.38 </td>
                        <td class="align-middle"> 1281 </td>
                        <td class="align-middle text-right">
                            <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                    </tr><!-- /tr -->
                    </tbody><!-- /tbody -->
                </table><!-- /.table -->
            </div><!-- /.table-responsive -->
            <!-- .pagination -->
            <ul class="pagination justify-content-center mt-4">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-lg fa-angle-left"></i></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">...</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">13</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">14</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">15</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">...</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">24</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fa fa-lg fa-angle-right"></i></a>
                </li>
            </ul><!-- /.pagination -->
        </div><!-- /.card-body -->
                    </div>
                </div>






                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2">
                    <div class="page-section">

                        <form id="assetRegisterForm" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- .card-deck-xl -->
                            <div class="card-deck-xl">
                                <!-- .card -->
                                <div class="card card-fluid">
                                    <!-- .card-body -->
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- .form-group -->
                                                    <div class="form-group">
                                                        <label class="control-label" for="asset_list">Asset <abbr title="Required">*</abbr></label>
                                                        <select id="asset_list" name="asset_id" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                                                            <option value=""> No Data found </option>
                                                        </select>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="select2-single">Supplier</label>
                                                        <select id="select2-supplier" name="supplier_id" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                                                            <option value="1"> Rohime Electric </option>
                                                            <option value="2"> Hawaii </option>
                                                        </select>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="purchase_date">Purchase Date</label>
                                                        <div class="input-group input-group-alt flatpickr" id="flatpickr9"  data-toggle="flatpickr" data-wrap="true" data-alt-input="true" data-alt-format="F j, Y" data-alt-input-class="form-control" data-date-format="Y-m-d" value="2019-11-04" placeholder="DD/MM/YYYY">
                                                            <input id="purchase_date" name="purchase_date" type="text" class="form-control" data-input="">
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn btn-secondary" data-toggle=""><i class="far fa-calendar"></i></button>
                                                                <button type="button" class="btn btn-secondary" data-clear=""><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.form-group -->
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="purchase_order_no">Purchase Order No</label>
                                                        <input class="form-control" type="text" placeholder="Purchase Order No" id="purchase_order_no" name="purchase_order_no">
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="d-block"> Warranty </label>
                                                            <div class="custom-control custom-control-inline custom-radio">
                                                                <input type="radio" class="custom-control-input" name="warrantyYesNo" id="rd1" value="1" onclick="warrantyDateEnableDisable()">
                                                                <label class="custom-control-label" for="rd1">Yes</label>
                                                            </div>
                                                            <div class="custom-control custom-control-inline custom-radio">
                                                                <input type="radio" class="custom-control-input" name="warrantyYesNo" id="rd2" value="0" onclick="warrantyDateEnableDisable()">
                                                                <label class="custom-control-label" for="rd2">No</label>
                                                            </div>

                                                        </div>
                                                    </div><!-- /.form-group -->
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="warranty_end_date">Warranty End Date</label>
                                                        <div class="input-group input-group-alt flatpickr" id="flatpickr10" data-toggle="flatpickr" data-wrap="true" data-alt-input="true" data-alt-format="F j, Y" data-alt-input-class="form-control" data-date-format="Y-m-d" value="2019-11-04" placeholder="DD/MM/YYYY">
                                                            <input id="warranty_end_date" name="warranty_end_date" type="text" class="form-control" data-input="">
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn btn-secondary" data-toggle=""><i class="far fa-calendar"></i></button>
                                                                <button type="button" class="btn btn-secondary" data-clear=""><i class="fa fa-times"></i></button>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="outlet_id">Outlet</label>
                                                        <select id="outlet_id" name="outlet_id" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                                                            <option value="1"> Rohime Electric </option>
                                                            <option value="2"> Hawaii </option>
                                                        </select>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>

                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->

                                <!-- .card -->
                                <div class="card card-fluid">
                                    <!-- .card-body -->
                                    <div class="card-body">
                                        <h4 class="card-title"> Upload Asset photo </h4>
                                        <div class="form-group">
                                            <label for="tf3">Asset photo</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" id="image" name="image" onchange="loadFile(event)" multiple>
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>

{{--                                            <img style="width:50%"id="output"/>--}}
                                        </div><!-- /.form-group -->
                                        <div class="has-attachment" style="width:60%; height: 100%">
                                        <div class="pswp-gallery">
                                            <!-- .card-figure -->
                                            <div class="card card-figure">
                                                <!-- .card-figure -->
                                                <figure class="figure">
                                                    <!-- .figure-img -->
                                                    <div class="figure-img figure-attachment">
                                                        <img id="output" style="width:100%; height: 100%" alt="Card image cap">
                                                    </div><!-- /.figure-img -->
                                                </figure><!-- /.card-figure -->
                                            </div><!-- /.card-figure -->
                                        </div>
                                        </div>
                                    </div><!-- /.card-body -->
                                </div><!-- /.card -->

                            </div><!-- /.card-deck-xl -->

                            <div class="card">
                                <!-- .form-group -->
                                <div class="form-group">
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div><!-- /.form-group -->
                                <!-- .form-group -->
                            </div>
                        </form>
                    </div>
                </div>

            </div>
    </div>
</div>
<script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->

<script>
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };

    $(document).ready(function(){
        $("#purchase_order_no").prop('disabled', true);
        // $("#flatpickr10").prop('disabled', true);
        // $('#warranty_end_date > .form-control').prop('disabled', true);

       // $('#warranty_end_date > .form-control').prop('disabled', true);
        getAllAsset();
    });

    function getAllAsset(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllAssetList',
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html +='<option value="'+data.asset_id+'">'+data.asset_name+'</option>';
            });
            $('#asset_list').html(html);
        });
    }

    function warrantyDateEnableDisable(){
        var ss = $('input[name="warrantyYesNo"]:checked').val();
        $("#warranty_end_date").attr("disabled", true);
        // $("#warranty_end_date").prop('disabled', false);


        // $('#warranty_end_date').datetimepicker({
        //     pickTime: false
        // });



        // $( "#warranty_end_date" ).prop( "disabled", false );
        // $( "#warranty_end_date" ).datepicker( "option", "disabled", false );
        // if(checkValue==1){
        //     $( "#warranty_end_date" ).prop( "disabled", false );
        // }else{
        //     $( "#warranty_end_date" ).prop( "disabled", true );
        // }

        alert(ss);
    }

    $("form#assetRegisterForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: 'addAssetsRegister',
            type: 'POST',
            data: formData,
            success: function (data) {
                alert(data)
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>
