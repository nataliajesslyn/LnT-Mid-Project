@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 text-white fw-semibold">
                        <i class="bi bi-person-plus me-2"></i>Tambah Karyawan Baru
                    </h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('employees.store') }}" method="POST" novalidate>
                        @csrf

                        {{-- Nama --}}
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">
                                <i class="bi bi-person me-1 text-primary"></i>Nama Karyawan
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan nama (5–20 karakter)">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Umur --}}
                        <div class="mb-3">
                            <label for="age" class="form-label fw-semibold">
                                <i class="bi bi-calendar me-1 text-primary"></i>Umur
                            </label>
                            <input type="number" id="age" name="age" value="{{ old('age') }}"
                                class="form-control @error('age') is-invalid @enderror"
                                placeholder="Masukkan umur (> 20 tahun)" min="1">
                            @error('age')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Alamat --}}
                        <div class="mb-3">
                            <label for="address" class="form-label fw-semibold">
                                <i class="bi bi-geo-alt me-1 text-primary"></i>Alamat
                            </label>
                            <textarea id="address" name="address" rows="3" class="form-control @error('address') is-invalid @enderror"
                                placeholder="Masukkan alamat (10–40 karakter)">{{ old('address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Nomor Telp --}}
                        <div class="mb-4">
                            <label for="phone_number" class="form-label fw-semibold">
                                <i class="bi bi-telephone me-1 text-primary"></i>Nomor Telepon
                            </label>
                            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                class="form-control @error('phone_number') is-invalid @enderror"
                                placeholder="Contoh: 081234567890 (dimulai dari 08)">
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-save me-1"></i>Simpan
                            </button>
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary px-4">
                                <i class="bi bi-arrow-left me-1"></i>Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
