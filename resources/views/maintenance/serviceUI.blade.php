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
                <a class="nav-link" data-toggle="tab" href="#tab3">Unserviceable</a>
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
    });
    var incomingRequestList = '';
    var serviceInProgressList = '';
    var gServiceableItemIndex='';
    var gSelectedTokenId = '';

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
            //view Status control - Assign Css class
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
                '<table class="table table-bordered">'+
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
                '</div>'+
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
            $.each(result, function(i,data) {

                if(data.identified_problem_id){
                    isChecked='checked';
                }else{
                    isChecked='';
                }
                html +='<label class="list-group-item custom-control custom-checkbox mb-0">'+
                    '<input name="problem_id" type="checkbox" class="custom-control-input" value="'+data.problem_id+'" '+isChecked+' >'+
                    '<span class="custom-control-label">'+data.problem_name+'</span>'+
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
           // problemList.push($(this).val());
            problemList[i] = $(this).val();
            i++;
        });
        $.ajax({
            type: "POST",
            url: 'saveIdentifiedProblem',
            data:{_token:'{{csrf_token()}}',
                problem_list:problemList,
                token_id:gSelectedTokenId
            },
            context: document.body
        }).done(function(result) {
            alert('seve event');
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

    function solutionPanelPopUp(index){
        var tokenId = serviceInProgressList[index].token_id;
        alert(tokenId);
        // gServiceableItemIndex = index;
        $("#solutionPanelPopUp").modal('show');
    }


</script>

