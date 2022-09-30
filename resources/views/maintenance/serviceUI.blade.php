<div class="card card-fluid">

    <div class="card-header nav-scroller border-bottom">
        <!-- .nav-tabs -->
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab1">New service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2">Ongoing Process</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab3">Done</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab4">Damage</a>
            </li>
        </ul><!-- /.nav-tabs -->
    </div><!-- /.card-header -->

    <!-- Tab Content -->
    <div class="tab-content pt-4" id="clientDetailsTabs">

        <!-- Tab1 -->
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <!-- .card-body -->
            <div class="card-body">
                <div class="table-responsive">
                    <!-- .table -->
                    <table class="table">
                        <!-- thead -->
                        <thead>
                        <tr>
                            <th colspan="2" style="min-width: 240px">
                                Serviceable Item
                            </th>
                            <th> Outlet </th>
                            <th> Request date </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                        </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody id="serviceRequestGrid">
                        </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                </div><!-- /.table-responsive -->
            </div><!-- /.card-body -->
        </div>
        <!-- /Tab1 -->








        <!-- Tab2-->
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <div class="card-body">
                <div class="table-responsive">
                    <!-- .table -->
                    <table class="table">
                        <!-- thead -->
                        <thead>
                        <tr>
                            <th colspan="2">Token No</th>
                            <th>Asset ID</th>
                            <th style="min-width: 240px">
                                Serviceable Item
                            </th>
                            <th> Outlet </th>
                            <th> Request date </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                        </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody id="serviceProcessGrid">
                        </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                </div><!-- /.table-responsive -->
            </div><!-- /.card-body -->
        </div>



        <!-- Tab3-->
        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <div class="card-body">
                <div class="table-responsive">
                    <!-- .table -->
                    <table class="table">
                        <!-- thead -->
                        <thead>
                            <tr>
                                <th>Token No</th>
                                <th>Asset ID</th>
                                <th style="min-width: 240px">
                                    Serviceable Item
                                </th>
                                <th> Outlet </th>
                                <th> Request date </th>
                                <th style="width:100px; min-width:100px;"> &nbsp; </th>
                            </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody id="serviceDoneGrid">
                        </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                </div><!-- /.table-responsive -->
            </div><!-- /.card-body -->
        </div>


        <!-- Tab4-->
        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
            <div class="card-body">
                <div class="table-responsive">
                    <!-- .table -->
                    <table class="table">
                        <!-- thead -->
                        <thead>
                        <tr>
                            <th colspan="2">Token No</th>
                            <th style="min-width: 240px">
                                Serviceable Item
                            </th>
                            <th> Outlet </th>
                            <th> Request date </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                        </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody id="serviceDamageGrid">
                        </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                </div><!-- /.table-responsive -->
            </div><!-- /.card-body -->
        </div>



    </div>
    <!-- /Tab Content -->

</div><!-- /.card -->








<!-- Modal Panel -->

<div class="modal fade" id="followingModal" tabindex="-1" role="dialog" aria-labelledby="followingModalLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="followingModalLabel" class="modal-title"> Receive Request </h6>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body px-0">
                <!-- .card -->
                <div class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate="">
                            <!-- .form-row -->
                            <div class="form-row">
                                <!-- .form-group -->
                                <div class="col-md-12 mb-3">
                                    <label class="control-label" for="tentative_delivery_date">Tentative Delivery Date</label>
                                    <div class="input-group input-group-alt flatpickr" id="flatpickr9" data-toggle="flatpickr" data-wrap="true" data-alt-input="true" data-alt-format="F j, Y" data-alt-input-class="form-control" data-date-format="Y-m-d" value="2019-11-04" placeholder="DD/MM/YYYY">
                                        <input id="tentative_delivery_date" type="text" class="form-control" data-input="">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-secondary" data-toggle=""><i class="far fa-calendar"></i></button> <button type="button" class="btn btn-secondary" data-clear=""><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->


                                <!-- .form-group -->
                                <div class="col-md-12 mb-3">
                                    <label class="control-label" for="service_start_date">Service Start Date</label>
                                    <div class="input-group input-group-alt flatpickr" id="flatpickr10" data-toggle="flatpickr" data-wrap="true" data-alt-input="true" data-alt-format="F j, Y" data-alt-input-class="form-control" data-date-format="Y-m-d" value="2019-11-04" placeholder="DD/MM/YYYY">
                                        <input id="service_start_date" type="text" class="form-control" data-input="">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-secondary" data-toggle=""><i class="far fa-calendar"></i></button> <button type="button" class="btn btn-secondary" data-clear=""><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->

                                <div class="col-md-12 mb-3">
                                    <label class="control-label" for="flatpickr-wrap">Comment</label>
                                    <textarea id="receiverComment" class="form-control" placeholder="Write a message"></textarea>
                                </div><!-- /.form-group -->
                            </div><!-- /.form-row -->
                        </form><!-- /form .needs-validation -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->

            </div><!-- /.modal-body -->

            <!-- .modal-footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit" onclick="generateServiceToken()">Submit form</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
        </div>
    </div>
</div>

<!-- /Modal Panel -->




<!-- Repair Modal Panel -->

<div class="modal fade" id="repairPopUp" tabindex="-1" role="dialog" aria-labelledby="repairPopUpLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="repairPopUpLabel" class="modal-title"> Repair </h6>
                <div id="massageDiv-forProblem"></div>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body px-0">

                <!-- .card -->
                <div class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate="">
                            <!-- .form-row -->
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <!-- .list-group -->
                                    <div class="list-group list-group-flush list-group-bordered" id="identified_problem_list"></div>
                                    <!-- /.list-group -->
                                </div>


<!--
                                <div class="col-md-12 mb-3">
                                    <label class="control-label" for="asset_list">Problem <abbr title="Required">*</abbr></label>
                                    <select id="problem_list" name="problem_list" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                                        <option value=""> No Data found </option>
                                    </select>
                                </div>
                                -->
                            </div><!-- /.form-row -->
                        </form><!-- /form .needs-validation -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.modal-body -->

            <!-- .modal-footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit" onclick="saveIdentifiedProblem()">Save</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
        </div>
    </div>
</div>

<!-- /Modal Panel -->





<!-- Solution Modal Panel -->

<div class="modal fade" id="solutionPanelPopUp" tabindex="-1" role="dialog" aria-labelledby="solutionPanelPopUpLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="repairPopUpLabel" class="modal-title"> Solution </h6>
                <div id="massageDiv-forSolution"></div>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body px-0">

                <!-- .card -->
                <div class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate="">
                            <!-- .form-row -->
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <!-- .list-group -->
                                    <div class="list-group list-group-flush list-group-bordered" id="take_solution_list"></div>
                                    <!-- /.list-group -->
                                </div>


                                <!--
                                                                <div class="col-md-12 mb-3">
                                                                    <label class="control-label" for="asset_list">Problem <abbr title="Required">*</abbr></label>
                                                                    <select id="problem_list" name="problem_list" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                                                                        <option value=""> No Data found </option>
                                                                    </select>
                                                                </div>
                                                                -->
                            </div><!-- /.form-row -->
                        </form><!-- /form .needs-validation -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.modal-body -->

            <!-- .modal-footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit" onclick="saveSolutionOfProblem()">Save</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
        </div>
    </div>
</div>

<!-- /Modal Panel -->




<div class="modal fade" id="usedPartsPanelPopUp" tabindex="-1" role="dialog" aria-labelledby="solutionPanelPopUpLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h6 id="repairPopUpLabel" class="modal-title"> Used Parts </h6>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body px-0">

                <!-- .card -->
                <div class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                        <form class="needs-validation" novalidate="">
                            <!-- .form-row -->
                            <div class="form-row">

                                <div class="col-md-12 mb-3" id="massageDiv-forParts"></div>

                                <div class="col-md-12 mb-3">
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label for="partsList">Parts<abbr title="Required">*</abbr></label>
                                        <select class="custom-select d-block w-100" id="partsList" required="">
                                            <option value=""> Choose... </option>
                                        </select>
                                    </div><!-- /.form-group -->
                                </div>

                                <div class="col-md-6 mb-3">
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="parts_qty" placeholder="Parts Qty" value="" required="">
                                    </div><!-- /.form-group -->
                                </div>
                                <div class="col-md-6 mb-3">
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="button" onclick="addPartsIntoDevice()">Save</button>
                                    </div><!-- /.form-group -->
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="list-group list-group-flush" id="take_solution_list"></div>
                                    <table class="table table-sm mb-0 table-striped">
                                        <!-- thead -->
                                        <thead class="thead-">
                                        <tr>
                                            <th style="min-width:200px"> Used parts </th>
                                            <th> Unit </th>
                                            <th> Qty </th>
                                        </tr>
                                        </thead><!-- /thead -->
                                        <!-- tbody -->
                                        <tbody id="usedPartsList">
                                        </tbody>
                                    </table>
                                </div>

                            </div><!-- /.form-row -->
                        </form><!-- /form .needs-validation -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.modal-body -->

            <!-- .modal-footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
        </div>
    </div>
</div>




<style>
    .seenStatus {
        font-weight: bold;
    }
</style>

<!-- BEGIN THEME JS -->
<script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->


<script>
    $(document).ready(function(){
        getIncomingService();
        getServiceProcessData();
        getServiceDoneData();
        getServiceDamageData();
    });
    var incomingRequestList = '';
    var serviceInProgressList = '';
    var gServiceableItemIndex='';
    var gSelectedTokenId = '';

    /* Array Compare vereable */
    var temp_identifiedProblemList=[];
    var temp_changesProblemList=[];
    var temp_selectedSolutionList=[];
    var temp_changesSolutionList=[];


    function getIncomingService(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getIncomingService',
            context: document.body
        }).done(function(result) {
            // alert(result);
            incomingRequestList = result
            incomingServiceGrid(result);
            // generateServiceProcessGrid(result);
        });
    }

    function getServiceProcessData(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getServiceInProgressData',
            context: document.body
        }).done(function(result) {
            // alert(result);
            serviceInProgressList = result
            generateServiceProcessGrid(result);
        });
    }

    function getServiceDoneData(){
        $.ajax({
            type: "GET",
            url: 'getServiceDoneData',
            context: document.body
        }).done(function(result) {
            generateServiceDoneGrid(result);
        });
    }

    function getServiceDamageData(){
        $.ajax({
            type: "GET",
            url: 'getServiceDamageData',
            context: document.body
        }).done(function(result) {
            generateServiceDamageGrid(result);
        });
    }



    function incomingServiceGrid(dataSet){
        var html='';
        var vStatus = '';
        $('#serviceRequestGrid').html('');
        $.each(dataSet, function(i,data) {
            // var text = data.view_status;
            // var subStrs = text.substring(0,1);asset_name
            //view Status control - Assign Css class
            if(data.view_status==0){
                vStatus = 'seenStatus';// CSS class
            }else{
                vStatus = '';
            }
        html='<tr>'+
            '<td class="align-middle px-0" style="width: 1.5rem">'+
                '<button type="button" class="btn btn-sm btn-icon btn-light" onclick="updateSeenStatus('+data.request_id+','+data.view_status+');" data-toggle="collapse" data-target="#details-'+data.request_id+'"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>'+
            '</td>'+
            '<td class="align-middle">'+
                '<h4 class="list-group-item-title text-truncate '+vStatus+'" id="asset_name'+data.request_id+'" data-target="#details-'+data.request_id+'">'+
                    '<a href="#">'+data.asset_name+'</a>'+
                '</h4>'+
            '</td>'+
            '<td class="align-middle"> '+ data.outlet_name +'</td>'+
            '<td class="align-middle"> '+ data.added_on +'</td>'+
            '<td class="align-middle text-right">'+
                '<a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>'+
            '</td>'+
        '</tr>'+
        '<tr class="row-details bg-light collapse" id="details-'+data.request_id+'">'+
            '<td colspan="6">'+
                '<div class="row">'+
                    <!-- .col -->
                    '<div class="col-md-auto text-center">'+
                        '<div class="user-avatar user-avatar-xl"><img src="asset_image/'+data.photo_path+'" alt=""></div>'+
                        '<h3 class="card-title mb-4"> 3948844 </h3>'+
                    '</div>'+
                    '<div class="col-md-7">'+
                        '<table class="table table-bordered">'+
                            '<tbody>'+
                            '<tr>'+
                                '<td> Model </td>'+
                                '<td>'+data.model_no+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td> Brand </td>'+
                                '<td>'+data.brand_name+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td> Supplier </td>'+
                                '<td> ACI Electronic </td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td> Purchase Date </td>'+
                                '<td> '+data.purchase_date+' </td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td> Warranty </td>'+
                                '<td> '+data.warranty_end_date+' </td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td> Serviceable period </td>'+
                                '<td> 3 Month </td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td> Last Service Date </td>'+
                                '<td> 2020-01-01 </td>'+
                            '</tr>'+
                            '</tbody>'+
                        '</table>'+
                    '</div>'+
                    '<div class="col">'+
                        '<div class="publisher keep-focus focus">'+
                            '<label for="hgh'+data.request_id+'" class="publisher-label"><b>User Comment: </b>'+data.user_comment+'</label>'+
                        '</div>'+
                        '<div class="publisher keep-focus focus">'+
                            '<label for="publisherInput'+data.request_id+'" class="publisher-label">Send a message to client</label>'+
                            '<div class="publisher-input">'+
                                '<textarea id="publisherInput'+data.request_id+'" class="form-control" placeholder="Write a message"></textarea>'+
                            '</div>'+
                            '<div class="publisher-actions align-items-center">'+
                                '<div class="el-example">'+
                                    '<button type="button" class="btn btn-info ml-auto" data-toggle="modal" onclick="popupReceiveForm('+i+')">Receive </button>'+
                                    '<button type="button" class="btn btn-danger">Reject</button>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</td>'+
        '</tr>';

            //$('#serviceRequestGrid tbody').append(html);
            $('#serviceRequestGrid').append(html);
            html='';
        });
    }




    function generateServiceProcessGrid(dataSet){
        var html='';
        var vStatus = '';
        $('#serviceProcessGrid').html('');
        $.each(dataSet, function(i,data) {
            // var text = data.view_status;
            // var subStrs = text.substring(0,1);asset_name
            // view Status control - Assign Css class
            if(data.view_status==0){
                vStatus = 'seenStatus';// CSS class
            }else{
                vStatus = '';
            }
            html='<tr>'+
                    '<td class="align-middle px-0" style="width: 1.5rem">'+
                        '<button type="button" class="btn btn-sm btn-icon btn-light" onclick="updateSeenStatus('+data.request_id+','+data.view_status+');" data-toggle="collapse" data-target="#p_details-'+data.request_id+'"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>'+
                    '</td>'+
                    '<td class="align-middle px-0">'+data.asset_reg_id+'</td>'+
                    '<td class="align-middle px-0">'+data.token_id+'</td>'+
                    '<td class="align-middle">'+
                        '<h4 class="list-group-item-title text-truncate '+vStatus+'" id="p_asset_name'+data.request_id+'" data-target="#sdetails-'+data.request_id+'">'+
                            '<a href="#">'+data.asset_name+'</a>'+
                        '</h4>'+
                    '</td>'+
                    '<td class="align-middle"> '+ data.outlet_name +'</td>'+
                    '<td class="align-middle"> '+ data.added_on +'</td>'+
                    '<td class="align-middle text-right">'+
                        '<a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>'+
                    '</td>'+
                '</tr>'+
                '<tr class="row-details bg-light collapse" id="p_details-'+data.request_id+'">'+
                    '<td colspan="6">'+
                        '<div class="row">'+
                            <!-- .col -->
                            '<div class="col-md-auto text-center">'+
                                '<div class="user-avatar user-avatar-xl"><img src="asset_image/'+data.photo_path+'" alt=""></div>'+
                                    '<h3 class="card-title mb-4"> 3948844 </h3>'+
                                '</div>'+
                                '<div class="col-md-7">'+
                                    '<table class="table table-sm mb-0 table-striped">'+
                                        '<tr><td> Model </td><td>'+data.model_no+'</td></tr>'+
                                        '<tr><td> Brand </td><td>'+data.brand_name+'</td></tr>'+
                                        '<tr><td> Supplier </td><td> ACI Electronic </td></tr>'+
                                        '<tr><td> Purchase Date </td><td> '+data.purchase_date+' </td></tr>'+
                                        '<tr><td> Warranty </td><td> '+data.warranty_end_date+' </td></tr>'+
                                        '<tr><td> Serviceable period </td><td> 3 Month </td></tr>'+
                                        '<tr><td> Last Service Date </td><td> 2020-01-01 </td></tr>'+
                                    '</table>'+
                                '</div>'+
                                '<div class="col">'+
                                    '<div class="publisher keep-focus focus">'+
                                        '<label for="hgh'+data.request_id+'" class="publisher-label"><b>User Comment: </b>'+data.user_comment+'</label>'+
                                    '</div>'+
                                    '<div class="publisher-actions align-items-center">'+
                                        '<div class="el-example">'+
                                            '<button type="button" class="btn btn-danger" data-toggle="repairStatusPanel" onclick="problemIdentifyPopUpForm('+i+')">Identified Problem </button>'+
                                            '<button type="button" class="btn btn-success" data-toggle="solutionPanel" onclick="solutionPanelPopUp('+i+')">Solution </button>'+
                                            '<button type="button" class="btn btn-success" data-toggle="solutionPanel" onclick="usedPartsPanelPopUp('+i+')">Parts</button>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="publisher keep-focus focus">'+
                                        '<button type="button" class="btn btn-danger" data-toggle="repairStatusPanel" onclick="updateServiceStatus('+i+',1)">Done</button>'+
                                        '<button type="button" class="btn btn-danger" data-toggle="repairStatusPanel" onclick="updateServiceStatus('+i+',2)">Damage</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</td>'+
                '</tr>';

            $('#serviceProcessGrid').append(html);
            html='';
        });
    }




    function updateSeenStatus(reqID,viewStatus){
        // alert('seen Status');
      // $("#asset_name"+reqID).removeClass('seenStatus',function(index,currentclass));

        if(viewStatus==0){
            $("#asset_name"+reqID).removeClass('seenStatus');
            $.ajax({
                type: "POST",
                url: 'updateReqSeenStatus',
                data:{_token:'{{csrf_token()}}',request_id:reqID},
                context: document.body
            }).done(function(result) {
                // alert(result);
            });
        }

    }


    function popupReceiveForm(index){
        gServiceableItemIndex = index;
        $("#followingModal").modal('show');
    }






    function generateServiceToken(){
        var request_id = incomingRequestList[gServiceableItemIndex].request_id;
        var tentative_delivery_date = $("#tentative_delivery_date").val();
        var service_start_date = $("#tentative_delivery_date").val();
        var receiverComment = $("#receiverComment").val();

        if(request_id !=''){
            $.ajax({
                type: "POST",
                url: 'addServiceMaintenance',
                data:{_token:'{{csrf_token()}}',
                    request_id:request_id,
                    tentative_delivery_date:tentative_delivery_date,
                    service_start_date:service_start_date,
                    receiverComment:receiverComment
                },
                context: document.body
            }).done(function(result) {
                if(result.success){
                    alert('test');
                    getIncomingService();
                    $('#followingModal').modal('hide');
                    // gServiceableItemIndex ='';
                }else{
                    alert('Error');
                }

            });
        }
    }


    function problemIdentifyPopUpForm(index){
        temp_identifiedProblemList=[];
        gSelectedTokenId = serviceInProgressList[index].token_id;
        var assetId = serviceInProgressList[index].asset_id;
        var html = '<div class="list-group-header"> Problem List </div>';
        $.ajax({
            type: "GET",
            url: 'getIdentifyProblems',
            data:{
                tokenId:gSelectedTokenId,
                assetId:assetId
            },
            context: document.body
        }).done(function(result) {
            var isChecked='';
            var j = 0;
            $.each(result, function(i,data) {

                if(data.identified_problem_id){
                    isChecked='checked';
                    temp_identifiedProblemList.push(parseInt(data.identified_problem_id));
                    // temp_identifiedProblemList[j]=data.identified_problem_id;
                    j++;
                }else{
                    isChecked='';
                }
                html +='<label class="list-group-item custom-control custom-checkbox mb-0">'+
                    '<input name="problem_id" type="checkbox" class="custom-control-input" value="'+data.problem_id+'" '+isChecked+' >'+
                    '<span class="custom-control-label">['+data.problem_id+']'+data.problem_name+'</span>'+
                    '</label>';
            });
            $('#identified_problem_list').html(html);
        });

        // loadProblemList();
        // loadPartsList();
        $("#repairPopUp").modal('show');
    }

    function loadProblemList(){
        var html = '<div class="list-group-header"> Problem List </div>';
        $.ajax({
            type: "GET",
            url: 'getAllProblems',
            context: document.body
        }).done(function(result) {

            $.each(result, function(i,data) {
                html +='<label class="list-group-item custom-control custom-checkbox mb-0">'+
                        '<input name="problem_id" type="checkbox" class="custom-control-input" value="'+data.problem_id+'" checked>'+
                        '<span class="custom-control-label">'+data.problem_name+'</span>'+
                     '</label>';
            });
            $('#identified_problem_list').html(html);
        });
    }

    function loadPartsList(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllAssetParts',
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html +='<option value="'+data.problem_id+'">'+data.problem_name+'</option>';
            });
            $('#parts_list').html(html);
        });
    }


    function saveIdentifiedProblem(){
        var problemList = [];
        var i = 0;
        $.each($("input[name='problem_id']:checked"), function(){
            temp_changesProblemList.push(parseInt($(this).val()));
            // temp_changesProblemList[i]= parseInt($(this).val());
            problemList[i] = $(this).val();
            i++;
        });

        var willDelete = findDifferencBetweenTwoArray(temp_identifiedProblemList,temp_changesProblemList);
        var willInsert = findDifferencBetweenTwoArray(temp_changesProblemList,temp_identifiedProblemList);

        alert("first: "+temp_identifiedProblemList+" \nSecond "+temp_changesProblemList+"\nDelete: "+willDelete+" \nInsert "+willInsert);
        /* Reset Global variable */
        temp_changesProblemList=[];
        temp_identifiedProblemList=[];

        $.ajax({
            type: "POST",
            url: 'saveIdentifiedProblem',
            data:{_token:'{{csrf_token()}}',
                addedProblem:willInsert,
                removeProblem:willDelete,
                token_id:gSelectedTokenId
            },
            context: document.body
        }).done(function(result) {
            var massageHtml='';
            if(result.message==1){
                massageHtml = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> Successfully Identified the problem.</div>';
                // $("#massageDiv-forProblem").html(massageHtml);
                $("#identified_problem_list").html(massageHtml);
            }else{
                alert('Error');
            }

        });
        // alert(problemList);
    }
/*
    function solutionPanelPopUp(index){
        var tokenId = serviceInProgressList[index].token_id;


    }
*/

    function solutionPanelPopUp(index){
        temp_selectedSolutionList=[];
        /* Clear message field */
        $("#massageDiv-forSolution").html('');

        gSelectedTokenId = serviceInProgressList[index].token_id;
        var assetId = serviceInProgressList[index].asset_id;
        var html = '';
        var identifiedProblmeId = '';
        $.ajax({
            type: "GET",
            url: 'getSolutionForProblem',
            data:{
                tokenId:gSelectedTokenId,
                assetId:assetId
            },
            context: document.body
        }).done(function(result) {
            var isChecked='';
            $.each(result, function(i,data) {

                if(data.take_solution){
                    temp_selectedSolutionList.push(parseInt(data.take_solution));
                    isChecked='checked';
                }else{
                    isChecked='';
                }
                if(data.problem_id!=identifiedProblmeId){
                    html += '<div class="list-group-header">'+ data.problem_name +'</div>';
                    identifiedProblmeId = data.problem_id;
                }
                html +='<label class="list-group-item custom-control custom-checkbox mb-0">'+
                    '<input name="solution_id" type="checkbox" class="custom-control-input" value="'+data.solution_id+'" '+isChecked+' >'+
                    '<span class="custom-control-label">'+data.solution_id+' - '+data.solution_name+'</span>'+
                    '</label>';
            });
            $('#take_solution_list').html(html);
        });

        // loadProblemList();
        // loadPartsList();
        $("#solutionPanelPopUp").modal('show');
    }

    function saveSolutionOfProblem(){
        var solutionList = [];
        var i = 0;
        $.each($("input[name='solution_id']:checked"), function(){
            temp_changesSolutionList.push(parseInt($(this).val()));
            // temp_changesProblemList[i]= parseInt($(this).val());
            solutionList[i] = $(this).val();
            i++;
        });

        var willDeleteSolution = findDifferencBetweenTwoArray(temp_selectedSolutionList,temp_changesSolutionList);
        var willInsertSolution = findDifferencBetweenTwoArray(temp_changesSolutionList,temp_selectedSolutionList);


        alert("first: "+temp_selectedSolutionList+" \nSecond "+temp_changesSolutionList+"\nDelete: "+willDeleteSolution+" \nInsert "+willInsertSolution);
        temp_changesSolutionList=[];

        $.ajax({
            type: "POST",
            url: 'saveAppliedSolution',
            data:{_token:'{{csrf_token()}}',
                addedSolutionList:willInsertSolution,
                removeSolutionList:willDeleteSolution,
                token_id:gSelectedTokenId
            },
            context: document.body
        }).done(function(result) {
            if(result.message==1){
                var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved new solution.</div>';
                $("#massageDiv-forSolution").html(massageTest);
            }else{
                alert('Error .....');
            }
            // if(result.success){
            //     alert('test');
            //     getIncomingService();
            //     $('#followingModal').modal('hide');
            //     // gServiceableItemIndex ='';
            // }else{
            //     alert('Error');
            // }

        });
        // alert(problemList);
    }


    function findDifferencBetweenTwoArray(firstArray,secondArray){
        var difference = firstArray.filter(element => !secondArray.includes(element));
        // const willDelete = firstArray.filter(element => !secondArray.includes(element));
        // const willInsert = secondArray.filter(element => !firstArray.includes(element));
        return difference;
    }



    /* =========================== */
    // Parts Panel
    /*****************************/

    function usedPartsPanelPopUp(index){

        $("#massageDiv-forParts").html('');

        gSelectedTokenId = serviceInProgressList[index].token_id;
        var assetId = serviceInProgressList[index].asset_id;
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getUsedPartsList',
            data:{
                tokenId:gSelectedTokenId,
                assetId:assetId
            },
            context: document.body
        }).done(function(result) {

            var html = '<option value="">Choose... </option>';
            $.each(result.partsList, function(i,data) {
                html +='<option value="'+data.parts_id+'">'+data.parts_name+'</option>';
            });
            $('#partsList').html(html);

            if(result.usedPartsList){
                var html2 = '';
                $.each(result.usedPartsList, function(i,data) {
                    html2 +='<tr><td>'+data.parts_name+'</td><td>'+data.parts_qty+'</td><td><a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a></tr>';
                });
                $('#usedPartsList').html(html2);
            }
        });
        $("#usedPartsPanelPopUp").modal('show');
    }


    function addPartsIntoDevice(){
        var partsId = $('#partsList').val();
        var partsQty = $('#parts_qty').val();


        $.ajax({
            type: "POST",
            url: 'addPartsIntoDevice',
            data:{_token:'{{csrf_token()}}',partsId:partsId,partsQty:partsQty,token_id:gSelectedTokenId},
            context: document.body
        }).done(function(result) {

            if(result.message==1){
                var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved.</div>';
                $("#massageDiv-forParts").html(massageTest);
            }else{
                alert('Error .....');
            }

            if(result.dataList){
                $('#partsList').val('');
                $('#parts_qty').val('');
                var html2 = '';
                $.each(result.dataList, function(i,data) {
                    html2 +='<tr><td>'+data.parts_name+'</td><td>'+data.parts_qty+'</td><td><a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a></tr>';
                });
                $('#usedPartsList').html(html2);
            }
        });


    }


    function updateServiceStatus(index,serviceStatus){
        let tokenId = serviceInProgressList[index].token_id;
        let assetRegId = serviceInProgressList[index].asset_reg_id;
        if(tokenId){
            $.ajax({
                type: "POST",
                url: 'updateServiceStatus',
                data:{_token:'{{csrf_token()}}',tokenId:tokenId,serviceStatus:serviceStatus,asset_reg_id:assetRegId},
                context: document.body
            }).done(function(result) {
                alert(result);
            });
        }

    }

    function generateServiceDoneGrid(dataSet){
        var html='';
        var vStatus = '';
        $('#serviceDoneGrid').html('');
        $.each(dataSet, function(i,data) {
            if(data.view_status==0){
                vStatus = 'seenStatus';// CSS class
            }else{
                vStatus = '';
            }
            html='<tr>'+
                '<td class="align-middle px-0" style="width: 1.5rem">'+
                '<button type="button" class="btn btn-sm btn-icon btn-light" onclick="updateSeenStatus('+data.request_id+','+data.view_status+');" data-toggle="collapse" data-target="#p_details-'+data.request_id+'"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>'+
                '</td>'+
                '<td class="align-middle px-0">'+data.token_id+'</td>'+
                '<td class="align-middle px-0">'+data.asset_reg_id+'</td>'+
                '<td class="align-middle">'+
                '<h4 class="list-group-item-title text-truncate '+vStatus+'" id="p_asset_name'+data.request_id+'" data-target="#sdetails-'+data.request_id+'">'+
                '<a href="#">'+data.asset_name+'</a>'+
                '</h4>'+
                '</td>'+
                '<td class="align-middle"> '+ data.outlet_name +'</td>'+
                '<td class="align-middle"> '+ data.added_on +'</td>'+
                '<td class="align-middle text-right">'+
                '<button type="button" class="btn btn-secondary btn-xs" onclick="updateDetiveredStatus('+data.token_id+','+data.asset_reg_id+','+'1)">Delivered</button>'+
                '</td>'+
                '</tr>';

            $('#serviceDoneGrid').append(html);
            html='';
        });
    }

    function generateServiceDamageGrid(dataSet){
        var html='';
        var vStatus = '';
        $('#serviceDamageGrid').html('');
        $.each(dataSet, function(i,data) {
            if(data.view_status==0){
                vStatus = 'seenStatus';// CSS class
            }else{
                vStatus = '';
            }
            html='<tr>'+
                '<td class="align-middle px-0" style="width: 1.5rem">'+
                '<button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#p_details-'+data.request_id+'"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>'+
                '</td>'+
                '<td class="align-middle px-0">'+data.token_id+'</td>'+
                '<td class="align-middle px-0">'+data.asset_reg_id+'</td>'+
                '<td class="align-middle">'+
                '<h4 class="list-group-item-title text-truncate '+vStatus+'" id="p_asset_name'+data.request_id+'" data-target="#sdetails-'+data.request_id+'">'+
                    '<a href="#">'+data.asset_name+'</a>'+
                '</h4>'+
                '</td>'+
                '<td class="align-middle"> '+ data.outlet_name +'</td>'+
                '<td class="align-middle"> '+ data.added_on +'</td>'+
                '<td class="align-middle text-right">'+
                    '<button type="button" class="btn btn-secondary btn-xs" onclick="updateDetiveredStatus('+data.token_id+','+data.asset_reg_id+','+'3)">Delivered</button>'+
                '</td>'+
                '</tr>';

            $('#serviceDamageGrid').append(html);
            html='';
        });
    }


    function updateDetiveredStatus(tokenId,assetRegId,assetCondition){
        alert(tokenId+'-'+assetRegId+'-'+assetCondition);
        if(tokenId){
            $.ajax({
                type: "POST",
                url: 'updateDeliveredStatus',
                data:{_token:'{{csrf_token()}}',tokenId:tokenId,asset_reg_id:assetRegId,asset_condition:assetCondition},
                context: document.body
            }).done(function(result) {
                alert(result);
            });
        }
    }




</script>

