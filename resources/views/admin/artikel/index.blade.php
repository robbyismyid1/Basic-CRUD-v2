@extends('layouts.master')

@section('title')
    Artikel
@endsection

@section('header')
Artikel
@endsection

@section('button-add')
    <div class="section-header-button">
        <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection
@section('header-1') Kumpulan data artikels @endsection
@section('header-2') Artikel @endsection
@section('desc') Kumpulan data artikels @endsection

@section('content')

    <div class="row">

        {{-- Navs Artikel --}}
        <div class="col-12">
            <div class="card mb-0">
                <div class="card-body">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                        <a class="nav-link active" href="">All <span class="badge badge-white">{{ count($count) }}</span></a>
                        </li> 
                    </ul>
                </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Posts</h4>
            </div>
            <div class="card-body">
              <div class="float-left">
                <form id="q">
                <select class="form-control selectric" id="act">
                  <option value="all"><a href="{{ route('artikel.index') }}" id="all"> All</a></option>
                  <option>Move to Draft</option>
                  <option>Move to Pending</option>
                  <option>Delete Pemanently</option>
                </select>
                </form>
              </div>
              <div class="float-right">
                <form action="{{ route('artikel.index') }}">
                  <div class="input-group">
                    <input type="text" class="form-control" name="cari" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="clearfix mb-3"></div>

              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th class="text-center pt-2">
                      #
                    </th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Author</th>
                    <th>Created At</th>
                    <th>Tags</th>
                  </tr>
                  @foreach($artikel as $data)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td><br>{{ $data->judul }}
                            <div class="table-links">
                                <a href="{{ route('artikel.show', ['id'=>$data->id]) }}">View</a>
                                <div class="bullet"></div>
                                <a href="{{ route('artikel.edit', ['id'=>$data->id]) }}">Edit</a>
                                <div class="bullet"></div>
                                <a href="{{ route('artikel.destroy', ['id'=>$data->id]) }}" class="text-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-form').submit();">Delete</a>
                                    <form id="delete-form" action="{{ route('artikel.destroy', ['id'=>$data->id]) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                            </div>
                        </td>
                        <td>
                            {{ $data->kategori->nama }}
                        </td>
                        <td>
                            
                                <img alt="image" src="{{ asset('admin/assets/img/avatar/avatar-5.png')}}" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">{{ $data->user->name }}</div>
                            
                        </td>
                        <td>{{ $data->created_at->diffForHumans() }}</td>
                        <td>
                            @foreach($data->tag as $item)
                                <div class="badge badge-primary">
                                    {{ $item->name }}
                                </div>
                            @endforeach
                        </td>
                    </tr>

                    @endforeach
                </table>
              </div>
              <div class="float-right">
               {{ $artikel->appends(Request::all())->links() }}
              </div>
            </div>
          </div>
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
@endsection
