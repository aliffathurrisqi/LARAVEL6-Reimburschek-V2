@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="block">
                    <div class="block-content">

                        <form method="POST" action={{ route('reimbesement-store') }}>
                            @csrf
                            <div class="">
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

                                        {{-- <div class="input-group mb-3">
                                            <div class="w-25">Nama Outlet</div>
                                            <div class="w-75">: <strong>{{ $reimbesements->outlet_name }}</strong></div>
                                        </div> --}}

                                        {{-- <div class="input-group mb-3">
                                            <div class="w-25">Tanggal</div>
                                            <div class="w-75">: <strong>{{ $reimbesements->created_at->format('d F Y') }}</strong></div>
                                        </div> --}}

                                        <table class="table table-bordered  table-vcenter js-dataTable-full">
                                            <thead>
                                                <tr>
                                                    <th class="d-none d-sm-table-cell text-center">Tanggal</th>
                                                    <th class="d-none d-sm-table-cell text-center">Nama Outlet</th>
                                                    <th class="d-none d-sm-table-cell text-center">Keterangan</th>
                                                    <th class="d-none d-sm-table-cell text-center">Nominal</th>
                                                    <th class="d-none d-sm-table-cell w-25 text-center">Bukti</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $total = 0?>

                                                @foreach ($reimbesements as $reimbesement)

                                                <?php $i = 0; $no = true; ?>


                                                    @foreach ($reimbesement->outlet_details() as $item)

                                                    <?php $total+= $item->total?>

                                                    <?php $no = false ?>
                                                    @foreach ($item->details as $detail)
                                                    <tr>
                                                        @if ($i == 0)
                                                        <td class="text-center" rowspan="{{$reimbesement->detail_total()}}">{{ $reimbesement->reimbesement_date->isoFormat("D MMMM Y") }}</td>
                                                        @endif

                                                        <?php $i++ ?>

                                                        @if ($no == false)
                                                            <td class="text-center" rowspan="{{ $item->details->count() }}">{{ $item->outlet_name }}</td>
                                                            <?php $no = true ?>
                                                        @endif

                                                        <td class="font-w600">
                                                            {{ $detail->keterangan }}
                                                        </td>
                                                        <td>
                                                            Rp {{ number_format($detail->nominal, 2,",",".") }}
                                                        </td>
                                                        <td>
                                                        @if($detail->image)
                                                            <img class="img-fluid w-100" src="{{ asset('media/photos/'.$detail->image.'') }}">
                                                        @endif
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                    @endforeach
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="3" class="text-right">Total</td>
                                                        <td colspan="2"><strong>Rp {{ number_format($total, 2,",",".") }}</strong></td>
                                                    </tr>
                                            </tbody>
                                        </table>

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
