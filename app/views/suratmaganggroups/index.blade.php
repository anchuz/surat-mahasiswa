@extends('layouts.master')

@section('asset')
    {{HTML::style("assets/css/select2-bootstrap.css")}} 
    <link rel="stylesheet" href="{{ asset('packages/select2/select2.css')}}" />
    <link rel="stylesheet" href="assets/bootstrapvalidator/css/bootstrapValidator.css"/>
@stop

@section('title')
	{{ $title }}
@stop

@section('breadcrumb')
	<li><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">@yield('title')</li>
@stop

@section('content')
<div class="row">    
    @include('suratmaganggroups._form')
</div>
@stop

@section('script')
<!-- DATA TABES SCRIPT -->
<script src="{{ asset('packages/select2/select2.min.js')}}"></script>
<script src="{{ asset('packages/select2/select2_locale_id.js')}}"></script>
<script type="text/javascript" src="assets/bootstrapvalidator/js/bootstrapValidator.js"></script>
{{-- <script src="{{ asset('assets/jquery-validation-1.13.1/dist/jquery.validate.min.js')}}"></script> --}}
<script type="text/javascript">
    $(document).ready(function() { 
        $("#prodi").select2();
        $("#persetujuan").select2();
        $("#angkatan").select2();

        $('#maganggroups')
            .bootstrapValidator({
                fields: {
                    kepada: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Tujuan surat harus diisi'
                            }
                        }
                    },
                    kota: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Kota Alamat surat harus diisi'
                            }
                        }
                    },
                    jadwal: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Jadwal pelaksanaan harus diisi'
                            }
                        }
                    },
                    prodi: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Prodi harus dipilih'
                            }
                        }
                    },
                    persetujuan: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Pesetujuan harus dipilih'
                            }
                        }
                    },
                }
            })
            .on('error.form.bv', function(e) {
            console.log('error.form.bv');
 
            // You can get the form instance and then access API
            var $form = $(e.target);
            console.log($form.data('bootstrapValidator').getInvalidFields());
 
            // If you want to prevent the default handler (bootstrapValidator._onError(e))
            // e.preventDefault();
            })
            .on('error.form.bv', function(e) {
            console.log('error.form.bv');
 
            // You can get the form instance and then access API
            var $form = $(e.target);
            console.log($form.data('bootstrapValidator').getInvalidFields());
 
            // If you want to prevent the default handler (bootstrapValidator._onError(e))
            // e.preventDefault();
            })
            .on('success.form.bv', function(e) {
                console.log('success.form.bv');
     
                // If you want to prevent the default handler (bootstrapValidator._onSuccess(e))
                // e.preventDefault();
            })
            .on('error.field.bv', function(e, data) {
                console.log('error.field.bv -->', data);
            })
            .on('success.field.bv', function(e, data) {
                console.log('success.field.bv -->', data);
            });
        // Validate the form manually
        $('#buatSurat').click(function() {
            // $('#defaultForm').bootstrapValidator('validate');
            //alert('berhasil');
            //console.log('berhasil');
        });       


        var max_fields      = 6; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x <= max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="box-body"><div class="box box-warning"><div class="box-body"><div class="form-group"><label>Nama</label><input class="form-control" placeholder="Masukkan Nama" name="mynama[]"/><label>NIM</label><input class="form-control" placeholder="NIM" name="mynim[]"/></div></div></div><a href="#" class="remove_field btn btn-warning">Remove</a></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
        // console.log('berhasil');   
 });
</script>
@stop