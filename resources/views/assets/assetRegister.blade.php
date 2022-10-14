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
                        <select class="custom-select" id="filterParam">
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
            <!-- <div class="text-muted"> Showing 1 to 10 of 1,000 entries </div> -->
            <div class="table-responsive">
                <!-- .table -->
                <table id="registerAssetGrid" class="table">
                    <!-- thead -->
                    <thead>
                    <tr>
                        <th></th>
                        <th> Registration No </th>
                        <th style="min-width:220px">Asset</th>
                        <th> Purchase Date </th>
                        <th> Warranty End Date </th>
                        <th> Outlet </th>
                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                    </tr>
                    </thead><!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                    </tbody><!-- /tbody -->
                </table><!-- /.table -->
            </div><!-- /.table-responsive -->
            <!-- .pagination
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
            </ul>   .pagination -->
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
                                                            <option value="0"> --- Select Supplier ---- </option>
                                                            <option value="1"> ABC Electric LTD. </option>
                                                            <option value="2"> XYZ Company LTD. </option>
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
                                        </div><!-- /.form-group -->

                                        <div class="has-attachment" style="width:60%;">
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

                                        <div class="form-group">
                                            <div id="after_insert_result">
                                                <div id="qrcode"></div>
                                                <div id="registration_no"></div>
                                            </div>
                                        </div><!-- /.form-group -->


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








<div class="modal fade" id="serviceRequestForm" tabindex="-1" role="dialog" aria-labelledby="serviceRequestFormLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="outletAgreementFormLabel" class="modal-title"> Outlet Agreement </h6>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body px-0">

                <!-- .card -->
                <div class="card">
                    <!-- .card-body -->
                    <div class="card-body">

                            <!-- .form-row -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="problem_dateu" id="svcAssetName"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="problem_datey" id="svcAssetLocation"></label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="problem_date">Problem Date</label>
                                        <div class="input-group input-group-alt flatpickr" data-toggle="flatpickr" data-wrap="true" data-alt-input="true" data-alt-format="F j, Y" data-alt-input-class="form-control" data-date-format="Y-m-d" value="2019-11-04" placeholder="DD/MM/YYYY">
                                            <input id="problem_date" name="problem_date" type="text" class="form-control" data-input="">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary" data-toggle=""><i class="far fa-calendar"></i></button>
                                                <button type="button" class="btn btn-secondary" data-clear=""><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="user_comment">User Comment</label>
                                        <textarea id="user_comment" name="user_comment" class="form-control"></textarea>
                                    </div>
                                </div>

                    </div><!-- /.card-body -->
                </div><!-- /.card -->

            </div><!-- /.modal-body -->

            <!-- .modal-footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button" onClick="sendServiceRequest()">Send Service Request</button>
            </div><!-- /.modal-footer -->
        </div>
    </div>
</div>










<!-- script src="assets/javascript/theme.min.js"></script --> <!-- END THEME JS -->

<script>
var gRegAssetList = '';
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    $(document).ready(function(){
        // $("#purchase_order_no").prop('disabled', true);
        // $("#flatpickr10").prop('disabled', true);
        // $('#warranty_end_date > .form-control').prop('disabled', true);

       // $('#warranty_end_date > .form-control').prop('disabled', true);

        //generateGrid(resultSet);
        getAllRegisterAsset();
        getAllAsset();
        getOutletList();

        $('#asset_list').select2({ });
        $('#outlet_id').select2({ });

        $(".flatpickr").flatpickr({
            dateFormat: 'Y-m-d',
        });
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

    function getOutletList(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllOutlet',
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html +='<option value="'+data.outlet_id+'">'+data.outlet_name+'</option>';
            });
            $('#filterParam').html(html);
            $('#outlet_id').html(html);
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

        // alert(ss);
    }

    $("form#assetRegisterForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: 'addAssetsRegister',
            type: 'POST',
            data: formData,
            success: function (data) {
               // alert(JSON.stringify(data.qrcode));
               $("#qrcode").html(data.qrcode);
               $("#registration_no").html(data.reg_id);
                getAllAsset();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

    function generateGrid(resultSet){
        var linkdown = '';
        var disableStyle = '';
        var assetStatus = '';
        var html = '';
        $.each(resultSet, function(i,data) {
             linkdown = '';
            disableStyle = '';
            assetStatus = '';
            if(data.asset_condition==1) {
                 linkdown = '<div class="dropdown">' +
                    '<button type="button" class="btn btn-icon btn-light" data-toggle="dropdown">' +
                    '<i class="fa fa-ellipsis-v"></i></button>' +
                    '<div class="dropdown-menu dropdown-menu-right">' +
                    '<div class="dropdown-arrow"></div>' +
                    '<a href="#" class="dropdown-item" onclick="popupAssetRepair(' + i + ')"><i class="fa fa-pencil-alt"></i> Edit </a>' +
                    '<a href="#" class="dropdown-item" onclick="popupAssetRepair()"><i class="far fa-trash-alt"></i> Remove</a>' +
                    '<a href="#" class="dropdown-item" onclick="popupAssetRepair(' + i + ')"><i class="oi oi-wrench"></i> Repair </a>' +
                    '<a href="#" class="dropdown-item" onclick="popupAssetRepair()"><i class="fas fa-rocket"></i> Transfer</a>' +
                    '</div>' +
                    '</div>';
            }else if(data.asset_condition==2){
                disableStyle="style='color: blue'";
                assetStatus = '<span class="badge badge-lg badge-warning"><span class="oi oi-media-record pulse mr-1"></span>Repair</span>';
            }else if(data.asset_condition==3){
                disableStyle="style='color: red'";
                assetStatus = '<span class="badge badge-lg badge-danger"><span class="oi oi-media-record mr-1"></span>Damage</span>';
            }

            html += "<tr "+disableStyle+">";
            html +="<td class='align-middle'><div class='user-avatar user-avatar-lg'><img src='asset_image/"+data.photo_path+"' alt=''></div></td>";
            html +="<td class='align-middle'>"+data.asset_reg_id+"</td>";
            html +="<td class='align-middle'><div class='media-body'><a href='#'>"+data.asset_name+"</a> <small class='d-block text-muted'>"+data.brand_name+" "+data.model_no +"</small>"+assetStatus+"</div></td>";
            html +="<td class='align-middle'>"+data.purchase_date+"</td>";
            html +="<td class='align-middle'>"+data.warranty_end_date+"</td>";
            html +="<td class='align-middle'>"+data.outlet_name+"</td>";
            // html +="<td class='align-middle'>"+assetStatus+"</td>";
            //html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientContactEditModal"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeAssetSubGroup('+data.asset_reg_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button>'+ linkdown +'</td>';
            html +='<td class="alian-middle text-right">'+ linkdown +'</td>';
            html += '</tr>';
        });

        $('#registerAssetGrid tbody').html(html);
    }


        function getAllRegisterAsset(){
            var html = '';
            $.ajax({
                type: "GET",
                url: 'getAllRegisterAssetList',
                context: document.body
            }).done(function(result) {
                gRegAssetList = result;
                generateGrid(result);
            });
        }


        var gIndex = '';
        function popupAssetRepair(i){
            gIndex = i;
            $("#svcAssetName").html(gRegAssetList[i].asset_name);
            $("#svcAssetLocation").html(gRegAssetList[i].outlet_name);
            $("#serviceRequestForm").modal({
                fadeDuration: 1000,
                fadeDelay: 0.50
            });
        }

    function sendServiceRequest(){
        // alert(gRegAssetList[i].asset_reg_id);

        // alert(gRegAssetList[gIndex].outlet_id+'=='+gRegAssetList[gIndex].outlet_name);
        var asset_reg_id    = gRegAssetList[gIndex].asset_reg_id;
        var outlet_id       = gRegAssetList[gIndex].outlet_id;
        var problem_date    = $('#problem_date').val();
        var user_comment    = $('#user_comment').val();

        var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved asset sub-group.</div>';

        var actionlink = 'serviceRequest';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{_token:'{{csrf_token()}}',asset_reg_id:asset_reg_id,problem_date:problem_date,outlet_id:outlet_id,user_comment:user_comment},
            context: JSON
        }).done(function(result) {
            if(result.success){
                // $("#massageDiv").show();
                $('#serviceRequestForm').modal('hide');
                // $("#massageDiv-asset").html(massageTest);
                $('#problem_date').val("");
                $('#user_comment').val("");
                getAllRegisterAsset();
            }else{
                alert('Error');
            }
            // alert(result);
        });
    }
</script>
