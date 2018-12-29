<div class="panel panel-default">
    <div class="panel-heading">SEO</div>
    <div class="panel-wrapper collapse in">
        <div class="panel-body">
            <div class="form-group">
                <div class="col-md-12">
                    <label class="col-md-12">Title</label>
                    <div class="col-md-12">
                        <input type="text" name="title" placeholder="Ex: Sim số đẹp 0123456" class="form-control form-control-line">
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="col-md-12">Keyword</label>
                    <div class="col-md-12">
                        <input type="text" name="keywork" placeholder="Ex: bán sim, sim số đẹp" class="form-control form-control-line">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Description <span class="help text-danger">*</span></label>
                <div class="col-md-12">
                    <textarea id="description" name="description"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="../plugins/bower_components/tinymce/tinymce.min.js"></script>
<script>
jQuery(document).ready(function () {
    if ($("#description").length > 0) {
        tinymce.init({
            selector: "textarea#description",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        });
    }
});
</script>
@endpush