@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-content">

                        <form method="POST" action={{ route('reimbesement-outlet-store') }} enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="col-sm-12 p-2">
                                        <input type="hidden" name="id" value="{{ $reimbesements->id }}">

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

                                        {{-- <div class="input-group mb-3">
                                            <div class="w-25">Nama Outlet</div>
                                            <div class="w-75"><input type="text" name="outlet_name" class="form-control" placeholder="Masukkan nama outlet..."> </div>
                                        </div> --}}

                                        <div class="input-group mb-3">
                                            <div class="w-25">Tanggal</div>
                                            <div class="w-75"><input type="date" name="reimbesement_date" class="form-control" value="{{ $reimbesements->reimbesement_date->format('Y-m-d') }}" readonly> </div>
                                        </div>


                                        <h5 class="text-center">Reimbesement Data</h5>

                                    {{-- <div id="row">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-danger"
                                                    id="DeleteRow" type="button">
                                                    <i class="bi bi-trash"></i>
                                                    Delete
                                                </button>
                                            </div>
                                            <input type="text"
                                                class="form-control m-input">
                                        </div>
                                    </div> --}}

                                    <div class="input-group mb-3">
                                        <div class="col-3">Nama Outlet</div>
                                        <div class="col-9"><input type="text" name="outlet_name" class="form-control" placeholder="Masukkan nama outlet"> </div>
                                    </div>

                                    {{-- <div class="input-group mb-3">
                                        <div class="col-1"></div>
                                        <div class="col-2">Jumlah (Rp) :</div>
                                        <div class="col-9"><input type="text" class="form-control" id="subtotal" value="0" disabled></div>
                                    </div> --}}

                                    <div id="newinput"></div>
                                    <div class="text-center">
                                        <button id="rowAdder" type="button" class="btn btn-secondary w-25 mb-5">
                                            Tambah Keterangan
                                        </button>
                                    </div>

                                    <div class="input-group mt-3">
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

<script>
        $("#rowAdder").click(function () {
            newRowAdd =
            '<div id="row">'+
                '<div class="input-group mb-3">'+
                    '<div class="col-1">'+
                        '<button class="btn btn-danger" id="DeleteRow" type="button">'+
                        '<i class="bi bi-trash"></i></button>'+
                    '</div>'+
                    '<div class="col-2">Keterangan</div>'+
                        '<div class="col-9"><input type="text" name="keterangan[]" class="form-control" placeholder="Masukkan keterangan"> </div>'+
                    '</div>'+
                '<div class="input-group mb-3">'+
                    '<div class="col-1">'+
                    '</div>'+
                    '<div class="col-2">Type Keterangan</div>'+
                    '<div class="col-9">'+
                        '<select name="type[]" class="form-control">'+
                            '<option value="Rp">Rp</option>'+
                            '<option value="Km">Km</option>'+
                        '</select>'+
                    '</div>'+
                '</div>'+
                '<div class="input-group mb-3">'+
                    '<div class="col-1"></div>'+
                    '<div class="col-2">Input</div>'+
                    '<div class="col-3"><input type="number" name="nominal[]" class="form-control" step="any" value="0" min="0"></div>'+
                    '<div class="col-6"><input type="file" name="image[]" class="form-control" required></div>'+
                '</div>'+
            '</div>';

            $('#newinput').append(newRowAdd);
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })

        function berangkat(e){
            let input = document.getElementById("jarak_1").value;
            alert(input)
            document.getElementById("nominal_1_tx").value = input * 2500;
         }
</script>


@endsection
