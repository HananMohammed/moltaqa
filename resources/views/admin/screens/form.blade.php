<div class="row align-items-center">
    <div class="form-group col-lg-6 m-auto">
        <label><label class="text-danger">*</label>@lang('admin.image')</label>
        <div class=" row">
            <div class="col-lg-12 col-xl-12">
                <div class="image-input image-input-outline" id="kt_contacts_edit_avatar1" style="background-image:url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                    <div class="image-input-wrapper"  style="background-image:@if(!empty($screen->toArray())) url({{asset_public('storage/uploads/'.$screen->image)}}) @else url({{asset_public('admin/assets/media/photography.svg')}}) @endif; width:300px;height: 220px;"></div>
                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="image">
                    </label>
                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div
@section('scripts')
    <script>
        "use strict";

        // Class definition
        var KTContactsEdit = function () {
            // Base elements
            var avatar;

            var initAvatar1 = function() {
                avatar = new KTImageInput('kt_contacts_edit_avatar1');
            }
            return {
                // public functions
                init: function() {
                    initAvatar1();
                 }
            };
        }();


        jQuery(document).ready(function() {
            KTContactsEdit.init();
        });
    </script>

    @if(session()->has('success'))
        <script>Swal.fire("Good Job", "{{session()->get('success')}}", "success");</script>
    @endif
@endsection


