@extends('layouts.app')

@section('style')
<link href="{{ asset('material/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Daftar Diagnosis</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Daftar Diagnosis</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th style="width:30%">Pasien</th>
                                <th>Rumah Sakit Tujuan</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($diagnoses as $row)
                                <tr>
                                    <td><center>{{ $row->id }}</center></td>
                                    <td><center>{{ $row->created_at }}</center></td>
                                    <td><a href="{{ route('doctor.patient.detail', $row->registration->patient->id) }}">
                                            {{ $row->registration->patient->name }}
                                            <br>
                                            ID : {{ str_pad($row->registration->patient->id,6,0,STR_PAD_LEFT) }}
                                        </a>
                                    </td>
                                    <td><center>{{ $row->reference->hospital }}</center></td>
                                    
                                </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('material/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{ asset('material/plugins/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
<script>$('#myTable').DataTable({
    "order": [[ 1, "desc" ]]
});</script>
@endsection