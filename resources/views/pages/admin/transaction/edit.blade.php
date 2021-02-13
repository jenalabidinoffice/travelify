@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
        <a href="{{ route('travel-package.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket
        </a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('transaction.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="transaction_status">Status</label>
                    <select name="transaction_status" required class="form-control" placeholder=""
                        aria-describedby="helpId">
                        <option value="{{ $item->transaction_status}}">
                            jangan ubah ({{ $item->transaction_status}})</option>
                        <option value="IN_CART">
                            IN CART
                        </option>
                        <option value="PENDING">
                            PENDING
                        </option>
                        <option value="SUCCESS">
                            SUCCESS
                        </option>
                        <option value="CANCEL">
                            CANCEL
                        </option>
                        <option value="FAILED">
                            FAILED
                        </option>
                    </select>
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
                <button type="submit" class="btn btn-primary btn-block"> simpan</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection