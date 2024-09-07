@extends('layouts.template')

@section('page-title')
    Petugas    
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-tile">
                        {{$data->name}}
                    </h4>
                    <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, architecto?</p>

                    {{-- tombol modals --}}
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#editdata">
                        EDIT
                    </button>
                    <button type="button" class="btn btn-danger mb-4" data-toggle="modal" data-target="#hapusdata">
                        HAPUS    
                    </button>
                    <button class="btn btn-warning mb-4">
                        <a href="{{route('petugas.index')}}">KEMBALI</a>
                    </button>

                    {{-- modals --}}

                    {{-- modals edit data --}}
                    <div class="modal fade" id="editdata" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ubah Data Petugas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('petugas.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="John">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-2" class="control-label">Username</label>
                                                    <input type="text" class="form-control" name="username" value="{{$data->username}}" placeholder="Ex. pijar123">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-2" class="control-label">Status Akun</label>
                                                    <select name="isActive" id="" class="form-control">
                                                        <option value="{{$data->isActive}}">
                                                            @if ($data->isActive)
                                                                Aktif
                                                            @else
                                                                Non-Aktif
                                                            @endif
                                                        </option>
                                                        <option value="1" >Aktif</option>
                                                        <option value="0" >Non-Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="field-2" class="control-label">Profile Picture</label>
                                                    <input type="file" id="input-file-now-custom-3" name="avatar" class="dropify" data-height="500" data-default-file="{{asset('storage/images/avatar/'.$data->avatar)}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- modals hapus data --}}
                    <div class="modal fade" id="hapusdata" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="{{route('petugas.destroy',$data->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <div class="modal-body text-center">
                                        <img src="https://images.freeimages.com/fic/images/icons/1262/amora/256/delete.png"  alt="">
                                        <h3 class="text-center">Apakah Anda Yakin?</h3>
                                    </div>
                                    <div class="modal-footer justify-content-around pt-0 border-top-0">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">KEMBALI</button>
                                        <button type="submit" class="btn btn-danger" name="delete_user">HAPUS</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- ini adalah alert --}}
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Sukses!</strong> {{ session('success') }}.
                        </div>
                    @endif

                    {{-- pembungkus table --}}
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th colspan="2" class="text-center">
                                    <img src="{{asset('storage/images/avatar/'.$data->avatar)}}" class="img-fluid" width="200px" alt="Avatar">
                                </th>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{$data->username}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if ($data->isActive)
                                    <span class="text-success">Aktif</span>
                                    @else
                                    <span class="text-muted">Non-Aktif</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection