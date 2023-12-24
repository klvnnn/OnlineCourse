@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Learning'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Materi</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">JavaScript Dasar</h6>
                                    <span class="mb-2 text-xs">Deskripsi: <span
                                            class="text-dark font-weight-bold ms-sm-2">Viking Burrito</span></span>
                                    <span class="mb-2 text-xs">Link: <span
                                            class="text-dark ms-sm-2 font-weight-bold">link materi</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
    @include('layouts.footers.auth.footer')
@endsection


