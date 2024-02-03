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
@endsection

@section('title')
    <h2>Dashboard</h2>
@endsection

@section('content')
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
        <div class="row match-height">

            <!-- Statistics Card -->
            <div class="col-xl-12 col-md-12 col-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <h4 class="card-title">Statistics</h4>
                    </div>
                    <div class="card-body statistics-body">
                        <div class="row justify-content-around">
                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-2">
                                        <div class="avatar-content">
                                            <i data-feather="user" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ count($member) }}</h4>
                                        <p class="card-text font-small-3 mb-0">Pengguna</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-danger me-2">
                                        <div class="avatar-content">
                                            <i data-feather="file-text" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ count($invitation) }}</h4>
                                        <p class="card-text font-small-3 mb-0">Undangan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics Card -->
        </div>

    </section>
    <!-- Dashboard Ecommerce ends -->
@endsection

@section('script')
    <script src="{{ asset('assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="{{ asset('assets') }}/js/scripts/forms/form-wizard.js"></script>
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
            html3 += '<label class="form-label" for="file_photo[]">Foto</label>';
            html3 += '<input class="form-control" type="file" name="file_photo[]"/>';
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
@endsection
