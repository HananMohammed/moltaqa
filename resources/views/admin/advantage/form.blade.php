<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('admin.title-en')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.0')??$advantage->getTranslation('title','en')}}" class="form-control " id="title_en"  placeholder="@lang('admin.enter-en-title')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('admin.title-ar')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.1')??$advantage->getTranslation('title','ar')}}" class="form-control " id="title_ar"  placeholder="@lang('admin.enter-ar-title')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_en">@lang('admin.text-en')<label class="text-danger">*</label></label>
                <textarea name="text[]" id="text_en" class="form-control summernote"  placeholder="@lang('admin.enter-english-text')" >
                    {{old('text.0')??$advantage->getTranslation('text','en')}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_ar">@lang('admin.text-ar')<label class="text-danger">*</label></label>
                <textarea name="text[]" id="text_ar" class="form-control summernote"  placeholder="@lang('admin.enter-arabic-text')" >
                    {{old('text.1')??$advantage->getTranslation('text','ar')}}
                </textarea>
            </div>
        </div>
        <div class="form-group col-lg-6 m-auto">
            <label><label class="text-danger">*</label>@lang('admin.image')</label>
            <div class=" row">
                <div class="col-lg-12 col-xl-12">
                    <div class="image-input image-input-outline" id="kt_contacts_edit_avatar1" style="background-image:url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                        <div class="image-input-wrapper"  style="background-image:@if(!empty($advantage->toArray())) url({{asset_public('storage/uploads/'.$advantage->image)}}) @else url({{asset_public('admin/assets/media/photography.svg')}}) @endif; width:300px;height: 220px;"></div>
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
    </div>
</div>
@section('scripts')
    /*editor*/
    <script src="{{ asset_public('admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script src="{{ asset_public('admin/assets/plugins/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
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

    <script>
        // Class definition

        var KTSummernoteDemo = function () {
            // Private functions
            var demos = function () {
                $('.summernote').summernote({
                    height: 150
                });
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function() {
            KTSummernoteDemo.init();
        });
    </script>
    @if(session()->has('success'))
        <script>Swal.fire("Good Job", "{{session()->get('success')}}", "success");</script>
    @endif
@endsection


