@extends('admin.layout.frame')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3><a href="{{ route('admin.photo.index') }}">Photo</a></h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.photo.index') }}">Photo</a></li>
                            <li class="breadcrumb-item active">Photo Create Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h1 class="card-title">Photo Information</h1>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {!! Form::open ([
                                'url'=> route('admin.photo.store'),
                                'enctype'=>'multipart/form-data',
                                'id'=>"add-form"
                            ])!!}

                                @include('admin.photo.form')
                                {!! Form::close() !!}
{{--                                <form action="{{ route('photo.store') }}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    @include('admin.photo.form')--}}
{{--                                </form>--}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
