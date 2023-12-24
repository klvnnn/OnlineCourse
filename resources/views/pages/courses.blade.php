@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Courses'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-4 pt-2">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success btn-xs me-2"
                                href="{{ route('page', ['page' => 'detail']) }}">
                                <i class="fas fa-eye"></i> &nbsp; Detail
                            </a>
                            <a class="btn btn-primary btn-xs me-2"
                                href="">
                                <i class="fas fa-edit"></i> &nbsp; Ubah
                            </a>
                            <button class="btn btn-danger btn-xs deletePanduan" value="">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </div>
                        <div class="d-block">
                            <img src="http://via.placeholder.com/400x300" class="img-fluid border-radius-lg" width="400" height="300">
                        </div>
                    </div>
                    <div class="card-body pt-2">
                            <p class="card-title h5 d-block text-darker">
                            JavaScript Dasar
                            </p>
                            <p class="card-description">
                            Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
                            </p>
                        <div class="author mb-2">
                            <div class="name">
                                <span>Durasi</span>
                                <div class="stats">
                                <small class="fas fa-clock">&nbsp;19 Jam</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <a class="btn btn-primary btn-xl" href="{{ route('page', ['page' => 'learning']) }}">Lihat Kelas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection