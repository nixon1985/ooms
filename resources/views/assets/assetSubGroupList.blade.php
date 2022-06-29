<div class="page-inner">


    <div class="card">
        <!-- .card-body -->
        <div class="col-lg-4" style="display: none" id="massageDiv">
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
            </div>
        </div>

        <div class="card-body">
            <h3 class="card-title"> Add New Sub-Group </h3><!-- form .needs-validation -->
            <form class="needs-validation" novalidate="">
                <!-- .form-row -->
                <div class="form-row">
                    <!-- grid column -->
                    <div class="col-md-5 mb-3">
                        <label for="assetGroup">Asset Group <abbr title="Required">*</abbr></label>
                        <select class="custom-select d-block w-100" id="assetGroup" required="">
                            <option value=""> Choose... </option>
                            <option value="1"> Electric </option>
                            <option value="2"> Glass </option>
                            <option value="3"> General </option>
                        </select>
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-md-4 mb-3">
                        <!-- form grid -->
                        <label for="assetSubGroup">Sub Group <abbr title="Required">*</abbr></label>
                        <input type="text" class="form-control" id="assetSubGroup" placeholder="Sub-Group Name" value="" required="">
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-md-3 mb-3">
                        <label for="addbutton"> </label>
                        <div class="form-actions">
                            <button class="btn btn-primary" type="submit" onclick="saveSubGroup()">Save</button>
                        </div>
                    </div><!-- /grid column -->
                </div><!-- /.form-row -->
            </form><!-- /form .needs-validation -->
        </div><!-- /.card-body -->
    </div><!-- /.card -->


    <div class="card mt-4">
        <!-- .card-body -->
        <div class="card-body">
            <div class="card-header">
                <h2 class="card-title"> Asset Sub-Group </h2><!-- .table-responsive -->
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="asset_sub_group_grid" style="min-width: 678px">
                    <thead>
                    <tr>
                        <th> ID </th>
                        <th> Group </th>
                        <th> Sub-Group </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div><!-- /.table-responsive -->
        </div><!-- /.card-body -->
    </div><!-- /.card -->

</div>




<script>

    $(document).ready(function(){
        getAllAssetSubGroup();
    });


    function saveSubGroup(){
        var groupId = $('#assetGroup').val();
        var subGroupName = $('#assetSubGroup').val();

        var actionlink = 'saveSubGroup';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{_token:'{{csrf_token()}}',group_id:groupId,sub_group_name:subGroupName},
            context: document.body
        }).done(function(result) {
            if(result==1){
                $("#massageDiv").show();
                getAllAssetSubGroup();
            }else{
                alert('Error');
            }
            // alert(result);
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
            $('#asset_sub_group_grid tbody').append(html);
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
        });
    }
</script>
