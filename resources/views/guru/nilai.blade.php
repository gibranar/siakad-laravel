@extends('layouts.app2')
@section('pageTitle', 'Rapot')
@section('title', 'Rapot')
@section('content')
    <div class="w-full">
        <!-- Header -->
        <div class="bg-brand-500 text-gray-200 px-6 py-4 rounded-t-xl">
            <h3 class="text-lg font-semibold">Nilai Rapot</h3>
        </div>

        <form class="bg-white dark:bg-gray-900 shadow rounded-b-xl p-6 space-y-6" action="{{ route('nilai.store') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $nilai->id }}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <label for="nama_guru" class="block text-sm font-medium text-gray-700 dark:text-white">Nama
                            Guru</label>
                        <input type="text" id="nama_guru" name="nama_guru" value="{{ $guru->nama_guru }}" readonly
                            class="w-full mt-1 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-100 dark:bg-gray-800 px-4 py-2.5 text-sm text-gray-700 dark:text-white/90 focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="guru_id" class="block text-sm font-medium text-gray-700 dark:text-white">Kode
                            Mapel</label>
                        <input type="text" id="guru_id" name="guru_id" value="{{ $guru->kode }}" readonly
                            class="w-full mt-1 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-100 dark:bg-gray-800 px-4 py-2.5 text-sm text-gray-700 dark:text-white/90 focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="predikat_a" class="block text-sm font-medium text-gray-700 dark:text-white">Predikat
                            A</label>
                        <textarea id="predikat_a" name="predikat_a" rows="4" required
                            class="w-full mt-1 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-2.5 text-sm text-gray-700 dark:text-white/90 focus:ring-2 focus:ring-brand-500 focus:outline-none">{{ $nilai->deskripsi_a }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="predikat_c" class="block text-sm font-medium text-gray-700 dark:text-white">Predikat
                            C</label>
                        <textarea id="predikat_c" name="predikat_c" rows="4" required
                            class="w-full mt-1 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-2.5 text-sm text-gray-700 dark:text-white/90 focus:ring-2 focus:ring-brand-500 focus:outline-none">{{ $nilai->deskripsi_c }}</textarea>
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <label for="mapel" class="block text-sm font-medium text-gray-700 dark:text-white">Mata
                            Pelajaran</label>
                        <input type="text" id="mapel" name="mapel" value="{{ $guru->mapel->nama_mapel }}" readonly
                            class="w-full mt-1 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-100 dark:bg-gray-800 px-4 py-2.5 text-sm text-gray-700 dark:text-white/90 focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="kkm" class="block text-sm font-medium text-gray-700 dark:text-white">KKM</label>
                        <input type="text" id="kkm" name="kkm" value="{{ $nilai->kkm }}" maxlength="2"
                            onkeypress="return inputAngka(event)" required
                            class="w-full mt-1 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-2.5 text-sm text-gray-700 dark:text-white/90 focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="predikat_b" class="block text-sm font-medium text-gray-700 dark:text-white">Predikat
                            B</label>
                        <textarea id="predikat_b" name="predikat_b" rows="4" required
                            class="w-full mt-1 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-2.5 text-sm text-gray-700 dark:text-white/90 focus:ring-2 focus:ring-brand-500 focus:outline-none">{{ $nilai->deskripsi_b }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="predikat_d" class="block text-sm font-medium text-gray-700 dark:text-white">Predikat
                            D</label>
                        <textarea id="predikat_d" name="predikat_d" rows="4" required
                            class="w-full mt-1 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-2.5 text-sm text-gray-700 dark:text-white/90 focus:ring-2 focus:ring-brand-500 focus:outline-none">{{ $nilai->deskripsi_d }}</textarea>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-6 space-x-4">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-brand-600 hover:bg-brand-700 rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
                    <i class="fas fa-save mr-2"></i> Simpan
                </button>
            </div>
        </form>
    </div>
@endsection

{{-- @extends('template_backend.home')
@section('heading', 'Deskripsi Nilai')
@section('page')
  <li class="breadcrumb-item active">Deskripsi Nilai</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Deskripsi Nilai</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('nilai.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id" value="{{ $nilai->id }}">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_gur">Nama Guru</label>
                            <input type="text" id="nama_gur" name="nama_gur" value="{{ $guru->nama_guru }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="guru_id">Kode Mapel</label>
                            <input type="text" id="guru_id" name="guru_id" value="{{ $guru->kode }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="predikat_a">Predikat A</label>
                            <textarea class="form-control" required name="predikat_a" id="predikat_a" rows="4">{{ $nilai->deskripsi_a }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="predikat_c">Predikat C</label>
                            <textarea class="form-control" required name="predikat_c" id="predikat_c" rows="4">{{ $nilai->deskripsi_c }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mapel">Mata Pelajaran</label>
                            <input type="text" id="mapel" name="mapel" value="{{ $guru->mapel->nama_mapel }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kkm">KKM</label>
                            <input type="text" onkeypress="return inputAngka(event)" maxlength="2" value="{{ $nilai->kkm }}" id="kkm" name="kkm" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="predikat_b">Predikat B</label>
                            <textarea class="form-control" required name="predikat_b" id="predikat_b" rows="4">{{ $nilai->deskripsi_b }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="predikat_d">Predikat D</label>
                            <textarea class="form-control" required name="predikat_d" id="predikat_d" rows="4">{{ $nilai->deskripsi_d }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Simpan</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#back').click(function() {
        window.location="{{ url('/') }}";
        });
    });
    $("#NilaiGuru").addClass("active");
    $("#liNilaiGuru").addClass("menu-open");
    $("#DesGuru").addClass("active");
</script>
@endsection --}}
