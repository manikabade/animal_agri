<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Hen</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_hen']}}</span>
                                    <span>Hen</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                    <i class="	fas fa-feather"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Goat</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_goat']}}</span>
                                    <span>Goat</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                    <i class="fas fa-hippo"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                    

                <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Photo</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_photo']}}</span>
                                    <span>Photo</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                    <i class="fas fa-image"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Video</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_video']}}</span>
                                    <span>Video</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                    <i class="fas fa-file-video"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">News</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_news']}}</span>
                                    <span>News</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                        <i class="fas fa-book-open"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Signup</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_reg']}}</span>
                                    <span>Signup</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                    <i class="fas fa-keyboard"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
