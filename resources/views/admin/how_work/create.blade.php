@extends('admin.layouts.app')
@section('title' ,'Create How It Work Section')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('admin.new-section')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.adminPanel')}}" class="text-muted">@lang('admin.adminPanel')</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascrpit:;" class="text-muted">@lang('admin.new-section')</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                @if(!empty($errors->any()))
                    <div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">
                            <ol>
                                @if($errors->any())
                                    {!! implode('',$errors->all('<li>:message</li>')) !!}
                                @endif
                            </ol>
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">@lang('admin.create-how-work')</h3>
                            </div>
                            <!--begin::Form-->
                            <form action="{{route('admin.how-work.store') }}" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    @csrf
                                    @include('admin.how_work.form')
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2">@lang('admin.submit')</button>
                                    <a href="{{route('admin.adminPanel')}}" class="btn btn-secondary">@lang('admin.close')</a>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
