@extends('layouts.master')

@section('title')
{{$artikel->slug}}
@endsection

@section('header')
{{$artikel->judul}}
@endsection

@section('button-add')
    <div class="section-header-button">
        <a href="{{ route('artikel.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection

@section('header-2') {{$artikel->judul}}  @endsection
@section('desc') Author : {{ $artikel->user->name }} @endsection

@section('content')
    <div class="card">
        <div class="card-body">
                        <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$artikel->foto)}}" alt="" style="height: 312.667px; width:  640px;">
                        <ul class="tags">
                            <br>
                            @foreach($artikel->tag as $tag)
                                <li><h3>{{ $tag->name }}</h3></li>
                            @endforeach
                        </ul>
                        <a href="{{ route('detail.blog', $artikel->slug) }}">
                            <h1>
                                {{ $artikel->judul }}
                            </h1>
                        </a>
                            <p>
                                    {!! $artikel->konten !!}
                            </p>
        </div>
      </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css')}}">
@endsection

@section('script')
    <!-- General JS Scripts -->
    <script src="{{ asset('admin/assets/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/tooltip.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/moment.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('admin/assets/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/assets/js/page/modules-datatables.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
    <script src="{{ asset('admin/assets/js/custom.js')}}"></script>
@endsection
