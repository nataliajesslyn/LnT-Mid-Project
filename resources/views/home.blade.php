@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-white fw-semibold">
                <i class="bi bi-people me-2"></i>Daftar Karyawan
            </h5>
            <a href="{{ route('employees.create') }}" class="btn btn-warning btn-sm fw-semibold">
                <i class="bi bi-plus-circle me-1"></i>Tambah Karyawan
            </a>
        </div>
        <div class="card-body p-0">
            @if ($employees->isEmpty())
                <div class="text-center py-5 text-muted">
                    <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                    <p class="mb-0">Belum ada data karyawan.</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead style="background:#ebf4ff;">
                            <tr>
                                <th class="ps-4" style="width:40px;">#</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th class="text-center" style="width:160px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $i => $employee)
                                <tr>
                                    <td class="ps-4 text-muted small">{{ $employees->firstItem() + $i }}</td>
                                    <td class="fw-semibold">{{ $employee->name }}</td>
                                    <td>{{ $employee->age }} thn</td>
                                    <td class="text-muted">{{ $employee->address }}</td>
                                    <td>
                                        <span class="badge bg-light text-dark border">
                                            <i class="bi bi-telephone me-1"></i>{{ $employee->phone_number }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('employees.edit', $employee) }}"
                                            class="btn btn-sm btn-outline-primary me-1">
                                            <i class="bi bi-pencil-square me-1"></i>Edit
                                        </a>
                                        <form action="{{ route('employees.destroy', $employee) }}" method="POST"
                                            class="d-inline-block"
                                            onsubmit="return confirm('Yakin ingin menghapus karyawan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash me-1"></i>Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center px-4 py-3 border-top">
                    <small class="text-muted">
                        Menampilkan {{ $employees->firstItem() }}–{{ $employees->lastItem() }}
                        dari {{ $employees->total() }} karyawan
                    </small>
                    {{ $employees->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
@endsection
