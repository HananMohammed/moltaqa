<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('admin.title-en')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.0')??$howWork->getTranslation('title','en')}}" class="form-control " id="title_en"  placeholder="@lang('admin.enter-en-title')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('admin.title-ar')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.1')??$howWork->getTranslation('title','ar')}}" class="form-control " id="title_ar"  placeholder="@lang('admin.enter-ar-title')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <label class="col-form-label text-right col-lg-4 col-sm-12 " >Select Icon<label class="text-danger">*</label></label><br>
            <select class="form-control select2 col-lg-12 col-sm-12" id="kt_select2_1" name="icon">
                <option value="{{old('icon')}}">@lang('admin.select-icon')</option>
                @foreach($icons as $icon)
                    <option value="{{$icon->id}}"  @if(!empty($howWork->toArray())) @if($icon->id === $howWork->icon()->pluck('id')[0]) selected @endif @endif>{{$icon->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="description_en">@lang('admin.text-en')<label class="text-danger">*</label></label>
                <textarea type="text" name="description[]" class="form-control summernote" id="description_en" placeholder="@lang('dashboard.enter-english-text')" >
                    {{old('description.0')??$howWork->getTranslation('description','en')}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="description_ar">@lang('admin.text-ar')<label class="text-danger">*</label></label>
                <textarea type="text" name="description[]" class="form-control summernote" id="description_ar" placeholder="@lang('dashboard.enter-arabic-text')" >
                    {{old('description.1')??$howWork->getTranslation('description','ar')}}
                </textarea>
            </div>
        </div>
    </div>
</div
    @section('scripts')
    /*editor*/
<script src="{{ asset_public('admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
<script src="{{ asset_public('admin/assets/plugins/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
<script src="{{ asset_public('admin/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
<script>
    // Class definition
    var KTSelect2 = function() {
        // Private functions
        var demos = function() {
            // basic
            $('#kt_select2_1').select2({
                placeholder: "Select a state"
            });
        }
        // Public functions
        return {
            init: function() {
                demos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSelect2.init();
    });    </script>

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


