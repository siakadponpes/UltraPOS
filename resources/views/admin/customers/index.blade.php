@extends('layouts.admin.app')

@section('title', 'Daftar Pelanggan')

@section('content')

    <div class="card mt-4">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title
                        d-flex align-items-center">Daftar Pelanggan</h4>
                </div>
                @if ($blade_user->hasPermissionTo('can_create_admin_customers'))
                    <div class="col-md-6 text-end">
                        <a href="{{ route('admin.customers.create') }}" class="btn btn-default"><i class="bx bx-plus"></i>
                            &nbsp;Tambah Pelanggan</a>
                    </div>
                @endif
            </div>
            <form class="mt-2" action="" method="GET">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group d-flex align-items-center">
                            <input type="text" class="form-control" id="search" name="search"
                                value="{{ request('search') }}" placeholder="Pencarian ...">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Handphone</th>
                        <th scope="col">Alamat Email</th>
                        <th scope="col">Terakhir diperbaharui</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)
                        <tr>
                            <td class="no">{{ ($data->currentpage() - 1) * $data->perpage() + $loop->index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone ?? '-'}}</td>
                            <td>{{ $item->email ?? '-' }}</td>
                            <td>{{ Carbon\Carbon::parse($item->updated_at)->translatedFormat('d F Y') }}
                                <small class="text-muted">{{ Carbon\Carbon::parse($item->updated_at)->format('H:i') }}
                                    WIB</small>
                            </td>
                            <td>
                                <ul class="list-inline hstack gap-2 mb-0">
                                    @include('layouts.admin.partials.act_edit', [
                                        'title' => 'Pelanggan',
                                        'href' => route('admin.customers.edit', $item->id),
                                        'permission' => 'customers',
                                    ])
                                    @include('layouts.admin.partials.act_delete', [
                                        'title' => 'Pelanggan',
                                        'href' => route('admin.customers.destroy', $item->id),
                                        'permission' => 'customers',
                                    ])
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            @include('layouts.admin.partials.pagination', ['data' => $data])
        </div>
    </div>

@endsection
