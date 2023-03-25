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

                                        {{-- {{$reimbesements->outlets->sum('total') }} --}}

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

                                    @foreach ($outlets as $item)
                                        <div class="input-group">
                                            <div class="col-1">
                                                <a class="btn btn-danger" href="/reimbesement/outlet/{{$item->id}}/delete"><i class="bi bi-trash"></i></a>
                                            </div>
                                            <div class="col-2">Outlet</div>
                                            <div class="col-9">: {{ $item->outlet_name }}</div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="col-1"></div>
                                            <div class="col-2">Nominal</div>
                                            <div class="col-9">: Rp {{ $item->total }}</div>
                                        </div>
                                    @endforeach

                                    {{-- <div class="input-group mb-3">
                                        <div class="col-1"></div>
                                        <div class="col-2">Jumlah (Rp) :</div>
                                        <div class="col-9"><input type="text" class="form-control" id="subtotal" value="0" disabled></div>
                                    </div> --}}

                                    @if (count($outlets) < 1)
                                        <div class="text-center mt-5 mb-5 p-5">
                                            Data Masih kosong
                                        </div>
                                    @endif

                                    <div class="text-center mt-5">
                                        <a class="btn btn-secondary w-25 mb-5" href="/reimbesement/{{ $reimbesements->id }}/outlet">
                                            Tambah Outlet
                                        </a>
                                    </div>

                                    <div class="input-group mt-3">
                                        <div class="w-100"><a class="btn btn-danger w-100" href="/reimbesement/history">Back</a></div>
                                    </div>

                                    {{-- <div class="input-group mb-3">
                                        <div class="col-10 text-center"><strong>Total</strong></div>
                                        <div class="col-2"><strong>Rp 500000</strong></div>
                                    </div> --}}
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

</script>


@endsection
