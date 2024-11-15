@extends('layouts.admin.main')
@section('title', 'Admin Tambah Produk')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.product') }}">Produk</a>
                </div>
                <div class="breadcrumb-item">Tambah Produk</div>
            </div>
        </div>

        <a href="{{ route('admin.product') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>

        <div class="card mt-4">
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name">Nama Produk</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name') <span>{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="price">Harga</label>
                    <input type="number" id="price" name="price" value="{{ old('price') }}" required>
                    @error('price') <span>{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="category">Kategori</label>
                    <input type="text" id="category" name="category" value="{{ old('category') }}" required>
                    @error('category') <span>{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" required>{{ old('description') }}</textarea>
                    @error('description') <span>{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="image">Gambar Produk</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                    @error('image') <span>{{ $message }}</span> @enderror
                </div>

                <button type="submit">Simpan Produk</button>
            </form>

        </div>
    </section>
</div>
@endsection
