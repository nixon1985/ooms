<style>
    .table-wrap {
        max-height: 300px;
        overflow-y: auto;
    }
</style>
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
    <div class="tab-content mt-4">

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
                                <div class="form-group" id="massageDiv-group"></div>

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
                            <h4 class="card-title"> Problem List </h4>
                            <h6 class="card-subtitle mb-4"> List of mechanical and technical problems of assets </h6><!-- form -->

                            <div class="table-responsive table-wrap">
                                <!-- .table -->
                                <table class="table table-sm mb-0 table-hover table-striped" id="asset_group_grid" style="min-height: 200px;">
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
                            <h4 class="card-title"> Add New Solution </h4>
                            <h6 class="card-subtitle mb-4"> New Solution creation form. </h6><!-- form -->
                            <form>

                                <div class="form-row" id="massageDiv-forSolution"></div>
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="problem_id">Problem List <abbr title="Required">*</abbr></label>
                                    <select id="problem_id" name="problem_id" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                                        <option value=""> No Data found </option>
                                    </select>
                                </div><!-- /.form-group -->
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="solution_name">Solution Name <abbr title="Required">*</abbr></label>
                                    <input type="text" class="form-control" id="solution_name" name="solution_name" placeholder="Solution" value="" required="">
                                </div><!-- /.form-group -->
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="addbutton"> </label>
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="button" onclick="saveSolution()">Save</button>
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
                            <h4 class="card-title"> Solutions List </h4>
                            <h6 class="card-subtitle mb-4"> List of solutions. </h6><!-- form -->

                            <div class="table-responsive table-wrap">
                                <!-- .table -->
                                <table class="table table-sm mb-0 table-hover table-striped" id="solution_grid">
                                    <!-- thead -->
                                    <thead class="thead-light">
                                    <tr>
                                        <th> ID </th>
                                        <th style="min-width:100px"> Solution </th>
                                        <th style="min-width:200px"> Problems </th>
                                        <th> Asset Group </th>
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

        <div class="tab-pane fade" id="parts-tab-content" role="tabpanel" aria-labelledby="parts-tab-content">

            <div class="page-section">
                <!-- .card-deck-xl -->
                <div class="card-deck-xl">
                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h4 class="card-title"> Add New Parts </h4>
                            <h6 class="card-subtitle mb-4"> New parts creation form. </h6><!-- form -->
                            <form>

                                <div class="form-group" id="massageDiv-forAssetParts"></div>
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="asset_group_id">Asset Sub Group <abbr title="Required">*</abbr></label>
                                    <select id="asset_group_id" name="asset_group_id" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true">
                                        <option value=""> No Data found </option>
                                    </select>
                                </div><!-- /.form-group -->
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="parts_name">Parts Name <abbr title="Required">*</abbr></label>
                                    <input type="text" class="form-control" id="parts_name" placeholder="Parts Name" value="" required="">
                                </div><!-- /.form-group -->

                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="addbutton"> </label>
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="button" onclick="saveAssetParts()">Save</button>
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
                            <h4 class="card-title"> Assets Parts List </h4>
                            <h6 class="card-subtitle mb-4"> List of assets parts. </h6><!-- form -->

                            <div class="table-responsive">
                                <!-- .table -->
                                <table class="table table-sm mb-0 table-hover table-striped" id="asset_parts_grid">
                                    <!-- thead -->
                                    <thead class="thead-light">
                                    <tr>
                                        <th> ID </th>
                                        <th style="min-width:200px"> Parts </th>
                                        <th> Asset Group</th>
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
        getAllProblems();
        getAllSolutions();
        getAllAssetList();
        getAllAssetPartsList();
    });

    function getAllAssetSubGroup(){
        $.ajax({
            type: "GET",
            url: 'getAllAssetSubGroup',
            context: document.body
        }).done(function(result) {
            var html = '<option value="">Choose... </option>';
            $.each(result, function(i,data) {
                html +='<option value="'+data.sub_group_id+'">'+data.sub_group_name+'</option>';
            });
            $('#problem_group_id').html(html);
            $('#asset_group_id').html(html);

        });
    }

    function getAllProblems(){
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
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeProblem('+data.problem_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#asset_group_grid tbody').html(html);
            problemsCombo(result);
        });
    }

    function getAllSolutions(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllSolutions',
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html += "<tr>";
                html +="<td class='align-middle'>"+data.solution_id+"</td>";
                html +="<td class='align-middle'>"+data.solution_name+"</td>";
                html +="<td class='align-middle'>"+data.problem_name+"</td>";
                html +="<td class='align-middle'>"+data.sub_group_name+"</td>";
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeSolution('+data.solution_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#solution_grid tbody').html(html);
        });
    }

    function getAllAssetPartsList(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllAssetParts',
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html += "<tr>";
                html +="<td class='align-middle'>"+data.parts_id+"</td>";
                html +="<td class='align-middle'>"+data.parts_name+"</td>";
                html +="<td class='align-middle'>"+data.sub_group_name+"</td>";
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeAssetParts('+data.parts_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#asset_parts_grid tbody').html(html);
        });
    }



    function saveSolution(){
        var problem_id = $('#problem_id').val();
        var solution_name = $('#solution_name').val();
        var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved new solution.</div>';

        var actionlink = 'saveSolution';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{_token:'{{csrf_token()}}',problem_id:problem_id,solution_name:solution_name},
            context: document.body
        }).done(function(result) {

            if(result.success){
                $("#massageDiv-forSolution").html(massageTest);
                $('#solution_name').val("");
                getAllSolutions();
            }else{
                $("#massageDiv-forSolution").html("Database Error......");
            }
        });
    }

    function saveAssetParts(){
        var asset_group_id = $('#asset_group_id').val();
        var parts_name = $('#parts_name').val();
        var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved asset part.</div>';

        var actionlink = 'saveAssetParts';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{_token:'{{csrf_token()}}',sub_group_id:asset_group_id,parts_name:parts_name},
            context: document.body
        }).done(function(result) {

            if(result.success){
                $("#massageDiv-forAssetParts").html(massageTest);
                $('#parts_name').val("");
                getAllAssetPartsList();
            }else{
                $("#massageDiv-forSolution").html("Database Error......");
            }
        });
    }





    function removeProblem(problem_id){
        $.ajax({
            type: "DELETE",
            url: 'deleteProblem',
            data:{_token:'{{csrf_token()}}',problem_id:problem_id}
        }).done(function(result) {
            getAllProblems();
        });
    }

    function removeSolution(solutionID){
        $.ajax({
            type: "DELETE",
            url: 'deleteSolution',
            data:{_token:'{{csrf_token()}}',solution_id:solutionID}
        }).done(function(result) {
            getAllSolutions();
        });
    }

    function removeAssetParts(partsID){
        $.ajax({
            type: "DELETE",
            url: 'deleteAssetParts',
            data:{_token:'{{csrf_token()}}',parts_id:partsID}
        }).done(function(result) {
            getAllAssetPartsList();
        });
    }


    function saveProblem(){
        var group_id = $('#problem_group_id').val();
        var problemName = $('#problem_name').val();
        var massageTest = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully saved new problem name.</div>';

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
                getAllProblems();
            }else{
                alert('Error');
            }
        });
    }


    function assetGroupCombo(groupData){
        var html = '<option value="">Choose... </option>';
        $.each(groupData, function(i,data) {
            html +='<option value="'+data.group_id+'">'+data.group_name+'</option>';
        });
        $('#assetGroup').html(html);

    }


    function problemsCombo(dataSet){
        var html = '<option value="">Choose... </option>';
        $.each(dataSet, function(i,data) {
            html +='<option value="'+data.problem_id+'">'+data.problem_name+' [ '+data.sub_group_name+' ]</option>';
        });
        $('#problem_id').html(html);
       // $('#sub_group_id').html(html);

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

