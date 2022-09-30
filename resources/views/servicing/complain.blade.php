
<div class="card">
    <!-- .card-body -->
    <div class="card-body">
        <h3 class="card-title"> Feedback tooltip </h3><!-- form .needs-validation -->
        <form class="needs-validation" novalidate="">
            <!-- .form-row -->
            <div class="form-row">
                <!-- form grid -->
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">First name <abbr title="Required">*</abbr></label> <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required="">
                    <div class="valid-tooltip"> Looks good! </div>
                </div><!-- /form grid -->
                <!-- form grid -->
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Last name <abbr title="Required">*</abbr></label> <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required="">
                    <div class="valid-tooltip"> Looks good! </div>
                </div><!-- /form grid -->
                <!-- form grid -->
                <div class="col-md-12 mb-3">
                    <label for="validationTooltipUsername">Username <abbr title="Required">*</abbr></label> <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                    <div id="inputGroupPrepend" class="invalid-tooltip"> Please choose a username. </div>
                </div><!-- /form grid -->

                <!-- .form-group -->
                <div class="col-md-12 mb-3">
                    <label class="control-label" for="flatpickr-wrap">Wrap element</label>
                    <div class="input-group input-group-alt flatpickr" id="flatpickr9" data-toggle="flatpickr" data-wrap="true" data-alt-input="true" data-alt-format="F j, Y" data-alt-input-class="form-control" data-date-format="Y-m-d" value="2019-11-04" placeholder="DD/MM/YYYY">
                        <input id="flatpickr-wrap" type="text" class="form-control" data-input="">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary" data-toggle=""><i class="far fa-calendar"></i></button> <button type="button" class="btn btn-secondary" data-clear=""><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div><!-- /.form-group -->



            </div><!-- /.form-row -->
            <!-- .form-row -->
            <div class="form-row">
                <!-- grid column -->
                <div class="col-md-5 mb-3">
                    <label for="validationTooltipCountry">Country <abbr title="Required">*</abbr></label> <select class="custom-select d-block w-100" id="validationTooltipCountry" required="">
                        <option value=""> Choose... </option>
                        <option> United States </option>
                    </select>
                    <div class="invalid-feedback"> Please select a valid country. </div>
                </div><!-- /grid column -->
                <!-- grid column -->
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipState">State <abbr title="Required">*</abbr></label> <select class="custom-select d-block w-100" id="validationTooltipState" required="">
                        <option value=""> Choose... </option>
                        <option> California </option>
                    </select>
                    <div class="invalid-feedback"> Please provide a valid state. </div>
                </div><!-- /grid column -->
                <!-- grid column -->
                <div class="col-md-3 mb-3">
                    <label for="validationTooltipZip">Zip <abbr title="Required">*</abbr></label> <input type="text" class="form-control" id="validationTooltipZip" required="">
                    <div class="invalid-feedback"> Zip code required. </div>
                </div><!-- /grid column -->
            </div><!-- /.form-row -->
            <!-- .form-group -->
            <div class="form-group">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="validationTooltip06" required=""> <label class="custom-control-label" for="validationTooltip06">Agree to terms and conditions</label>
                    <div class="invalid-tooltip"> You must agree before submitting. </div>
                </div>
            </div><!-- /.form-group -->
            <!-- .form-actions -->
            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div><!-- /.form-actions -->
        </form><!-- /form .needs-validation -->
    </div><!-- /.card-body -->
</div><!-- /.card -->







<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="assets/vendor/pace-progress/pace.min.js"></script>
<script src="assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
<script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/vendor/masonry-layout/masonry.pkgd.min.js"></script>
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="assets/vendor/flatpickr/plugins/monthSelect/index.js"></script>
<script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/vendor/wnumb/wNumb.min.js"></script>
<script src="assets/vendor/nouisliderribute/nouislider.min.js"></script>
<script src="assets/vendor/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="assets/vendor/blueimp-load-image/js/load-image.all.min.js"></script>
<script src="assets/vendor/blueimp-canvas-to-blob/js/canvas-to-blob.min.js"></script>
<script src="assets/vendor/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
<script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload.js"></script>
<script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
<script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
<script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
<script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
<script src="assets/vendor/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
<script src="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/javascript/pages/colorpicker-demo.js"></script>
<script src="assets/javascript/pages/uploader-demo.js"></script>
<script src="assets/javascript/pages/slider-demo.js"></script> <!-- END PAGE LEVEL JS -->
