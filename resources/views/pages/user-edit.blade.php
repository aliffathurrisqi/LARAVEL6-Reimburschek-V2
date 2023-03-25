@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-content">

                        <form method="POST" action={{ route('user-update') }} enctype="multipart/form-data">
                            @csrf
                            <div id="data">
                                <div class="col-sm-12 p-2">

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
                                            <div class="text-center w-100">
                                                <button type="button" class="btn btn-warning w-50" id="btn-edit" onclick="show()">Edit</button>
                                            </div>
                                        </div>

                                </div>
                            </div>

                            <div id="form" style="display:none;">
                                <div class="col-sm-12 p-2">

                                        <div class="input-group mb-3">
                                            <div class="w-25">Nama <span class="float-right mr-5">:</span></div>
                                            <div class="w-75"><input type="text" name="name" class="form-control" value="{{ $users->name }}" ></div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="w-25">Posisi <span class="float-right mr-5">:</span></div>
                                            <div class="w-75"><input type="text" name="position" class="form-control" value="{{ $users->position }}" ></div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="w-25">Penempatan <span class="float-right mr-5">:</span></div>
                                            <div class="w-75"><input type="text" name="penempatan" class="form-control" value="{{ $users->penempatan }}" ></div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="text-center w-100">
                                                <button type="button" class="btn btn-danger w-25" onclick="cancel()">Batal</button>
                                                <button type="submit" class="btn btn-primary w-25">Simpan</button>
                                            </div>
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

<script>
    function show(){
        var form = document.getElementById('form');
        var data = document.getElementById('data');

        form.style.display = "block";
        data.style.display = "none";
    }

    function cancel(){
        var form = document.getElementById('form');
        var data = document.getElementById('data');

        form.style.display = "none";
        data.style.display = "block";
    }
</script>


@endsection
