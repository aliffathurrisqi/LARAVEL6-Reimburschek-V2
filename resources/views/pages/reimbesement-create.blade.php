@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-content">

                        <form method="POST" action={{ route('reimbesement-store') }} enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="col-sm-12 p-2">
                                        <input type="hidden" name="name" value="{{ $users->name }}">
                                        <input type="hidden" name="position" value="{{ $users->position }}">
                                        <input type="hidden" name="penempatan" value="{{ $users->penempatan }}">

                                        <div class="input-group mb-3">
                                            <div class="w-25">Nama</div>
                                            <div class="w-75">: <strong>{{ $users->name }}</strong></div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="w-25">Posisi</div>
                                            <div class="w-75">: <strong>{{ $users->position }}</strong></div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="w-25">Penempatan</div>
                                            <div class="w-75">: <strong>{{ $users->penempatan }}</strong></div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="w-25">Tanggal</div>
                                            <div class="w-75"><input type="date" name="reimbesement_date" class="form-control"> </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="w-100"><button type="submit" class="btn btn-primary w-100">Simpan Data</button></div>
                                        </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->


@endsection
