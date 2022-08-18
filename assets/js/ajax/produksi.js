"use strict"

// Class definition
var KTDatatablesServerSideCustomer = function () {
    // Shared variables
    var table
    var dt
    var filterPayment

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_produksi").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            stateSave: true,
            select: {
                style: 'os',
                selector: 'td:first-child',
                className: 'row-selected'
            },
            ajax: {
                url: baseUrl + "produksi/datatable",
            },
            columns: [
                { data: 'nama' },
                { data: 'kode_order' },
                { data: 'kode_order' },
                { data: 'catatan' },
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
                    targets: 1,
                    orderable: false,
                    render: function (data, type, row, meta) {
                        return (
                            "<a class='fw-bolder text-hover-primary' href='" + baseUrl + "orders/" + row.orderid + "' >" + data + "</a>"
                        )
                    }
                },
                {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row, meta) {
                        return `
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-sm btn-primary me-1" onclick="showModalSpk(${row.id})" ><i class="fas fa-plus me-2"></i> SPK</button>
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
                            </div>
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

const format = (item) => {
    if (!item.id) {
        return item.text;
    }

    var img = "<span class='menu-icon me-3'><svg xmlns='http://www.w3.org/2000/svg' width='26' height='26' viewBox='0 0 24 24' fill='none'><path opacity='0.3' d='M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21ZM16 11V9C16 6.8 14.2 5 12 5C9.8 5 8 6.8 8 9V11C7.2 11 6.5 11.7 6.5 12.5C6.5 13.3 7.2 14 8 14V15C8 17.2 9.8 19 12 19C14.2 19 16 17.2 16 15V14C16.8 14 17.5 13.3 17.5 12.5C17.5 11.7 16.8 11 16 11ZM13.4 15C13.7 15 14 15.3 13.9 15.6C13.6 16.4 12.9 17 12 17C11.1 17 10.4 16.5 10.1 15.7C10 15.4 10.2 15 10.6 15H13.4Z' fill='black'/><path d='M9.2 12.9C9.1 12.8 9.10001 12.7 9.10001 12.6C9.00001 12.2 9.3 11.7 9.7 11.6C10.1 11.5 10.6 11.8 10.7 12.2C10.7 12.3 10.7 12.4 10.7 12.5L9.2 12.9ZM14.8 12.9C14.9 12.8 14.9 12.7 14.9 12.6C15 12.2 14.7 11.7 14.3 11.6C13.9 11.5 13.4 11.8 13.3 12.2C13.3 12.3 13.3 12.4 13.3 12.5L14.8 12.9ZM16 7.29998C16.3 6.99998 16.5 6.69998 16.7 6.29998C16.3 6.29998 15.8 6.30001 15.4 6.20001C15 6.10001 14.7 5.90001 14.4 5.70001C13.8 5.20001 13 5.00002 12.2 4.90002C9.9 4.80002 8.10001 6.79997 8.10001 9.09997V11.4C8.90001 10.7 9.40001 9.8 9.60001 9C11 9.1 13.4 8.69998 14.5 8.29998C14.7 9.39998 15.3 10.5 16.1 11.4V9C16.1 8.5 16 8 15.8 7.5C15.8 7.5 15.9 7.39998 16 7.29998Z' fill='black'/></svg></span>"
    var span = $("<span>", {
        text: " " + item.text
    });
    span.prepend(img)
    return span
}

$('#order_id').select2({ 
    dropdownParent: "#modal-add-produksi",
    ajax: {
        url: baseUrl + 'crm/ajax_get_order',
        processResults: function (data) {
            var resultsData = []

            $.each(data, function(index, item){
                resultsData.push({
                    id: item.id,
                    text: item.kode_order + " - " + item.nama
                })
            })

            return {
              results: resultsData
            };
          },
          cache: true
    },        
    templateResult: function (item) {
        return format(item)
    }    
}).on('select2:opening', function(e) {
    $(this).data('select2').$dropdown.find(':input.select2-search__field').attr('placeholder', 'Cari Order / Konsumen')
})

$('#submit-form-add-produksi').click(function(){
    var form = $('#form-add-produksi').serialize()
    $.ajax({
        url: baseUrl + 'produksi/create',
        type: 'post',
        data: form,
        success: function(res){
            var errorData = res.error
            var successData = res.success

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

                for(let s=0; s < successData.length; ++s){
                    $('#' + successData[s].field).removeClass('is-invalid')
                    $('#' + successData[s].field).addClass('is-valid')
                    $('#' + successData[s].field + '_error').text("")
                }

                for (let i = 0; i < errorData.length; ++i) {
                    $('#' + errorData[i].field).removeClass('is-valid')
                    $('#' + errorData[i].field).addClass('is-invalid')
                    $('#' + errorData[i].field + '_error').text(errorData[i].message)
                }
            }else{
                Swal.fire({
                    text: "Data Berhasil Di Simpan",
                    icon: "success",
                    showCancelButton: false,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Oke !",
                    customClass: {
                        confirmButton: "btn fw-bold btn-success",
                    },
                })

                for(let s=0; s < successData.length; ++s){
                    $('#' + successData[s].field).removeClass('is-invalid')
                    $('#' + successData[s].field + '_error').text("")
                }
                
                $('#kt_datatable_produksi').DataTable().ajax.reload()
                $('#form-add-produksi')[0].reset()
                $('#modal-add-produksi-close-btn').click()
            }
        }
    })
})

function showModalSpk(produksiid){
    $('.accordion-produksi').empty()
    $.ajax({
        url: baseUrl + 'produksi/ajaxGetProduksi',
        type: 'get',
        data: {produksiid : produksiid},
        success: function(res){
            $('.orderid').val(res.data.orderid)
            $('.produksiid').val(produksiid)
            $('#deadline_spk').val(res.data.deadline)
            $('.modal-title-add-spk').text('Tambah SPK -' + res.data.kode_order + ' - ' + res.data.nama)
            $('#modal-add-spk').modal('show')

            var progress = res.detail
            if(progress.length > 0){
                for(let s=0; progress.length; ++s){
                    $('.accordion-produksi').append("\
                        <div class='accordion-item' id='accordion-" + progress[s].progress_id + "'>\
                            <h2 class='accordion-header' id='kt_accordion_1_header_" + progress[s].progress_id + "'>\
                                <button class='accordion-button fs-4 fw-bold collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#kt_accordion_1_body_" + progress[s].progress_id + "' aria-expanded='true' aria-controls='kt_accordion_1_body_" + progress[s].progress_id + "'>" + progress[s].progress + "</button>\
                            </h2>\
                            <div id='kt_accordion_1_body_" + progress[s].progress_id + "' class='accordion-collapse collapse' aria-labelledby='kt_accordion_1_header_" + progress[s].progress_id + "' data-bs-parent='#kt_accordion_1'>\
                                <div class='accordion-body'>\
                                    <div class='row'>\
                                        <input type='hidden' name='progressid[]' value='"+ progress[s].progress_id +"'/>\
                                        <div class='col-lg-5'>\
                                            <div class='mb-10'>\
                                                <label for='exampleFormControlInput1' class='required form-label'>Harga Satuan</label>\
                                                <input type='number' name='harga[]' class='form-control form-control-solid' value='"+  progress[s].harga +"' placeholder='Masukkan Harga Satuan'/>\
                                            </div>  \
                                        </div>\
                                        <div class='col-lg-2'>\
                                            <div class='mb-10'>\
                                                <label for='exampleFormControlInput1' class='required form-label'>Qty</label>\
                                                <input type='number' name='qty[]' class='form-control form-control-solid' value='"+  progress[s].qty +"' placeholder='Qty'/>\
                                            </div>  \
                                        </div>\
                                        <div class='col-lg-5'>\
                                            <div class='mb-10'>\
                                                <label for='exampleFormControlInput1' class='required form-label'>Total Harga</label>\
                                                <input type='number' name='total[]' class='form-control form-control-solid' value='"+  progress[s].total +"' placeholder='Total Harga'/>\
                                            </div>  \
                                        </div>\
                                        <div class='col-lg-12'>\
                                            <div class='mb-5'>\
                                                <label for='exampleFormControlInput1' class='required form-label'>Deskripsi</label>\
                                                <textarea name='deskripsi[]' id='' cols='30' rows='5' class='form-control form-control-solid'>" + progress[s].deskripsi + "</textarea>\
                                            </div>\
                                        </div>\
                                        <div class='col-lg-12'>\
                                            <button class='btn btn-sm btn-danger w-100 remove-progress' data-id='" + progress[s].progress_id + "' type='button'><i class='fas fa-trash me-3'></i> " + progress[s].progress + "</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                        <script>\
                            $('.remove-progress').click(function(){\
                                var id = $(this).attr('data-id');\
                                $('#accordion-' + id).remove();\
                            })\
                        </script>\
                    ")
                }
            }
        }
    })
}

$('#submit-form-add-spk').click(function(){
    var form = $('#form-add-spk').serialize()
    $.ajax({
        url: baseUrl + 'produksi/createSpk',
        type: 'post',
        data: form,
        success: function(res){
            if(res.status === 200){
                Swal.fire({
                    text: "Data Berhasil Di Simpan",
                    icon: "success",
                    showCancelButton: false,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Oke !",
                    customClass: {
                        confirmButton: "btn fw-bold btn-success",
                    },
                })

                $('#modal-add-spk-close-btn').click()
                showModalSpk(res.produksiid)

            }else{
                Swal.fire({
                    text: "Tidak Ada Perubahan",
                    icon: "warning",
                    showCancelButton: false,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Oke !",
                    customClass: {
                        confirmButton: "btn fw-bold btn-success",
                    },
                })
            }
        }
    })
})

$('.btn-add-progress').click(function(){
    $('#modal-add-progress').modal('show')
})

$('#btn-add-progress').click(function(){
    var progressid = $('#select-progress').val()
    var progressName =  $("#select-progress option:selected").text()

    $('.accordion-produksi').append("\
        <div class='accordion-item' id='accordion-" + progressid + "'>\
            <h2 class='accordion-header' id='kt_accordion_1_header_" + progressid + "'>\
                <button class='accordion-button fs-4 fw-bold' type='button' data-bs-toggle='collapse' data-bs-target='#kt_accordion_1_body_" + progressid + "' aria-expanded='true' aria-controls='kt_accordion_1_body_" + progressid + "'>" + progressName + "</button>\
            </h2>\
            <div id='kt_accordion_1_body_" + progressid + "' class='accordion-collapse collapse show' aria-labelledby='kt_accordion_1_header_" + progressid + "' data-bs-parent='#kt_accordion_1'>\
                <div class='accordion-body'>\
                    <div class='row'>\
                        <input type='hidden' name='progressid[]' value='"+ progressid +"'/>\
                        <div class='col-lg-5'>\
                            <div class='mb-10'>\
                                <label for='exampleFormControlInput1' class='required form-label'>Harga Satuan</label>\
                                <input type='number' name='harga[]' id='harga_" + progressid + "' class='form-control form-control-solid' placeholder='Masukkan Harga Satuan'/>\
                            </div>  \
                        </div>\
                        <div class='col-lg-2'>\
                            <div class='mb-10'>\
                                <label for='exampleFormControlInput1' class='required form-label'>Qty</label>\
                                <input type='number' name='qty[]' id='qty_" + progressid + "' class='form-control form-control-solid' placeholder='Qty'/>\
                            </div>  \
                        </div>\
                        <div class='col-lg-5'>\
                            <div class='mb-10'>\
                                <label for='exampleFormControlInput1' class='required form-label'>Total Harga</label>\
                                <input type='number' name='total[]' id='total_" + progressid + "' class='form-control form-control-solid' placeholder='Total Harga' disabled/>\
                            </div>  \
                        </div>\
                        <div class='col-lg-12'>\
                            <div class='mb-5'>\
                                <label for='exampleFormControlInput1' class='required form-label'>Deskripsi</label>\
                                <textarea name='deskripsi[]' id='' cols='30' rows='5' class='form-control form-control-solid'></textarea>\
                            </div>\
                        </div>\
                        <div class='col-lg-12'>\
                            <button class='btn btn-sm btn-danger w-100 remove-progress' data-id='" + progressid + "' type='button'><i class='fas fa-trash me-3'></i> " + progressName + "</button>\
                        </div>\
                    </div>\
                </div>\
            </div>\
        </div>\
        <script>\
            $('#harga_" + progressid + ", #qty_" + progressid + "').keyup(function(){\
                var harga = $('#harga_" + progressid + "').val();\
                var qty = $('#qty_" + progressid + "').val();\
                var c = harga*qty;\
                $('#total_" + progressid + "').val(c);\
            });\
            $('.remove-progress').click(function(){\
                var id = $(this).attr('data-id');\
                $('#accordion-' + id).remove();\
            })\
        </script>\
    ")

    $('#modal-add-progress-close-btn').click()
})