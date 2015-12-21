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
    @include('suratpraktikumlapangans._form')
</div>
@stop

@section('script')
<script src="{{ asset('packages/select2/select2.min.js')}}"></script>
<script src="{{ asset('packages/select2/select2_locale_id.js')}}"></script>
<script type="text/javascript" src="assets/bootstrapvalidator/js/bootstrapValidator.js"></script>
<!-- InputMask -->
<script src="AdminLTE/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() { 
        $("#jurusan").select2();
        $("#persetujuan").select2();
        $("#angkatan").select2();
        $("#hari").select2();

        $("#pukul").inputmask();
        $('#praklaps')
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
                    hari: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Hari pelaksanaan harus diisi'
                            }
                        }
                    },
                    tanggal: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Tanggal mahasiswa harus diisi'
                            }
                        }
                    },
                    pukul: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Pukul mahasiswa harus diisi'
                            }
                        }
                    },
                    jurusan: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Jurusan harus dipilih'
                            }
                        }
                    },
                    angkatan: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Angkatan harus dipilih'
                            }
                        }
                    },
                    mata_kuliah: {
                        message: 'tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'Mata kuliah harus diisi'
                            }
                        }
                    },
                    dosen: {
                        message: 'tidak valid',
                        validators: {
                            digits: {
                                message: 'Harus angka'
                            }
                        }
                    },
                    asdos: {
                        message: 'tidak valid',
                        validators: {
                            digits: {
                                message: 'Harus angka'
                            }
                        }
                    },
                    mhs: {
                        message: 'tidak valid',
                        validators: {
                            digits: {
                                message: 'harus angka'
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
            $text = $('')
        });
    // console.log('berhasil');   
 });
</script>
@stop