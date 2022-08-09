
<div class="page-inner">

    <!-- <div class="card"> -->
    <h1 class="page-title" id="title-outlet-name">
        <i class="far fa-building text-muted mr-2"></i>
        Setting.
    </h1>

    <div class="nav-scroller border-bottom">
        <!-- .nav-tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#problem-tab-content" onClick="storeTabId('basicInfo')"> Problems </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#solution-tab-content" onClick="storeTabId('service')"> Solution </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#parts-tab-content" onClick="storeTabId('complain')">Additional Parts</a>
            </li>
        </ul><!-- /.nav-tabs -->
    </div><!-- /.nav-scroller -->
    <!--</div>-->




    <!-- .tab-content -->
    <div class="tab-content mt-4" id="asset-group-tab">

        <!-- .tab-pane -->
        <div class="tab-pane fade show active" id="problem-tab-content" role="tabpanel" aria-labelledby="problem-tab-content">


            <div class="page-section">
                <!-- .card-deck-xl -->
                <div class="card-deck-xl">

                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h4 class="card-title"> Add New Problems </h4>
                            <h6 class="card-subtitle mb-4"> Add the mechanical and technical problems of assets  </h6><!-- form -->
                            <form>
                                <div class="form-row" id="massageDiv-group"></div>

                                <div class="form-group">
                                    <label for="problem_group_id">Asset Group <abbr title="Required">*</abbr></label>
                                    <select id="problem_group_id" name="problem_group_id" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                                        <option value=""> No Data found </option>
                                    </select>
                                </div><!-- /.form-group -->

                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="problem_name">Problem Name <abbr title="Required">*</abbr></label>
                                    <input type="text" class="form-control" id="problem_name" name="problem_name" placeholder="Enter Problem Name" value="" required="">
                                </div><!-- /.form-group -->
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="addbutton"> </label>
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="button" onclick="saveProblem()">Save</button>
                                    </div>
                                </div><!-- /.form-group -->
                                <!-- .form-group -->

                            </form><!-- /form -->
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h4 class="card-title"> Assets Group List </h4>
                            <h6 class="card-subtitle mb-4"> List of mechanical and technical problems of assets </h6><!-- form -->

                            <div class="table-responsive">
                                <!-- .table -->
                                <table class="table table-sm mb-0 table-hover table-striped" id="asset_group_grid">
                                    <!-- thead -->
                                    <thead class="thead-light">
                                    <tr>
                                        <th> ID </th>
                                        <th> Problems </th>
                                        <th> Group</th>
                                        <th></th>
                                    </tr>
                                    </thead><!-- /thead -->
                                    <!-- tbody -->
                                    <tbody></tbody><!-- /tbody -->
                                </table><!-- /.table -->
                            </div><!-- /.table-responsive -->



                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                </div><!-- /.card-deck-xl -->

            </div>


        </div>
        <!-- /.tab-pane -->




        <!-- .Sub-Group tab-pane Start -->
        <div class="tab-pane fade" id="solution-tab-content" role="tabpanel" aria-labelledby="solution-tab-content">

            <div class="page-section">
                <!-- .card-deck-xl -->
                <div class="card-deck-xl">

                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h4 class="card-title"> Add New Assets Sub-Group </h4>
                            <h6 class="card-subtitle mb-4"> New subgroup creation form. </h6><!-- form -->
                            <form>

                                <div class="form-row" id="massageDiv"></div>
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="assetGroup">Asset Group <abbr title="Required">*</abbr></label>
                                    <select class="custom-select d-block w-100" id="assetGroup" required="">
                                        <option value=""> Choose... </option>
                                        <option value="1"> Electric </option>
                                        <option value="2"> Glass </option>
                                        <option value="3"> General </option>
                                    </select>
                                </div><!-- /.form-group -->
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="assetSubGroup">Sub Group <abbr title="Required">*</abbr></label>
                                    <input type="text" class="form-control" id="assetSubGroup" placeholder="Sub-Group Name" value="" required="">
                                </div><!-- /.form-group -->
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="addbutton"> </label>
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="submit" onclick="saveSubGroup()">Save</button>
                                    </div>
                                </div><!-- /.form-group -->
                                <!-- .form-group -->

                            </form><!-- /form -->
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h4 class="card-title"> Sub-Group List </h4>
                            <h6 class="card-subtitle mb-4"> List of sub-group assets. </h6><!-- form -->

                            <div class="table-responsive">
                                <!-- .table -->
                                <table class="table table-sm mb-0 table-hover table-striped" id="asset_sub_group_grid">
                                    <!-- thead -->
                                    <thead class="thead-light">
                                    <tr>
                                        <th> ID </th>
                                        <th> Group </th>
                                        <th style="min-width:200px"> Sub-Group </th>
                                        <th></th>
                                    </tr>
                                    </thead><!-- /thead -->
                                    <!-- tbody -->
                                    <tbody></tbody><!-- /tbody -->
                                </table><!-- /.table -->
                            </div><!-- /.table-responsive -->



                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                </div><!-- /.card-deck-xl -->

            </div>
        </div>
        <!-- /.Sub-Group tab-pane Start tab-pane -->




        <!-- .tab-content -->

        <div class="tab-pane fade" id="parth-tab-content" role="tabpanel" aria-labelledby="parth-tab-content">

            <div class="page-section">
                <!-- .card-deck-xl -->
                <div class="card-deck-xl">
                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h4 class="card-title"> Add New Assets </h4>
                            <h6 class="card-subtitle mb-4"> New assets creation form. </h6><!-- form -->
                            <form>

                                <div class="form-row" id="massageDiv-asset"></div>
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="sub_group_id">Asset Subgroup <abbr title="Required">*</abbr></label>
                                    <select class="custom-select d-block w-100" id="sub_group_id" required="">
                                        <option value=""> Choose... </option>
                                    </select>
                                </div><!-- /.form-group -->
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="asset_name">Asset Name <abbr title="Required">*</abbr></label>
                                    <input type="text" class="form-control" id="asset_name" placeholder="Asset Name" value="" required="">
                                </div><!-- /.form-group -->

                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="model_no">Model <abbr title="Required">*</abbr></label>
                                    <input type="text" class="form-control" id="model_no" placeholder="Model Name" value="" required="">
                                </div><!-- /.form-group -->

                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="brand_name">Brand<abbr title="Required">*</abbr></label>
                                    <input type="text" class="form-control" id="brand_name" placeholder="Brand Name" value="" required="">
                                </div><!-- /.form-group -->



                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="addbutton"> </label>
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="submit" onclick="saveAssets()">Save</button>
                                    </div>
                                </div><!-- /.form-group -->
                                <!-- .form-group -->

                            </form><!-- /form -->
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h4 class="card-title"> Assets List </h4>
                            <h6 class="card-subtitle mb-4"> List of assets. </h6><!-- form -->

                            <div class="table-responsive">
                                <!-- .table -->
                                <table class="table table-sm mb-0 table-hover table-striped" id="asset_list_grid">
                                    <!-- thead -->
                                    <thead class="thead-light">
                                    <tr>
                                        <th> ID </th>
                                        <th style="min-width:200px"> Asset </th>
                                        <th> Sub-Group </th>
                                        <th> Model </th>
                                        <th> Brand </th>
                                        <th></th>
                                    </tr>
                                    </thead><!-- /thead -->
                                    <!-- tbody -->
                                    <tbody></tbody><!-- /tbody -->
                                </table><!-- /.table -->
                            </div><!-- /.table-responsive -->



                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                </div><!-- /.card-deck-xl -->

            </div>





        </div>
        <!-- /.tab-pane -->


    </div><!--End Tab package -->


</div>
<script src="assets/javascript/tt.min.js"></script> <!-- END THEME JS -->
<script>

    $(document).ready(function(){
        getAllAssetSubGroup();
        getAllAssetGroup();
        getAllAssetList();
    });

    function getAllAssetGroup(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllProblems',
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html += "<tr>";
                html +="<td class='align-middle'>"+data.problem_id+"</td>";
                html +="<td class='align-middle'>"+data.problem_name+"</td>";
                html +="<td class='align-middle'>"+data.sub_group_name+"</td>";
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientContactEditModal"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeAssetGroup('+data.group_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#asset_group_grid tbody').html(html);
            // assetGroupCombo(result);
        });
    }

    function getAllAssetSubGroup(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllAssetSubGroup',
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html += "<tr>";
                html +="<td class='align-middle'>"+data.sub_group_id+"</td>";
                html +="<td class='align-middle'>"+data.group_id+"</td>";
                html +="<td class='align-middle'>"+data.sub_group_name+"</td>";
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientContactEditModal"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeAssetSubGroup('+data.sub_group_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#asset_sub_group_grid tbody').html(html);
            assetSubGroupCombo(result);
        });
    }


    function saveSubGroup(){
        var groupId = $('#assetGroup').val();
        var subGroupName = $('#assetSubGroup').val();

        var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved asset sub-group.</div>';

        var actionlink = 'saveSubGroup';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{_token:'{{csrf_token()}}',group_id:groupId,sub_group_name:subGroupName},
            context: document.body
        }).done(function(result) {
            if(result==1){
                // $("#massageDiv").show();
                $("#massageDiv").html(massageTest);
                $('#assetGroup').val("");
                $('#assetSubGroup').val("");
                getAllAssetSubGroup();
            }else{
                alert('Error');
            }
            // alert(result);
        });
    }



    function removeAssetGroup(groupId){
        $.ajax({
            type: "DELETE",
            url: 'deleteAssetGroup',
            data:{_token:'{{csrf_token()}}',group_id:groupId}
        }).done(function(result) {
            getAllAssetGroup();
        });
    }

    function removeAssetSubGroup(subGroupId){
        alert(subGroupId);
        $.ajax({
            type: "DELETE",
            url: 'deleteSubGroup',
            data:{_token:'{{csrf_token()}}',sub_group_id:subGroupId}
        }).done(function(result) {
            alert(result);
            getAllAssetSubGroup();
        });
    }



    function saveProblem(){
        var group_id = $('#problem_group_id').val();
        var problemName = $('#problem_name').val();
        var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved asset sub-group.</div>';

        var actionlink = 'saveProblem';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{_token:'{{csrf_token()}}',group_id:group_id, problem_name:problemName},
            context: document.body
        }).done(function(result) {
            if(result.success){
                // $("#massageDiv").show();
                $("#massageDiv-group").html(massageTest);
                // $('#problem_group_id').val("");
                $('#problem_name').val("");
                getAllAssetGroup();
            }else{
                alert('Error');
            }
            // alert(result);
        });
    }


    function assetGroupCombo(groupData){
        var html = '<option value="">Choose... </option>';
        $.each(groupData, function(i,data) {
            html +='<option value="'+data.group_id+'">'+data.group_name+'</option>';
        });
        $('#assetGroup').html(html);

    }


    function assetSubGroupCombo(subGroupData){
        var html = '<option value="">Choose... </option>';
        $.each(subGroupData, function(i,data) {
            html +='<option value="'+data.sub_group_id+'">'+data.sub_group_name+'</option>';
        });
        $('#problem_group_id').html(html);
        $('#sub_group_id').html(html);

    }


    function saveAssets(){
        var sub_group_id = $('#sub_group_id').val();
        var asset_name = $('#asset_name').val();
        var model_no = $('#model_no').val();
        var brand_name = $('#brand_name').val();

        var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved asset sub-group.</div>';

        var actionlink = 'saveAssets';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{_token:'{{csrf_token()}}',sub_group_id:sub_group_id,asset_name:asset_name,model_no:model_no,brand_name:brand_name},
            context: JSON
        }).done(function(result) {
            if(result==1){
                // $("#massageDiv").show();
                $("#massageDiv-asset").html(massageTest);
                $('#assetGroup').val("");
                $('#assetSubGroup').val("");
                getAllAssetList();
            }else{
                alert('Error');
            }
            // alert(result);
        });
    }



    function getAllAssetList(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllAssetList',
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html += "<tr>";
                html +="<td class='align-middle'>"+data.asset_id+"</td>";
                html +="<td class='align-middle'>"+data.asset_name+"</td>";
                html +="<td class='align-middle'>"+data.sub_group_id+"</td>";
                html +="<td class='align-middle'>"+data.model_no+"</td>";
                html +="<td class='align-middle'>"+data.brand_name+"</td>";
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientContactEditModal"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeAsset('+data.asset_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#asset_list_grid tbody').html(html);
        });
    }


    function removeAsset(asset_id){
        $.ajax({
            type: "DELETE",
            url: 'deleteAsset',
            data:{_token:'{{csrf_token()}}',asset_id:asset_id}
        }).done(function(result) {
            alert(result);
            getAllAssetList();
        });
    }



    var tabID='basicInfo';

    function outletInfo(outletInfo,id){
        $("#title-outlet-name").html('<i class="far fa-building text-muted mr-2"></i> ' + outletInfo);

        // Call Tab containt loading function
        storeTabId(tabID);

    }


    // Load the Tab containt
    function storeTabId(pTabID){
        tabID = pTabID;

        switch(tabID){
            case 'basicInfo':
                // outletBasicInfo();
                break;
            case 'service':
                // outletService();
                break;
            case 'complain':
                // outletComplain();
                break;
        }
    }

    function outletBasicInfo(){
        alert('Outlet Basic Info Loading.....');
    }

    function outletService(){
        alert('Loading.... outlet service');
    }

    function outletComplain(){
        alert('Loading.... outlet Complain');
    }

    function saveOutletInfo(){
        var actionlink = 'outletinfoSave';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{_token:'{{csrf_token()}}',outletName:'BB Megamall'},
            context: document.body
        }).done(function(result) {
            alert(result);
        });
    }


</script>

