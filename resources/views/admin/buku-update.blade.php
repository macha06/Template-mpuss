@extends('layout.app')
@section('konten')    
<div class="page-heading">
<div class="page-title">
<div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Update Data Buku</h3>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="index.html">Data Buku</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Data Buku</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Buku</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Judul Buku</label>
                                            <input type="text" id="first-name-vertical" class="form-control"
                                                name="fname" placeholder="Judul Buku">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Penulis</label>
                                            <input type="text" id="first-name-vertical" class="form-control"
                                                name="fname" placeholder="Penulis">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Penerbit</label>
                                            <input type="text" id="first-name-vertical" class="form-control"
                                                name="fname" placeholder="Penerbit">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-vertical">Tahun terbit</label>
                                            <input type="date" id="email-id-vertical" class="form-control"
                                                name="email-id" placeholder="Tahun Terbit">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="formFile" class="form-label">Cover Buku</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">deskripsi</label>
                                            <input type="text" id="first-name-vertical" class="form-control"
                                                name="fname" placeholder="Deskripsi">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Kategori</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Kategori</option>
                                                <option value="1">Romance</option>
                                                <option value="2">Seru</option>
                                                <option value="3">Action</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Stok</label>
                                            <input type="number" id="first-name-vertical" class="form-control"
                                                name="fname" placeholder="Stok">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class='form-check'>
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox3" class='form-check-input'
                                                    checked>
                                                <label for="checkbox3">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection