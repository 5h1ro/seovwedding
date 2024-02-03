@extends('layouts.master.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/form-wizard.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/pickers/form-pickadate.css">
    <style>
        .scroll {
            height: 500px;
            overflow-x: hidden;
            overflow-y: auto;
        }

    </style>
@endsection

@section('title')
    <h2>Edit Data</h2>
@endsection

@section('content')
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">

        <div class="row match-height">
            <div class="col-12">
                <div class="row match-height">
                    <!-- Earnings Card -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card earnings-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title mb-1">Data {{ $member->name }}</h4>
                                        <section class="horizontal-wizard">
                                            <div class="bs-stepper horizontal-wizard-example">
                                                <div class="bs-stepper-header" role="tablist">
                                                    <div class="step" data-target="#couple" role="tab"
                                                        id="couple-trigger">
                                                        <button type="button" class="step-trigger">
                                                            <span class="bs-stepper-box">1</span>
                                                            <span class="bs-stepper-label">
                                                                <span class="bs-stepper-title">Mempelai</span>
                                                                <span class="bs-stepper-subtitle">Data mempelai</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="line">
                                                        <i data-feather="chevron-right" class="font-medium-2"></i>
                                                    </div>
                                                    <div class="step" data-target="#schedule" role="tab"
                                                        id="schedule-trigger">
                                                        <button type="button" class="step-trigger">
                                                            <span class="bs-stepper-box">2</span>
                                                            <span class="bs-stepper-label">
                                                                <span class="bs-stepper-title">Acara</span>
                                                                <span class="bs-stepper-subtitle">Data acara</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="line">
                                                        <i data-feather="chevron-right" class="font-medium-2"></i>
                                                    </div>
                                                    <div class="step" data-target="#another" role="tab"
                                                        id="another-trigger">
                                                        <button type="button" class="step-trigger">
                                                            <span class="bs-stepper-box">3</span>
                                                            <span class="bs-stepper-label">
                                                                <span class="bs-stepper-title">Lainnya</span>
                                                                <span class="bs-stepper-subtitle">Data lainnya</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="bs-stepper-content">
                                                    @if ($member->invitation != null)
                                                        <div id="couple" class="content" role="tabpanel"
                                                            aria-labelledby="couple-trigger">
                                                            <div class="content-header">
                                                                <h5 class="mb-0">Detail Mempelai</h5>
                                                                <small class="text-muted">Masukkan data diri</small>
                                                            </div>
                                                            <form id="form1"
                                                                action="{{ route('admin.member.update', $member->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="nickname_man">Nama
                                                                            Panggilan (Pria)</label>
                                                                        <input required type="text" name="nickname_man"
                                                                            id="nickname_man" class="form-control"
                                                                            placeholder="Shiro"
                                                                            value="{{ $member->invitation->nickname_man != null ? $member->invitation->nickname_man : '' }}" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="fullname_man">Nama
                                                                            Lengkap (Pria)</label>
                                                                        <input required type="text" name="fullname_man"
                                                                            id="fullname_man" class="form-control"
                                                                            placeholder="Shiro Tamadoki S.Kom"
                                                                            value="{{ $member->invitation->fullname_man != null ? $member->invitation->fullname_man : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-5">
                                                                        <label class="form-label" for="father_man">Nama
                                                                            Ayah (Pria)</label>
                                                                        <input required type="text" name="father_man"
                                                                            id="father_man" class="form-control"
                                                                            placeholder="Drs. Sutrisno S.H, M.Cs"
                                                                            value="{{ $member->invitation->father_man != null ? $member->invitation->father_man : '' }}" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-5">
                                                                        <label class="form-label" for="mother_man">Nama
                                                                            Ibu (Pria)</label>
                                                                        <input required type="text" name="mother_man"
                                                                            id="mother_man" class="form-control"
                                                                            placeholder="Nike Aprillia S.E, M.Kom"
                                                                            value="{{ $member->invitation->mother_man != null ? $member->invitation->mother_man : '' }}" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-2">
                                                                        <label class="form-label" for="child_man">Anak
                                                                            ke</label>
                                                                        <input required type="number" name="child_man"
                                                                            id="child_man" min="1" class="form-control"
                                                                            placeholder="1"
                                                                            value="{{ $member->invitation->child_man != null ? $member->invitation->child_man : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label" for="photo_man">Foto
                                                                            (Pria)</label>
                                                                        <input
                                                                            {{ $member->invitation->photo_man == null ? 'required' : '' }}
                                                                            class="form-control" type="file"
                                                                            name="photo_man" id="photo_man" />
                                                                        @if ($member->invitation->photo_man != null)
                                                                            <div class="col-12 col-md-3 mt-1">
                                                                                <img id="preview_photo_man"
                                                                                    src="{{ $member->invitation->photo_man }}"
                                                                                    class="form-control">
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="nickname_woman">Nama
                                                                            Panggilan (Wanita)</label>
                                                                        <input required type="text" name="nickname_woman"
                                                                            id="nickname_woman" class="form-control"
                                                                            placeholder="Yuuki"
                                                                            value="{{ $member->invitation->nickname_woman != null ? $member->invitation->nickname_woman : '' }}" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="fullname_woman">Nama
                                                                            Lengkap (Wanita)</label>
                                                                        <input required type="text" name="fullname_woman"
                                                                            id="fullname_woman" class="form-control"
                                                                            placeholder="Yuuki Kojiro S.St"
                                                                            value="{{ $member->invitation->fullname_woman != null ? $member->invitation->fullname_woman : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-5">
                                                                        <label class="form-label"
                                                                            for="father_woman">Nama
                                                                            Ayah (Wanita)</label>
                                                                        <input required type="text" name="father_woman"
                                                                            id="father_woman" class="form-control"
                                                                            placeholder="H. Suprapto S.T"
                                                                            value="{{ $member->invitation->father_woman != null ? $member->invitation->father_woman : '' }}" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-5">
                                                                        <label class="form-label"
                                                                            for="mother_woman">Nama
                                                                            Ibu (Wanita)</label>
                                                                        <input required type="text" name="mother_woman"
                                                                            id="mother_woman" class="form-control"
                                                                            placeholder="Hj. Aini Setia S.T, M.Si"
                                                                            value="{{ $member->invitation->mother_woman != null ? $member->invitation->mother_woman : '' }}" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-2">
                                                                        <label class="form-label" for="child_woman">Anak
                                                                            ke</label>
                                                                        <input required type="number" name="child_woman"
                                                                            id="child_woman" min="1" class="form-control"
                                                                            placeholder="1"
                                                                            value="{{ $member->invitation->child_woman != null ? $member->invitation->child_woman : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label" for="photo_woman">Foto
                                                                            (Wanita)</label>
                                                                        <input
                                                                            {{ $member->invitation->photo_woman == null ? 'required' : '' }}
                                                                            class="form-control" type="file"
                                                                            name="photo_woman" id="photo_woman" />
                                                                        @if ($member->invitation->photo_woman != null)
                                                                            <div class="col-12 col-md-3 mt-1">
                                                                                <img id="preview_photo_woman"
                                                                                    src="{{ $member->invitation->photo_woman }}"
                                                                                    class="form-control">
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label"
                                                                            for="photo_couple">Foto
                                                                            Berdua</label>
                                                                        <input
                                                                            {{ $member->invitation->photo_couple == null ? 'required' : '' }}
                                                                            class="form-control" type="file"
                                                                            name="photo_couple" id="photo_couple" />
                                                                        @if ($member->invitation->photo_couple != null)
                                                                            <div class="col-12 col-md-3 mt-1">
                                                                                <img id="preview_photo_couple"
                                                                                    src="{{ $member->invitation->photo_couple }}"
                                                                                    class="form-control">
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="d-flex justify-content-between">
                                                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                                                    <i data-feather="arrow-left"
                                                                        class="align-middle me-sm-25 me-0"></i>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-primary btn-next">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Next</span>
                                                                    <i data-feather="arrow-right"
                                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="schedule" class="content" role="tabpanel"
                                                            aria-labelledby="schedule-trigger">
                                                            <div class="content-header">
                                                                <h5 class="mb-0">Detail Acara</h5>
                                                                <small>Masukkan data acara</small>
                                                            </div>
                                                            <form id="form2"
                                                                action="{{ route('admin.member.update', $member->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label" for="countdown">Waktu
                                                                            Pernikahan</label>
                                                                        <input required type="text" id="countdown"
                                                                            name="countdown"
                                                                            class="form-control flatpickr-date-time"
                                                                            placeholder="YYYY-MM-DD HH:MM"
                                                                            value="{{ $member->invitation->countdown != null ? $member->invitation->countdown : '' }}" />
                                                                    </div>
                                                                </div>
                                                                @foreach ($member->invitation->schedule as $schedule)
                                                                    <div id="input_schedule">
                                                                        <div class="row">
                                                                            <div class="mb-1 col-md-12">
                                                                                <label class="form-label"
                                                                                    for="name_schedule[]"> Nama Acara
                                                                                </label>
                                                                                <div class="d-flex justify-content-center">
                                                                                    <input type="text"
                                                                                        name="name_schedule[]"
                                                                                        class="form-control"
                                                                                        placeholder="Resepsi"
                                                                                        value="{{ $schedule->name_schedule != null ? $schedule->name_schedule : '' }}" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="mb-1 col-md-12">
                                                                                <label class="form-label"
                                                                                    for="date_schedule[]"> Tanggal Acara
                                                                                </label>
                                                                                <input type="text" name="date_schedule[]"
                                                                                    class="form-control flatpickr-date-time"
                                                                                    placeholder="YYYY-MM-DD HH:MM"
                                                                                    value="{{ $schedule->date_schedule != null ? $schedule->date_schedule : '' }}" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="mb-1 col-md-12">
                                                                                <label class="form-label"
                                                                                    for="address_schedule[]">Alamat</label>
                                                                                <textarea class="form-control" name="address_schedule[]" rows="3"
                                                                                    placeholder="Textarea">{{ $schedule->address_schedule != null ? $schedule->address_schedule : '' }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="mb-1 col-md-12">
                                                                                <label class="form-label"
                                                                                    for="location_schedule[]">Peta</label>
                                                                                <input type="text"
                                                                                    name="location_schedule[]"
                                                                                    class="form-control"
                                                                                    value="{{ $schedule->location_schedule != null ? $schedule->location_schedule : '' }}"
                                                                                    placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.459287455151!2d119.44048421534174!3d-5.1902512962338045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2428a3885c9%3A0x73136b25e030fb14!2sKomp.%20Graha%20Satelit%2C%20Jl.%20Sultan%20Hasanuddin%20Blok%20B14%20No.15%2C%20Pandang%20Pandang%2C%20Kec.%20Somba%20Opu%2C%20Kabupaten%20Gowa%2C%20Sulawesi%20Selatan%2090221!5e0!3m2!1sid!2sid!4v1652326252780!5m2!1sid!2sid" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="mb-1 col-md-12">
                                                                                <label class="form-label"
                                                                                    for="link_location_schedule[]">Link
                                                                                    Peta</label>
                                                                                <input type="text"
                                                                                    name="link_location_schedule[]"
                                                                                    class="form-control"
                                                                                    value="{{ $schedule->link_location_schedule != null ? $schedule->link_location_schedule : '' }}"
                                                                                    placeholder="https://goo.gl/maps/jYeNtGiBLAvgr2Ex5" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group-append">
                                                                            <button id="remove_schedule" type="button"
                                                                                class="btn btn-danger col-12 mb-1">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                                <div id="new_schedule"></div>
                                                                <button id="add_schedule" type="button"
                                                                    class="btn btn-info col-12 mb-1">Tambah Acara</button>
                                                            </form>
                                                            <div class="d-flex justify-content-between">
                                                                <button class="btn btn-primary btn-prev">
                                                                    <i data-feather="arrow-left"
                                                                        class="align-middle me-sm-25 me-0"></i>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-primary btn-next">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Next</span>
                                                                    <i data-feather="arrow-right"
                                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="another" class="content" role="tabpanel"
                                                            aria-labelledby="another-trigger">
                                                            <div class="content-header">
                                                                <h5 class="mb-0">Lainnya</h5>
                                                                <small>Masukkan data yang diperlukan</small>
                                                            </div>
                                                            <form id="form3"
                                                                action="{{ route('admin.member.update', $member->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <h5 class="mb-1">Perjalanan Cinta</h5>
                                                                @foreach ($member->invitation->ls as $ls)
                                                                    <div id="input_ls">
                                                                        <div class="row">
                                                                            <div class="mb-1 col-md-12">
                                                                                <label class="form-label"
                                                                                    for="year_ls[]">Tahun</label>
                                                                                <input type="number" name="year_ls[]"
                                                                                    min="1900" class="form-control"
                                                                                    placeholder="2000"
                                                                                    value="{{ $ls->year_ls }}" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="mb-1 col-md-12">
                                                                                <label class="form-label"
                                                                                    for="story_ls[]">Cerita</label>
                                                                                <textarea class="form-control" name="story_ls[]" rows="3" placeholder="Pada ....">{{ $ls->story_ls }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group-append">
                                                                            <button id="remove_ls" type="button"
                                                                                class="btn btn-danger col-12 mb-1">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                                <div id="new_ls"></div>
                                                                <button id="add_ls" type="button"
                                                                    class="btn btn-info col-12 mb-1">Tambah Cerita</button>
                                                                <h5 class="mb-1">Galeri Foto</h5>
                                                                @foreach ($member->invitation->photo as $key => $photo)
                                                                    <div id="input_photo">
                                                                        <div class="row">
                                                                            <div class="mb-1 col-md-12">
                                                                                <label class="form-label"
                                                                                    for="file_photo[]">Foto</label>
                                                                                <input class="form-control" type="file"
                                                                                    name="file_photo[]" id="file_photo" />
                                                                                <input class="form-control d-none"
                                                                                    type="text" name="name_photo[]"
                                                                                    id="name_photo"
                                                                                    value="{{ $photo->file_photo }}" />
                                                                                @if ($photo->file_photo != null)
                                                                                    <div class="col-12 col-md-3 mt-1">
                                                                                        <img src="{{ $photo->file_photo }}"
                                                                                            class="form-control"
                                                                                            id="preview_file_photo">
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group-append">
                                                                            <button id="remove_photo" type="button"
                                                                                class="btn btn-danger col-12 mb-1">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                                <div id="new_photo"></div>
                                                                <button id="add_photo" type="button"
                                                                    class="btn btn-info col-12 mb-1">Tambah Foto</button>
                                                                <h5 class="mb-0">Amplop Digital</h5>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label" for="bank">Jenis
                                                                            Bank
                                                                        </label>
                                                                        <select class="select2 form-select" id="bank"
                                                                            name="bank" required>
                                                                            <option value="bri"
                                                                                {{ $member->invitation->bank == 'bri' ? 'selected' : '' }}>
                                                                                BRI</option>
                                                                            <option value="bni"
                                                                                {{ $member->invitation->bank == 'bni' ? 'selected' : '' }}>
                                                                                BNI</option>
                                                                            <option value="btn"
                                                                                {{ $member->invitation->bank == 'btn' ? 'selected' : '' }}>
                                                                                BTN</option>
                                                                            <option value="mandiri"
                                                                                {{ $member->invitation->bank == 'mandiri' ? 'selected' : '' }}>
                                                                                Mandiri</option>
                                                                            <option value="bca"
                                                                                {{ $member->invitation->bank == 'bca' ? 'selected' : '' }}>
                                                                                BCA</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="number_bank">Nomor
                                                                            Rekening</label>
                                                                        <input required type="number" name="number_bank"
                                                                            id="number_bank" min="1" class="form-control"
                                                                            placeholder="81810000000000"
                                                                            value="{{ $member->invitation->number_bank != null ? $member->invitation->number_bank : '' }}" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="name_bank">Atas
                                                                            Nama</label>
                                                                        <input required type="text" name="name_bank"
                                                                            id="name_bank" class="form-control"
                                                                            placeholder="Shiro Tamadoki"
                                                                            value="{{ $member->invitation->name_bank != null ? $member->invitation->name_bank : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <h5 class="mb-0">Hadiah</h5>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="name_gift">Nama
                                                                            Penerima</label>
                                                                        <input required type="text" name="name_gift"
                                                                            id="name_gift" class="form-control"
                                                                            placeholder="Shiro & Yuuki"
                                                                            value="{{ $member->invitation->name_gift != null ? $member->invitation->name_gift : '' }}" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="number">Nomor
                                                                            Hp</label>
                                                                        <input required type="text" name="number"
                                                                            id="number" min="1" class="form-control"
                                                                            placeholder="085800000000"
                                                                            value="{{ $member->invitation->number != null ? $member->invitation->number : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label"
                                                                            for="address_gift">Alamat
                                                                            Penerima</label>
                                                                        <textarea required class="form-control" name="address_gift" rows="2"
                                                                            placeholder="Jl. Cendrawasih no 18">{{ $member->invitation->address_gift != null ? $member->invitation->address_gift : '' }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="d-flex justify-content-between">
                                                                <button class="btn btn-primary btn-prev">
                                                                    <i data-feather="arrow-left"
                                                                        class="align-middle me-sm-25 me-0"></i>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-success btn-submit"
                                                                    type="button">Submit</button>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div id="couple" class="content" role="tabpanel"
                                                            aria-labelledby="couple-trigger">
                                                            <div class="content-header">
                                                                <h5 class="mb-0">Detail Mempelai</h5>
                                                                <small class="text-muted">Masukkan data diri</small>
                                                            </div>
                                                            <form id="form1"
                                                                action="{{ route('admin.member.store', $member->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="nickname_man">Nama
                                                                            Panggilan (Pria)</label>
                                                                        <input required type="text" name="nickname_man"
                                                                            id="nickname_man" class="form-control"
                                                                            placeholder="Shiro" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="fullname_man">Nama
                                                                            Lengkap (Pria)</label>
                                                                        <input required type="text" name="fullname_man"
                                                                            id="fullname_man" class="form-control"
                                                                            placeholder="Shiro Tamadoki S.Kom" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-5">
                                                                        <label class="form-label" for="father_man">Nama
                                                                            Ayah (Pria)</label>
                                                                        <input required type="text" name="father_man"
                                                                            id="father_man" class="form-control"
                                                                            placeholder="Drs. Sutrisno S.H, M.Cs" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-5">
                                                                        <label class="form-label" for="mother_man">Nama
                                                                            Ibu (Pria)</label>
                                                                        <input required type="text" name="mother_man"
                                                                            id="mother_man" class="form-control"
                                                                            placeholder="Nike Aprillia S.E, M.Kom" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-2">
                                                                        <label class="form-label" for="child_man">Anak
                                                                            ke</label>
                                                                        <input required type="number" name="child_man"
                                                                            id="child_man" min="1" class="form-control"
                                                                            placeholder="1" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label" for="photo_man">Foto
                                                                            (Pria)</label>
                                                                        <input required class="form-control" type="file"
                                                                            name="photo_man" id="photo_man" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="nickname_woman">Nama
                                                                            Panggilan (Wanita)</label>
                                                                        <input required type="text" name="nickname_woman"
                                                                            id="nickname_woman" class="form-control"
                                                                            placeholder="Yuuki" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="fullname_woman">Nama
                                                                            Lengkap (Wanita)</label>
                                                                        <input required type="text" name="fullname_woman"
                                                                            id="fullname_woman" class="form-control"
                                                                            placeholder="Yuuki Kojiro S.St" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-5">
                                                                        <label class="form-label"
                                                                            for="father_woman">Nama
                                                                            Ayah (Wanita)</label>
                                                                        <input required type="text" name="father_woman"
                                                                            id="father_woman" class="form-control"
                                                                            placeholder="H. Suprapto S.T" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-5">
                                                                        <label class="form-label"
                                                                            for="mother_woman">Nama
                                                                            Ibu (Wanita)</label>
                                                                        <input required type="text" name="mother_woman"
                                                                            id="mother_woman" class="form-control"
                                                                            placeholder="Hj. Aini Setia S.T, M.Si" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-2">
                                                                        <label class="form-label"
                                                                            for="child_woman">Anak
                                                                            ke</label>
                                                                        <input required type="number" name="child_woman"
                                                                            id="child_woman" min="1" class="form-control"
                                                                            placeholder="1" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label"
                                                                            for="photo_woman">Foto
                                                                            (Wanita)</label>
                                                                        <input required class="form-control" type="file"
                                                                            name="photo_woman" id="photo_woman" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label"
                                                                            for="photo_couple">Foto
                                                                            Berdua</label>
                                                                        <input required class="form-control" type="file"
                                                                            name="photo_couple" id="photo_couple" />
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="d-flex justify-content-between">
                                                                <button class="btn btn-outline-secondary btn-prev"
                                                                    disabled>
                                                                    <i data-feather="arrow-left"
                                                                        class="align-middle me-sm-25 me-0"></i>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-primary btn-next">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Next</span>
                                                                    <i data-feather="arrow-right"
                                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="schedule" class="content" role="tabpanel"
                                                            aria-labelledby="schedule-trigger">
                                                            <div class="content-header">
                                                                <h5 class="mb-0">Detail Acara</h5>
                                                                <small>Masukkan data acara</small>
                                                            </div>
                                                            <form id="form2"
                                                                action="{{ route('admin.member.store', $member->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label" for="countdown">Waktu
                                                                            Pernikahan</label>
                                                                        <input required type="text" id="countdown"
                                                                            name="countdown"
                                                                            class="form-control flatpickr-date-time"
                                                                            placeholder="YYYY-MM-DD HH:MM" />
                                                                    </div>
                                                                </div>
                                                                <div id="new_schedule"></div>
                                                                <button id="add_schedule" type="button"
                                                                    class="btn btn-info col-12 mb-1">Tambah Acara</button>
                                                            </form>
                                                            <div class="d-flex justify-content-between">
                                                                <button class="btn btn-primary btn-prev">
                                                                    <i data-feather="arrow-left"
                                                                        class="align-middle me-sm-25 me-0"></i>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-primary btn-next">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Next</span>
                                                                    <i data-feather="arrow-right"
                                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="another" class="content" role="tabpanel"
                                                            aria-labelledby="another-trigger">
                                                            <div class="content-header">
                                                                <h5 class="mb-0">Lainnya</h5>
                                                                <small>Masukkan data yang diperlukan</small>
                                                            </div>
                                                            <form id="form3"
                                                                action="{{ route('admin.member.store', $member->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <h5 class="mb-1">Perjalanan Cinta</h5>
                                                                <div id="new_ls"></div>
                                                                <button id="add_ls" type="button"
                                                                    class="btn btn-info col-12 mb-1">Tambah Cerita</button>
                                                                <h5 class="mb-1">Galeri Foto</h5>
                                                                <div id="new_photo"></div>
                                                                <button id="add_photo" type="button"
                                                                    class="btn btn-info col-12 mb-1">Tambah Foto</button>
                                                                <h5 class="mb-0">Amplop Digital</h5>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label" for="bank">Jenis
                                                                            Bank
                                                                        </label>
                                                                        <select class="select2 form-select" id="bank"
                                                                            name="bank" required>
                                                                            <option value="bri">
                                                                                BRI</option>
                                                                            <option value="bni">
                                                                                BNI</option>
                                                                            <option value="btn">
                                                                                BTN</option>
                                                                            <option value="mandiri">
                                                                                Mandiri</option>
                                                                            <option value="bca">
                                                                                BCA</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label"
                                                                            for="number_bank">Nomor
                                                                            Rekening</label>
                                                                        <input required type="number" name="number_bank"
                                                                            id="number_bank" min="1" class="form-control"
                                                                            placeholder="81810000000000" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="name_bank">Atas
                                                                            Nama</label>
                                                                        <input required type="text" name="name_bank"
                                                                            id="name_bank" class="form-control"
                                                                            placeholder="Shiro Tamadoki" />
                                                                    </div>
                                                                </div>
                                                                <h5 class="mb-0">Hadiah</h5>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="name_gift">Nama
                                                                            Penerima</label>
                                                                        <input required type="text" name="name_gift"
                                                                            id="name_gift" class="form-control"
                                                                            placeholder="Shiro & Yuuki" />
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label class="form-label" for="number">Nomor
                                                                            Hp</label>
                                                                        <input required type="text" name="number"
                                                                            id="number" min="1" class="form-control"
                                                                            placeholder="085800000000" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-1 col-md-12">
                                                                        <label class="form-label"
                                                                            for="address_gift">Alamat
                                                                            Penerima</label>
                                                                        <textarea required class="form-control" name="address_gift" rows="2" placeholder="Jl. Cendrawasih no 18"></textarea>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="d-flex justify-content-between">
                                                                <button class="btn btn-primary btn-prev">
                                                                    <i data-feather="arrow-left"
                                                                        class="align-middle me-sm-25 me-0"></i>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-success btn-submit"
                                                                    type="button">Submit</button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Earnings Card -->
                </div>
            </div>
        </div>

    </section>
    <!-- Dashboard Ecommerce ends -->
@endsection

@section('script')
    <script src="{{ asset('assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    {{-- <script src="{{ asset('assets') }}/js/scripts/forms/form-wizard.js"></script> --}}
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('assets') }}/js/scripts/forms/pickers/form-pickers.js"></script>
    <script type="text/javascript">
        // add row
        $("#add_schedule").click(function() {
            var html = '';
            html += '<div id="input_schedule">';
            html += '<div class = "row" >';
            html += '<div class="mb-1 col-md-12">';
            html += '<label class="form-label" for="name_schedule[]"> Nama Acara </label>';
            html += '<div class="d-flex justify-content-center">';
            html += '<input type="text" name="name_schedule[]" class="form-control" placeholder="Resepsi" />';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            html += '<div class = "row" >';
            html += '<div class="mb-1 col-md-12">';
            html += '<label class="form-label" for="date_schedule[]"> Tanggal Acara </label>';
            html +=
                '<input type="text" name="date_schedule[]" class="form-control flatpickr-date-time" placeholder="YYYY-MM-DD HH:MM" />';
            html += '</div>';
            html += '</div>';

            html += '<div class = "row" >';
            html += '<div class="mb-1 col-md-12">';
            html += '<label class="form-label" for="address_schedule[]">Alamat</label>';
            html +=
                '<textarea class="form-control" name="address_schedule[]" rows="3" placeholder="Textarea"></textarea>';
            html += '</div>';
            html += '</div>';

            html += '<div class = "row" >';
            html += '<div class="mb-1 col-md-12">';
            html += '<label class="form-label" for="location_schedule[]">Peta</label>';
            html +=
                '<input type="text" name="location_schedule[]" class="form-control" placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.459287455151!2d119.44048421534174!3d-5.1902512962338045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2428a3885c9%3A0x73136b25e030fb14!2sKomp.%20Graha%20Satelit%2C%20Jl.%20Sultan%20Hasanuddin%20Blok%20B14%20No.15%2C%20Pandang%20Pandang%2C%20Kec.%20Somba%20Opu%2C%20Kabupaten%20Gowa%2C%20Sulawesi%20Selatan%2090221!5e0!3m2!1sid!2sid!4v1652326252780!5m2!1sid!2sid" />';
            html += '</div>';
            html += '</div>';

            html += '<div class = "row" >';
            html += '<div class="mb-1 col-md-12">';
            html += ' <label class="form-label" for="link_location_schedule[]">Link Peta</label>';
            html +=
                '<input type="text" name="link_location_schedule[]" class="form-control" placeholder="https://goo.gl/maps/jYeNtGiBLAvgr2Ex5" />';
            html += '</div>';
            html += '</div>';

            html += '<div class="input-group-append">';
            html += '<button id="remove_schedule" type="button" class="btn btn-danger col-12 mb-1">Remove</button>';
            html += '</div>';
            html += '</div>';
            $('#new_schedule').append(html);
        });

        $("#add_ls").click(function() {
            var html2 = '';
            html2 += '<div id="input_ls">';
            html2 += '<div class="row">';
            html2 += '<div class="mb-1 col-md-12">';
            html2 += '<label class="form-label" for="year_ls[]">Tahun</label>';
            html2 += '<input type="number" name="year_ls[]" min="1900" class="form-control" placeholder="2000" />';
            html2 += '</div>';
            html2 += '</div>';
            html2 += '<div class="row">';
            html2 += '<div class="mb-1 col-md-12">';
            html2 += '<label class="form-label" for="story_ls[]">Cerita</label>';
            html2 +=
                '<textarea class="form-control" name="story_ls[]" rows="3" placeholder="Pada ...."></textarea>';
            html2 += '</div>';
            html2 += '</div>';
            html2 += '<div class="input-group-append">';
            html2 +=
                '<button id="remove_ls" type="button" class="btn btn-danger col-12 mb-1">Remove</button>';
            html2 += '</div>';
            html2 += '</div>';
            $('#new_ls').append(html2);
        });

        $("#add_photo").click(function() {
            var html3 = '';
            html3 += '<div id="input_photo">';
            html3 += '<div class="row">';
            html3 += '<div class="mb-1 col-md-12">';
            html3 += '<label class="form-label" for="file_photo">Foto</label>';
            html3 += '<input class="form-control d-none" type="text" name="name_photo[]" id="name_photo" />'
            html3 += '<input class="form-control" type="file" name="file_photo[]" id="file_photo"/>';
            html3 += '</div>';
            html3 += '</div>';
            html3 += '<div class="input-group-append">';
            html3 +=
                '<button id="remove_photo" type="button" class="btn btn-danger col-12 mb-1">Remove</button>';
            html3 += '</div>';
            html3 += '</div>';
            $('#new_photo').append(html3);
        });

        $(document).on('click', '#remove_schedule', function() {
            $(this).closest('#input_schedule').remove();
        });

        $(document).on('click', '#remove_ls', function() {
            $(this).closest('#input_ls').remove();
        });

        $(document).on('click', '#remove_photo', function() {
            $(this).closest('#input_photo').remove();
        });
    </script>
    <script type="text/javascript">
        $(document).on('change', '#file_photo', function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                if ($(this).parent('div').children('div').children('#preview_file_photo').length == 0) {
                    var html3 = '';
                    html3 += '<div class="col-12 col-md-3 mt-1">';
                    html3 += '<img src="' + e.target.result + '" class="form-control" id="preview_file_photo">';
                    html3 += '</div>';
                    $(this).parent('div').append(html3);
                } else {
                    $(this).parent('div').children('div').children('#preview_file_photo').attr('src', e.target
                        .result);
                }
            }
            reader.readAsDataURL(this.files[0]);
        });

        $(document).on('change', '#photo_man', function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                if ($(this).parent('div').children('div').children('#preview_photo_man').length == 0) {
                    var html3 = '';
                    html3 += '<div class="col-12 col-md-3 mt-1">';
                    html3 += '<img src="' + e.target.result + '" class="form-control" id="preview_photo_man">';
                    html3 += '</div>';
                    $(this).parent('div').append(html3);
                } else {
                    $(this).parent('div').children('div').children('#preview_photo_man').attr('src', e.target
                        .result);
                }
            }
            reader.readAsDataURL(this.files[0]);
        });

        $(document).on('change', '#photo_woman', function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                if ($(this).parent('div').children('div').children('#preview_photo_woman').length == 0) {
                    var html3 = '';
                    html3 += '<div class="col-12 col-md-3 mt-1">';
                    html3 += '<img src="' + e.target.result +
                        '" class="form-control" id="preview_photo_woman">';
                    html3 += '</div>';
                    $(this).parent('div').append(html3);
                } else {
                    $(this).parent('div').children('div').children('#preview_photo_woman').attr('src', e.target
                        .result);
                }
            }
            reader.readAsDataURL(this.files[0]);
        });

        $(document).on('change', '#photo_couple', function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                if ($(this).parent('div').children('div').children('#preview_photo_couple').length == 0) {
                    var html3 = '';
                    html3 += '<div class="col-12 col-md-3 mt-1">';
                    html3 += '<img src="' + e.target.result +
                        '" class="form-control" id="preview_photo_couple">';
                    html3 += '</div>';
                    $(this).parent('div').append(html3);
                } else {
                    $(this).parent('div').children('div').children('#preview_photo_couple').attr('src', e.target
                        .result);
                }
            }
            reader.readAsDataURL(this.files[0]);
        });
    </script>
    <script>
        $(function() {
            'use strict';

            var horizontalWizard = document.querySelector('.horizontal-wizard-example');

            if (typeof horizontalWizard !== undefined && horizontalWizard !== null) {
                var numberedStepper = new Stepper(horizontalWizard);

                $(horizontalWizard)
                    .find('.btn-next')
                    .each(function() {
                        $(this).on('click', function(e) {
                            var isValid = $(this).parent().siblings('form').valid();
                            if (isValid) {
                                numberedStepper.next();
                            } else {
                                e.preventDefault();
                            }
                        });
                    });

                $(horizontalWizard)
                    .find('.btn-prev')
                    .on('click', function() {
                        numberedStepper.previous();
                    });

                $(horizontalWizard)
                    .find('.btn-submit')
                    .on('click', function() {
                        var isValid = $(this).parent().siblings('form').valid();
                        if (isValid) {
                            $("#form1").append($("#form2").children()).append($("#form3").children()).submit();
                        } else {
                            e.preventDefault();
                        }
                    });
            }
        });
    </script>
@endsection
