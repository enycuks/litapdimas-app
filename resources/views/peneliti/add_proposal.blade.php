@extends('layout.v_template')

@section('konten')
    <div class="row">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                <form class="repeater" enctype="multipart/form-data">    
                <div class="card">
                    <a href="#addproduct-billinginfo-collapse" class="text-dark"
                        data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="addproduct-billinginfo-collapse">
                        <div class="p-4">

                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                        <div
                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            01
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">Pernyataan Peneliti</h5>
                                    <p class="text-muted text-truncate mb-0">Isi Semua Data Dengan Benar
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>

                        </div>
                    </a>
                    
                    <div id="addproduct-billinginfo-collapse" class="collapse show"
                        data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            
                                <div class="mb-3">
                                    <label class="form-label" name="judul">Judul Usulan</label>
                                    <textarea required="" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="mb-3">
                                            <label class="form-label">Klaster</label>
                                            <select name="klaster" class="form-control select2">
                                                <option value="" disabled selected hidden>--Pilih
                                                    Klaster--</option>
                                                    @foreach ($klas['data'] as $v)
                                                        @if ($v['pengelola'] == "PT" and $v['akses_negeri'] == "Y")
                                                            <option value="{{ $v['id_kategori'] }}">{{ $v['nama_kategori'] }}({{ $v['pengelola'] }})</option> 
                                                        @endif
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" class="control-label">Bidang
                                                Ilmu</label>
                                            <select name="bidang_ilmu" class="form-control select2">
                                                <option value="" disabled selected hidden>--Pilih
                                                    Bidang Ilmu--</option>
                                                    @foreach ($bidang['data'] as $b)
                                                        <option value="{{ $b['id_bidang'] }}">{{ $b['bidangilmu'] }}
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" class="control-label">Tama Pada
                                                ARKAN</label>
                                            <select name="arkan" class="form-control select2">
                                                <option value="" disabled selected hidden>--Pilih
                                                    Tema ARKAN--</option>
                                                    @foreach ($tema['data'] as $t)
                                                        <option value="{{ $t['id_sub'] }}">{{ $t['subarkan'] }}
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" class="control-label">Luaran
                                                Kegiatan</label>

                                            <select name="luaran" class="select2 form-control select2-multiple"
                                                multiple="multiple" data-placeholder="--Pilih Luaran--">
                                                @foreach ($luaran['data'] as $t)
                                                        <option value="{{ $t['id_luaran'] }}">{{ $t['luaran'] }}
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" class="control-label">Jenis
                                                Penelitian</label>
                                            <select name="jenis" class="form-control select2">
                                                <option value="" disabled selected hidden>--Pilih
                                                    Jenis Penelitian--</option>
                                                <option value="EL">Electronic</option>
                                                <option value="FA">Fashion</option>
                                                <option value="FI">Fitness</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="mb-0">
                                    <label class="form-label" for="productdesc">Kontribusi terhadap pengembangan keilmuan prodi</label>
                                    <select name="kontribusi" class="form-control select2">
                                        <option value="EL">Berkontribusi</option>
                                        <option value="FA">Tidak Berkontribusi</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row mb-4">
                                <div class="col ms-auto">
                                    <div class="d-flex justify-content-center flex-wrap gap-2">
                                        <a href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </a>
                                        <a href="#" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </a>
                                        
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row-->  
                        </div>
                    </div>

 

                <div class="card">
                    <a href="" class="text-dark"
                        data-bs-toggle="collapse" aria-expanded="true"
                        aria-haspopup="true" aria-controls="addproduct-img-collapse">
                        <div class="p-4">

                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                        <div
                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            02
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">Data Peneliti</h5>
                                    <p class="text-muted text-truncate mb-0">Isi Semua Data Dengan Benar
                                    </p>
                                </div>

                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>
                            
                        </div>
                    </a>
                    
                    <div id="addproduct-img-collapse" class="collapse"
                        data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <h5>Peneliti</h5>
                            <hr>
                            
                                <div data-repeater-list="group-a">
                                    <div data-repeater-item class="row">
                                        <div  class="mb-3 col-lg-4">
                                            <label class="form-label" for="name">Asal PT:</label>
                                            <input type="text" id="name" name="untyped-input" class="form-control" placeholder="Enter your full name" disabled />
                                        </div>

                                        <div  class="mb-3 col-lg-4">
                                            <label class="form-label" for="email">Nama:</label>
                                            <input type="email" id="email" class="form-control" placeholder="Enter your email address" />
                                        </div>

                                        <div  class="mb-3 col-lg-3">
                                            <label class="form-label" for="subject">NIP/NIDN:</label>
                                            <input type="text" id="subject" class="form-control" readonly />
                                        </div>

                                        <div class="col-lg-1 align-self-center mt-2">
                                            <div class="d-grid">
                                                <input data-repeater-delete type="button" class="btn btn-primary" value="Hapus"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Tambah"/>

                            <br>
                            <br>
                            <h5>Mahasiswa</h5>
                            <hr>
                                <div class="row">                                                            
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">NIM</label>
                                            <input type="text" class="form-control" placeholder="Masukkan NIM Mahasiswa">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">                                                            
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">NIM</label>
                                            <input type="text" class="form-control" placeholder="Masukkan NIM Mahasiswa">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <a href="#addproduct-metadata-collapse" class="text-dark collapsed"
                        data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false"
                        aria-haspopup="true" aria-controls="addproduct-metadata-collapse">
                        <div class="p-4">

                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                        <div
                                            class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            03
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="font-size-16 mb-1">Unggah Berkas</h5>
                                    <p class="text-muted text-truncate mb-0">Unggah Berkas Proposal & RAB
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>

                        </div>
                    </a>

                    <div id="addproduct-metadata-collapse" class="collapse"
                        data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-6">
                                        <label class="form-label">Propsal</label>
                                        <input type="file" class="form-control" placeholder="Upload Proposal">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-6">
                                        <label class="form-label">RAB</label>
                                        <input type="file" class="form-control" placeholder="Upload RAB">
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row --> 
@endsection

