"use strict"

// Class definition
var KTDatatablesServerSideCustomer = function () {
    // Shared variables
    var table
    var dt
    var filterPayment

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_customer").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[0, 'desc']],
            stateSave: true,
            select: {
                style: 'os',
                selector: 'td:first-child',
                className: 'row-selected'
            },
            ajax: {
                url: baseUrl + "customer/datatable",
            },
            columns: [
                { data: 'nama' },
                { data: 'nohp' },
                { data: 'jenis_instansi' },
                { data: 'instansi' },
                { data: 'timestamp' },
                { data: null },
            ],
            columnDefs: [
                {
                    targets: 0,
                    data: null,
                    orderable: true,
                    render: function (data, type, row, meta) {
                        return `
                            <a href="${baseUrl}customer/${row.id}" class="text-dark text-hover-primary">${data}</a>
                        `
                    }
                },
                {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row, meta) {
                        return `
                            <a href="" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                Actions
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="${baseUrl}customer/${row.id}" class="menu-link px-3">
                                        <i class="fas fa-eye me-5"></i>Detail
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" 
                                        onclick="editCustomer('${row.id}','${row.nama}','${row.nohp}','${row.instansi_id}','${row.instansi}')"
                                        class="menu-link px-3"
                                    >
                                        <i class="fas fa-pencil-alt me-5"></i>Edit
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" 
                                        onclick="deleteCustomer('${row.id}','${row.nama}')"
                                        class="menu-link px-3">
                                        <i class="fas fa-trash me-5"></i>Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        `
                    },
                },
            ],
            fixedColumns:   {
                heightMatch: 'none'
            },    
            // Add data-filter attribute
            createdRow: function (row, data, dataIndex) {
                $(row).find('td:eq(4)').attr('data-filter', data.deal_status)
            }
        })

        table = dt.$

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on('draw', function () {
            KTMenu.createInstances()
        })

    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search-customer"]')
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw()
        })
    }

    // Public methods
    return {
        init: function () {
            initDatatable()
            handleSearchDatatable()
        }
    }
}()

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSideCustomer.init()
})

function editCustomer(id,nama,nohp,instansi_id,instansi){
    $('#edit-cust_id').val(id)
    $('#edit-konsumen-nama').val(nama)
    $('#edit-konsumen-nohp').val(nohp)
    $('#edit-konsumen-instansi_id').val(instansi_id)
    $('#edit-konsumen-instansi').val(instansi)
    $('#modal-edit-customer-only').modal('show')
}

function deleteCustomer(id, nama){
    Swal.fire({
        text: "Are you sure you want to delete " + nama + "?",
        icon: "warning",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Yes, delete!",
        cancelButtonText: "No, cancel",
        customClass: {
            confirmButton: "btn fw-bold btn-danger",
            cancelButton: "btn fw-bold btn-active-light-primary"
        }
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: baseUrl + 'customer/delete/' + id,
                type: 'post',
                beforeSend: function(){
                    Swal.fire({
                        text: "Deleting " + nama,
                        icon: "info",
                        buttonsStyling: false,
                        showConfirmButton: false,
                        timer: 2000
                    })
                },
                success: function(res){
                    if(res.status == 200){
                        Swal.fire({
                            text: "You have deleted " + nama + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        })
                    }

                    $('#kt_datatable_customer').DataTable().ajax.reload()
                }
            })
        } else if (result.dismiss === 'cancel') {
            Swal.fire({
                text: nama + " was not deleted.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn fw-bold btn-primary",
                }
            })
        }
    })
}

$('#submit-form-konsumen-only').click(function(){
    var form = $('#form-konsumen-only').serialize()
    
    $.ajax({
        url: baseUrl + 'customer/create',
        type: 'post',
        data: form,
        success: function(res){
            if(res.status === 400){
                Swal.fire({
                    text: "Data Gagal Di Simpan, Silahkan Perbaiki Terlebih Dahulu",
                    icon: "warning",
                    showCancelButton: false,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Oke !",
                    customClass: {
                        confirmButton: "btn fw-bold btn-success",
                    },
                })

                var errorData = res.error
                var successData = res.success

                for(let s=0; s < successData.length; ++s){
                    $('#konsumen-' + successData[s].field).removeClass('is-invalid')
                    $('#konsumen-' + successData[s].field).addClass('is-valid')
                    $('#konsumen-' + successData[s].field + '_error').text("")
                }

                for (let i = 0; i < errorData.length; ++i) {
                    $('#konsumen-' + errorData[i].field).removeClass('is-valid')
                    $('#konsumen-' + errorData[i].field).addClass('is-invalid')
                    $('#konsumen-' + errorData[i].field + '_error').text(errorData[i].message)
                }
            }else{
                var nama = res.success.nama
                Swal.fire({
                    text: "Data " + nama + " Berhasil Di Simpan",
                    icon: "success",
                    showCancelButton: false,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Oke !",
                    customClass: {
                        confirmButton: "btn fw-bold btn-success",
                    },
                })
                $('#kt_datatable_customer').DataTable().ajax.reload()
                $('#form-konsumen-only')[0].reset();
                $('#modal-add-customer-only-close-btn').click()
            }
        }
    })
})

$('#submit-form-edit-konsumen-only').click(function(){
    var form = $('#form-edit-konsumen-only').serialize()
    
    $.ajax({
        url: baseUrl + 'customer/edit',
        type: 'post',
        data: form,
        success: function(res){
            if(res.status === 400){
                Swal.fire({
                    text: "Data Gagal Di Simpan, Silahkan Perbaiki Terlebih Dahulu",
                    icon: "warning",
                    showCancelButton: false,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Oke !",
                    customClass: {
                        confirmButton: "btn fw-bold btn-success",
                    },
                })

                var errorData = res.error
                var successData = res.success

                for(let s=0; s < successData.length; ++s){
                    $('#edit-konsumen-' + successData[s].field).removeClass('is-invalid')
                    $('#edit-konsumen-' + successData[s].field).addClass('is-valid')
                    $('#edit-konsumen-' + successData[s].field + '_error').text("")
                }

                for (let i = 0; i < errorData.length; ++i) {
                    $('#edit-konsumen-' + errorData[i].field).removeClass('is-valid')
                    $('#edit-konsumen-' + errorData[i].field).addClass('is-invalid')
                    $('#edit-konsumen-' + errorData[i].field + '_error').text(errorData[i].message)
                }
            }else{
                var nama = res.success.nama
                Swal.fire({
                    text: "Data " + nama + " Berhasil Di Simpan",
                    icon: "success",
                    showCancelButton: false,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Oke !",
                    customClass: {
                        confirmButton: "btn fw-bold btn-success",
                    },
                })
                $('#kt_datatable_customer').DataTable().ajax.reload()
                $('#modal-edit-customer-only-close-btn').click()
            }
        }
    })
})