"use strict"

// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    var table
    var dt
    var filterPayment

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_example_1").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[2, 'desc']],
            stateSave: true,
            select: {
                style: 'os',
                selector: 'td:first-child',
                className: 'row-selected'
            },
            ajax: {
                url: baseUrl + "crm/datatable",
            },
            columns: [
                { data: 'id' },
                { data: 'kode_order' },
                { data: 'tanggal' },
                { data: 'nama_pic' },
                { data: 'nama' },
                { data: 'deal_status' },
                { data: 'order_status' },
                { data: 'price' },
                { data: null },
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function (data) {
                        return `
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="${data}" />
                            </div>`
                    }
                },
                {
                    targets: 1,
                    orderable: false,
                    render: function (data, type, row, meta) {
                        return (
                            "<a class='fw-bolder text-hover-primary' href='" + baseUrl + "orders/" + row.id + "' >" + data + "</a>"
                        )
                    }
                },
                {
                    targets: 5,
                    orderable: false,
                    render: function (data, type, row, meta) {
                        return (
                            "<span class='badge " + row.deal_badge + "'>" + data + "</span>"
                        )
                    }
                },
                {
                    targets: 6,
                    orderable: false,
                    render: function (data, type, row, meta) {
                        return (
                            "<span class='badge " + row.order_badge + "'>" + data + "</span>"
                        )
                    }
                },
                {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row) {
                        return `
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
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
                                       <a href="#" 
                                            onclick="editOrder('${row.id}')"
                                            class="menu-link px-3"
                                        >
                                        <i class="fas fa-pencil-alt me-5"></i>Edit
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
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
            initToggleToolbar()
            toggleToolbars()
            handleDeleteRows()
            KTMenu.createInstances()
        })
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]')
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw()
        })
    }

    // Filter Datatable
    var handleFilterDatatable = () => {
        // Select filter options
        filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="deal_status"] [name="deal_status"]')
        const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]')

        // Filter datatable on submit
        filterButton.addEventListener('click', function () {
            // Get filter values
            let dealStatusId = ''

            // Get payment value
            filterPayment.forEach(r => {
                if (r.checked) {
                    dealStatusId = r.value
                }

                // Reset payment value if "All" is selected
                if (dealStatusId === 'all') {
                    dealStatusId = ''
                }
            })

            // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.search(dealStatusId).draw()
        })
    }

    // Delete customer
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]')

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault()

                // Select parent row
                const parent = e.target.closest('tr')

                // Get customer name
                const customerName = parent.querySelectorAll('td')[1].innerText

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete " + customerName + "?",
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
                        // Simulate delete request -- for demo purpose only
                        Swal.fire({
                            text: "Deleting " + customerName,
                            icon: "info",
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        }).then(function () {
                            Swal.fire({
                                text: "You have deleted " + customerName + "!.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            }).then(function () {
                                // delete row data from server and re-draw datatable
                                dt.draw()
                            })
                        })
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: customerName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        })
                    }
                })
            })
        })
    }

    // Reset Filter
    var handleResetForm = () => {
        // Select reset button
        const resetButton = document.querySelector('[data-kt-docs-table-filter="reset"]')

        // Reset datatable
        resetButton.addEventListener('click', function () {
            // Reset payment type
            filterPayment[0].checked = true

            // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.search('').draw()
        })
    }

    // Init toggle toolbar
    var initToggleToolbar = function () {
        // Toggle selected action toolbar
        // Select all checkboxes
        const container = document.querySelector('#kt_datatable_example_1')
        const checkboxes = container.querySelectorAll('[type="checkbox"]')

        // Select elements
        const deleteSelected = document.querySelector('[data-kt-docs-table-select="delete_selected"]')

        // Toggle delete selected toolbar
        checkboxes.forEach(c => {
            // Checkbox on click event
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars()
                }, 50)
            })
        })

        // Deleted selected rows
        deleteSelected.addEventListener('click', function () {
            // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
            Swal.fire({
                text: "Are you sure you want to delete selected customers?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                showLoaderOnConfirm: true,
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                },
            }).then(function (result) {
                if (result.value) {
                    // Simulate delete request -- for demo purpose only
                    Swal.fire({
                        text: "Deleting selected customers",
                        icon: "info",
                        buttonsStyling: false,
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function () {
                        Swal.fire({
                            text: "You have deleted all selected customers!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            // delete row data from server and re-draw datatable
                            dt.draw()
                        })

                        // Remove header checked box
                        const headerCheckbox = container.querySelectorAll('[type="checkbox"]')[0]
                        headerCheckbox.checked = false
                    })
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Selected customers was not deleted.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    })
                }
            })
        })
    }

    // Toggle toolbars
    var toggleToolbars = function () {
        // Define variables
        const container = document.querySelector('#kt_datatable_example_1')
        const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]')
        const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]')
        const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]')

        // Select refreshed checkbox DOM elements
        const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]')

        // Detect checkboxes state & count
        let checkedState = false
        let count = 0

        // Count checked boxes
        allCheckboxes.forEach(c => {
            if (c.checked) {
                checkedState = true
                count++
            }
        })

        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count
            toolbarBase.classList.add('d-none')
            toolbarSelected.classList.remove('d-none')
        } else {
            toolbarBase.classList.remove('d-none')
            toolbarSelected.classList.add('d-none')
        }
    }

    // Public methods
    return {
        init: function () {
            initDatatable()
            handleSearchDatatable()
            initToggleToolbar()
            handleFilterDatatable()
            handleDeleteRows()
            handleResetForm()
        }
    }
}()

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init()
})

$('#tanggal').change(function(){
    var date = $(this).val().split('-')
    var day = date[2]
    var month = date[1]

    $('#sumber_id').change(function(){
        var kode = $('#sumber_id option:selected').attr('data-kode')

        $.ajax({
            url: baseUrl + 'customer/getLastCustomer',
            type: 'get',
            success: function(res){
                var format = kode + '/514/' + day + month + '/' + res
                $('#order_code').val(format)
            }
        })
    })

})

$('#kontrak').change(function(){
    $('#deal_status_id').attr('disabled', false)
})

$('#deal_status_id').change(function(){
    var deal_status_id = $(this).val()

    if(deal_status_id !== '2'){
        var date = new Date($('#kontrak').val())
        var month = date.getMonth() + 1

        $('#bulan').val(month)
    }

    $.ajax({
        url: baseUrl + 'crm/ajax_get_status_order',
        type: 'get',
        data: {deal_status_id : deal_status_id},
        beforeSend: function(){
            $('.order-status').empty()
        },
        success: function(res){
            $('.order-status').html(res)
        }
    })
})

$(document).ready(function(){
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
    $('#customer_id').select2({ 
        dropdownParent: "#modal-add-order",
        ajax: {
            url: baseUrl + 'customer/getCustomer',
            processResults: function (data) {
                var resultsData = []

                $.each(data, function(index, item){
                    resultsData.push({
                        id: item.id,
                        text: item.nama + " - " + item.instansi
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
        $(this).data('select2').$dropdown.find(':input.select2-search__field').attr('placeholder', 'Cari Nama Konsumen')
    })
})

function editOrder(id){
        $.ajax({
            url: baseUrl + 'crm/ajax_get_order_by_id',
            type: 'get',
            data: {id : id},
            beforeSend: function(){},
            success: function(res){
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

                $('#edit-order-customer_id').select2({ 
                    dropdownParent: "#modal-edit-order",
                    ajax: {
                        url: baseUrl + 'customer/getCustomer',
                        processResults: function (data) {
                            var resultsData = []
            
                            $.each(data, function(index, item){
                                resultsData.push({
                                    id: item.id,
                                    text: item.nama + " - " + item.instansi,
                                    selected: true
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
                    $(this).data('select2').$dropdown.find(':input.select2-search__field').attr('placeholder', 'Cari Nama Konsumen')
                })

                $('#edit-order-id').val(id)
                $('#edit-order-customer_id').val(res.customer_id)
                $('#edit-order-tanggal').val(res.tanggal)
                $('#edit-order-bulan').val(res.bulan)
                $('#edit-order-sumber_id').val(res.sumber_id)
                $('#edit-order-kontrak').val(res.kontrak)
                $('#edit-order-kode_order').val(res.kode_order)
                $('#edit-order-kode').val(res.kode)
                $('#edit-order-pic_id').val(res.pic_id)
                $('#edit-order-deal_status_id').val(res.deal_status_id)
                $('#edit-order-order_status_id').val(res.order_status_id)
                $('#modal-edit-order').modal('show')
            }
        })
}

/* Form Inputs */
$('#submit-form-order').click(function(){
    var form = $('#form-order').serialize()
    
    $.ajax({
        url: baseUrl + 'crm/create',
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
                    $('#' + successData[s].field).removeClass('is-invalid')
                    $('#' + successData[s].field).addClass('is-valid')
                }

                for (let i = 0; i < errorData.length; ++i) {
                    $('#' + errorData[i].field).removeClass('is-valid')
                    $('#' + errorData[i].field).addClass('is-invalid')
                    $('#' + errorData[i].field + '_error').text(errorData[i].message)
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
                $('#kt_datatable_example_1').DataTable().ajax.reload()
                $('#form-order')[0].reset()
                $('#modal-add-order-close').click()
            }
        }
    })
})