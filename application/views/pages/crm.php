<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Nav-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder mt-n12">
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-white py-5 me-6 active" data-bs-toggle="tab" href="#tab_konsumen">CRM</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-white py-5 me-6" data-bs-toggle="tab" href="#tab_crm">Data Order</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-white py-5 me-6" data-bs-toggle="tab" href="#tab_harga">Harga Rinci</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-white py-5 me-6" href="../../demo9/dist/apps/projects/budget.html">Kendala Produksi</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-white py-5 me-6" href="../../demo9/dist/apps/projects/users.html">ACC FAW</a>
            </li>
            <!--end::Nav item-->
        </ul>
        <!--end::Nav-->

        <!-- begin::tab content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab_konsumen" role="tabpanel">
                <!-- end::Row -->
                <div class="card card-flush mt-10">
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::CRUD-->
                        <div class="py-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-wrap mb-5">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1 mb-2 mb-md-0">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-docs-table-filter="search-customer" class="form-control form-control-solid w-450px ps-15" placeholder="Search ..." />
                                </div>
                                <!--end::Search-->
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Add customer-->
                                    <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#modal-import-customer" data-bs-toggle="tooltip" title="Import Customer">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil022.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M5 16C3.3 16 2 14.7 2 13C2 11.3 3.3 10 5 10H5.1C5 9.7 5 9.3 5 9C5 6.2 7.2 4 10 4C11.9 4 13.5 5 14.3 6.5C14.8 6.2 15.4 6 16 6C17.7 6 19 7.3 19 9C19 9.4 18.9 9.7 18.8 10C18.9 10 18.9 10 19 10C20.7 10 22 11.3 22 13C22 14.7 20.7 16 19 16H5ZM8 13.6H16L12.7 10.3C12.3 9.89999 11.7 9.89999 11.3 10.3L8 13.6Z" fill="black"/>
                                            <path d="M11 13.6V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19V13.6H11Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Import Customer</button>
                                    <!--end::Add customer-->

                                    <!--begin::Add customer-->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-add-customer" data-bs-toggle="tooltip" title="Add Customer">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add Customer</button>
                                    <!--end::Add customer-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Datatable-->
                            <table id="kt_datatable_customer" class="table align-middle table-row-dashed fs-6 gy-5">
                                <thead>
                                    <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                        <th>Nama</th>
                                        <th>No. Hp</th>
                                        <th>Tipe Instansi</th>
                                        <th>Nama Instansi</th>
                                        <th>Last Update</th>
                                        <th class="text-end min-w-100px"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-bold"></tbody>
                            </table>
                            <!--end::Datatable-->
                        </div>
                        <!--end::CRUD-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            
            <div class="tab-pane fade" id="tab_crm" role="tabpanel">
                <!--begin::Row-->
                <div class="row g-6 g-xl-9 mt-2">
                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <!--begin::Summary-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="flex-column justify-content-start">
                                    <h3 class="fw-bolder mb-1">Total Target</h3>
                                    <h1 class="fw-bolder mb-1 text-danger"><b>Rp. 250.000.000</b></h1>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card title-->
                                <div class="flex-column justify-content-end">
                                    <h3 class="text-end fw-bolder mb-1">Capaian (bulan)</h3>
                                    <h1 class="text-end mb-1 text-success">Rp. 231.000.000</h1>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9 pt-5">
                                <div class="d-flex flex-column">
                                    <div class="d-flex justify-content-between w-100 fs-6 mb-3">
                                        <span>Progress To Target</span>
                                        <span>88%</span>
                                    </div>
                                    <div class="h-8px bg-light rounded mb-3">
                                        <div class="bg-danger rounded h-8px" role="progressbar" style="width: 68%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-3">
                        <!--begin::Summary-->
                        <div class="card bg-primary">
                            <span class="menu-icon m-6 mb-0">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com014.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="white"></path>
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="white"></rect>
                                    <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="white"></path>
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="white"></rect>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>

                            <div class="card-body d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2"><?= $belum_dihargai ?></span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-white pt-1 fw-semibold fs-6">Konsumen Belum Di Beri Harga</span>
                                <!--end::Subtitle-->
                            </div>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-3">
                        <!--begin::Summary-->
                        <div class="card bg-warning">
                            <span class="menu-icon m-6 mb-0">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com014.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none">
                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="white"/>
                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="white"/>
                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="white"/>
                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="white"/>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>

                            <div class="card-body d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2">4</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-white pt-1 fw-semibold fs-6">Total Konsumen Prioritas</span>
                                <!--end::Subtitle-->
                            </div>
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Col-->
                </div>
                <!-- end::Row -->
                <div class="card card-flush mt-10">
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::CRUD-->
                        <div class="py-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-wrap mb-5">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1 mb-2 mb-md-0">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-450px ps-15" placeholder="Search ..." />
                                </div>
                                <!--end::Search-->
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                    <!--begin::Filter-->
                                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Filter Status</button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                                        <!--begin::Content-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fs-5 fw-bold mb-3">Deal Status Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex flex-column flex-wrap fw-bold" data-kt-docs-table-filter="deal_status">
                                                    <!--begin::Option-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                        <input class="form-check-input" type="radio" name="deal_status" value="all" checked="checked" />
                                                        <span class="form-check-label text-gray-600">All</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <?php foreach($deal_status->result() as $ds){ ?>
                                                    <!--begin::Option-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                                        <input class="form-check-input" type="radio" name="deal_status" value="<?= $ds->status ?>" />
                                                        <span class="form-check-label text-gray-600"><?= $ds->status ?></span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <?php } ?>
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-docs-table-filter="reset">Reset</button>
                                                <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-docs-table-filter="filter">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Filter-->
                                    <!--begin::Add customer-->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-add-order" data-bs-toggle="tooltip" title="Add Customer">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add Order</button>
                                    <!--end::Add customer-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                                    <div class="fw-bolder me-5">
                                    <span class="me-2" data-kt-docs-table-select="selected_count"></span>Selected</div>
                                    <button type="button" class="btn btn-danger" data-kt-docs-table-select="delete_selected">Selection Action</button>
                                </div>
                                <!--end::Group actions-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Datatable-->
                            <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                                <thead>
                                    <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
                                            </div>
                                        </th>
                                        <th>Kode Order</th>
                                        <th>Tanggal</th>
                                        <th>PIC</th>
                                        <th>Nama Konsumen</th>
                                        <th>Status</th>
                                        <th>Follow Up</th>
                                        <th>Total Harga</th>
                                        <th class="text-end min-w-100px"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-bold"></tbody>
                            </table>
                            <!--end::Datatable-->
                        </div>
                        <!--end::CRUD-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>

            <div class="tab-pane fade" id="tab_harga" role="tabpanel">
                <!--begin::Row-->
                <div class="row g-6 g-xl-9 mt-2">
                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <!--begin::Summary-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bolder mb-1">Tasks Summary</h3>
                                    <div class="fs-6 fw-bold text-gray-400">24 Overdue Tasks</div>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9 pt-5">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Chart-->
                                    <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                                        <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                            <span class="fs-2qx fw-bolder">237</span>
                                            <span class="fs-6 fw-bold text-gray-400">Total Tasks</span>
                                        </div>
                                        <canvas id="project_overview_chart"></canvas>
                                    </div>
                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                        <!--begin::Label-->
                                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                            <div class="bullet bg-primary me-3"></div>
                                            <div class="text-gray-400">Active</div>
                                            <div class="ms-auto fw-bolder text-gray-700">30</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                            <div class="bullet bg-success me-3"></div>
                                            <div class="text-gray-400">Completed</div>
                                            <div class="ms-auto fw-bolder text-gray-700">45</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                            <div class="bullet bg-danger me-3"></div>
                                            <div class="text-gray-400">Overdue</div>
                                            <div class="ms-auto fw-bolder text-gray-700">0</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fs-6 fw-bold align-items-center">
                                            <div class="bullet bg-gray-300 me-3"></div>
                                            <div class="text-gray-400">Yet to start</div>
                                            <div class="ms-auto fw-bolder text-gray-700">25</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <div class="fs-6 text-gray-700">
                                            <a href="#" class="fw-bolder me-1">Invite New .NET Collaborators</a>to create great outstanding business to business .jsp modutr class scripts</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Summary-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <!--begin::Graph-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bolder mb-1">Tasks Over Time</h3>
                                    <!--begin::Labels-->
                                    <div class="fs-6 d-flex text-gray-400 fs-6 fw-bold">
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center me-6">
                                        <span class="menu-bullet d-flex align-items-center me-2">
                                            <span class="bullet bg-success"></span>
                                        </span>Complete</div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                        <span class="menu-bullet d-flex align-items-center me-2">
                                            <span class="bullet bg-primary"></span>
                                        </span>Incomplete</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Select-->
                                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px">
                                        <option value="1">2020 Q1</option>
                                        <option value="2">2020 Q2</option>
                                        <option value="3" selected="selected">2020 Q3</option>
                                        <option value="4">2020 Q4</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-10 pb-0 px-5">
                                <!--begin::Chart-->
                                <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Graph-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bolder mb-1">What's on the road?</h3>
                                    <div class="fs-6 text-gray-400">Total 482 participants</div>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Select-->
                                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px">
                                        <option value="1" selected="selected">Options</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9 pt-4">
                                <!--begin::Dates-->
                                <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                            <span class="opacity-50 fs-7 fw-bold">Su</span>
                                            <span class="fs-6 fw-bolder">22</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                            <span class="opacity-50 fs-7 fw-bold">Mo</span>
                                            <span class="fs-6 fw-bolder">23</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                            <span class="opacity-50 fs-7 fw-bold">Tu</span>
                                            <span class="fs-6 fw-bolder">24</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                            <span class="opacity-50 fs-7 fw-bold">We</span>
                                            <span class="fs-6 fw-bolder">25</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                            <span class="opacity-50 fs-7 fw-bold">Th</span>
                                            <span class="fs-6 fw-bolder">26</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                            <span class="opacity-50 fs-7 fw-bold">Fr</span>
                                            <span class="fs-6 fw-bolder">27</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                            <span class="opacity-50 fs-7 fw-bold">Sa</span>
                                            <span class="fs-6 fw-bolder">28</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                            <span class="opacity-50 fs-7 fw-bold">Su</span>
                                            <span class="fs-6 fw-bolder">29</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                            <span class="opacity-50 fs-7 fw-bold">Mo</span>
                                            <span class="fs-6 fw-bolder">30</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-1">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                            <span class="opacity-50 fs-7 fw-bold">Tu</span>
                                            <span class="fs-6 fw-bolder">31</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                </ul>
                                <!--end::Dates-->
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_0" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Walter White</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Kendell Trevor</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Bob Harris</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Bob Harris</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_2" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Naomi Hayabusa</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">13:00 - 14:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Naomi Hayabusa</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_3" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Walter White</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Bob Harris</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_4" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Terry Robins</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_5" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Peter Marcus</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Peter Marcus</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Peter Marcus</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_6" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">10:00 - 11:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Caleb Donaldson</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Walter White</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_7" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Walter White</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Terry Robins</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_8" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Mark Randall</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_9" class="tab-pane fade show">
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">11:00 - 11:45
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Karina Clarke</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Yannis Gloverson</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Time-->
                                        <div class="d-flex flex-stack position-relative mt-8">
                                            <!--begin::Bar-->
                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                            <!--end::Bar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold ms-5 text-gray-600">
                                                <!--begin::Time-->
                                                <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                                <!--end::Time-->
                                                <!--begin::Title-->
                                                <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                <!--end::Title-->
                                                <!--begin::User-->
                                                <div class="text-gray-400">Lead by
                                                <a href="#">Sean Bean</a></div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Day-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bolder mb-1">Latest Files</h3>
                                    <div class="fs-6 text-gray-400">Total 382 fiels, 2,6GB space usage</div>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9 pt-3">
                                <!--begin::Files-->
                                <div class="d-flex flex-column mb-9">
                                    <!--begin::File-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-30px me-5">
                                            <img alt="Icon" src="assets/media/svg/files/pdf.svg" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Details-->
                                        <div class="fw-bold">
                                            <a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Project tech requirements</a>
                                            <div class="text-gray-400">2 days ago
                                            <a href="#">Karina Clark</a></div>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 1-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef109853">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <div class="px-7 py-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div>
                                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef109853" data-allow-clear="true">
                                                            <option></option>
                                                            <option value="1">Approved</option>
                                                            <option value="2">Pending</option>
                                                            <option value="2">In Process</option>
                                                            <option value="2">Rejected</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Member Type:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <div class="d-flex">
                                                        <!--begin::Options-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                            <span class="form-check-label">Author</span>
                                                        </label>
                                                        <!--end::Options-->
                                                        <!--begin::Options-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                            <span class="form-check-label">Customer</span>
                                                        </label>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Notifications:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                        <label class="form-check-label">Enabled</label>
                                                    </div>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Menu 1-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::File-->
                                    <!--begin::File-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-30px me-5">
                                            <img alt="Icon" src="assets/media/svg/files/doc.svg" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Details-->
                                        <div class="fw-bold">
                                            <a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Create FureStibe branding proposal</a>
                                            <div class="text-gray-400">Due in 1 day
                                            <a href="#">Marcus Blake</a></div>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 1-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef109a15">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <div class="px-7 py-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div>
                                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef109a15" data-allow-clear="true">
                                                            <option></option>
                                                            <option value="1">Approved</option>
                                                            <option value="2">Pending</option>
                                                            <option value="2">In Process</option>
                                                            <option value="2">Rejected</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Member Type:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <div class="d-flex">
                                                        <!--begin::Options-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                            <span class="form-check-label">Author</span>
                                                        </label>
                                                        <!--end::Options-->
                                                        <!--begin::Options-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                            <span class="form-check-label">Customer</span>
                                                        </label>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Notifications:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                        <label class="form-check-label">Enabled</label>
                                                    </div>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Menu 1-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::File-->
                                    <!--begin::File-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-30px me-5">
                                            <img alt="Icon" src="assets/media/svg/files/css.svg" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Details-->
                                        <div class="fw-bold">
                                            <a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Completed Project Stylings</a>
                                            <div class="text-gray-400">Due in 1 day
                                            <a href="#">Terry Barry</a></div>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 1-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef109bce">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <div class="px-7 py-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div>
                                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef109bce" data-allow-clear="true">
                                                            <option></option>
                                                            <option value="1">Approved</option>
                                                            <option value="2">Pending</option>
                                                            <option value="2">In Process</option>
                                                            <option value="2">Rejected</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Member Type:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <div class="d-flex">
                                                        <!--begin::Options-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                            <span class="form-check-label">Author</span>
                                                        </label>
                                                        <!--end::Options-->
                                                        <!--begin::Options-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                            <span class="form-check-label">Customer</span>
                                                        </label>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Notifications:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                        <label class="form-check-label">Enabled</label>
                                                    </div>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Menu 1-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::File-->
                                    <!--begin::File-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-30px me-5">
                                            <img alt="Icon" src="assets/media/svg/files/ai.svg" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Details-->
                                        <div class="fw-bold">
                                            <a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Create Project Wireframes</a>
                                            <div class="text-gray-400">Due in 3 days
                                            <a href="#">Roth Bloom</a></div>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 1-->
                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef109d85">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                                            <div class="px-7 py-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Status:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div>
                                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef109d85" data-allow-clear="true">
                                                            <option></option>
                                                            <option value="1">Approved</option>
                                                            <option value="2">Pending</option>
                                                            <option value="2">In Process</option>
                                                            <option value="2">Rejected</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Member Type:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <div class="d-flex">
                                                        <!--begin::Options-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                            <span class="form-check-label">Author</span>
                                                        </label>
                                                        <!--end::Options-->
                                                        <!--begin::Options-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                            <span class="form-check-label">Customer</span>
                                                        </label>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold">Notifications:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                        <label class="form-check-label">Enabled</label>
                                                    </div>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Menu 1-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::File-->
                                </div>
                                <!--end::Files-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: svg/files/upload.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 67" fill="none">
                                            <path opacity="0.25" d="M8.375 11.167C8.375 6.54161 12.1246 2.79199 16.75 2.79199H43.9893C46.2105 2.79199 48.3407 3.67436 49.9113 5.24497L56.172 11.5057C57.7426 13.0763 58.625 15.2065 58.625 17.4277V55.8337C58.625 60.459 54.8754 64.2087 50.25 64.2087H16.75C12.1246 64.2087 8.375 60.459 8.375 55.8337V11.167Z" fill="#00A3FF" />
                                            <path d="M41.875 5.28162C41.875 3.90663 42.9896 2.79199 44.3646 2.79199V2.79199C46.3455 2.79199 48.2452 3.57889 49.6459 4.97957L56.4374 11.7711C57.8381 13.1718 58.625 15.0715 58.625 17.0524V17.0524C58.625 18.4274 57.5104 19.542 56.1354 19.542H44.6667C43.1249 19.542 41.875 18.2921 41.875 16.7503V5.28162Z" fill="#00A3FF" />
                                            <path d="M32.4311 25.3368C32.1018 25.4731 31.7933 25.675 31.5257 25.9427L23.1507 34.3177C22.0605 35.4079 22.0605 37.1755 23.1507 38.2657C24.2409 39.3559 26.0085 39.3559 27.0987 38.2657L30.708 34.6563V47.4583C30.708 49.0001 31.9579 50.25 33.4997 50.25C35.0415 50.25 36.2913 49.0001 36.2913 47.4583V34.6563L39.9007 38.2657C40.9909 39.3559 42.7585 39.3559 43.8487 38.2657C44.9389 37.1755 44.9389 35.4079 43.8487 34.3177L35.4737 25.9427C34.6511 25.1201 33.443 24.9182 32.4311 25.3368Z" fill="#00A3FF" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <h4 class="text-gray-900 fw-bolder">Quick file uploader</h4>
                                            <div class="fs-6 text-gray-700">Drag &amp; Drop or choose files from computer</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Card body -->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bolder mb-1">New Contibutors</h3>
                                    <div class="fs-6 text-gray-400">From total 482 Participants</div>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card toolbar-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Avatar-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Image-->
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Emma Smith</a>
                                        <div class="text-gray-400">8 Pending &amp; 97 Completed Tasks</div>
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Badge-->
                                    <div class="badge badge-light ms-auto">5</div>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Avatar-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Melody Macy</a>
                                        <div class="text-gray-400">5 Pending &amp; 84 Completed</div>
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Badge-->
                                    <div class="badge badge-light ms-auto">8</div>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Avatar-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Image-->
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Max Smith</a>
                                        <div class="text-gray-400">9 Pending &amp; 103 Completed</div>
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Badge-->
                                    <div class="badge badge-light ms-auto">9</div>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Avatar-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Image-->
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Sean Bean</a>
                                        <div class="text-gray-400">3 Pending &amp; 55 Completed</div>
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Badge-->
                                    <div class="badge badge-light ms-auto">3</div>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Image-->
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Brian Cox</a>
                                        <div class="text-gray-400">4 Pending &amp; 115 Completed</div>
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Badge-->
                                    <div class="badge badge-light ms-auto">4</div>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <!--begin::Tasks-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bolder mb-1">My Tasks</h3>
                                    <div class="fs-6 text-gray-400">Total 25 tasks in backlog</div>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column mb-9 p-9 pt-3">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center position-relative mb-7">
                                    <!--begin::Label-->
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <!--end::Label-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Create FureStibe branding logo</a>
                                        <!--begin::Info-->
                                        <div class="text-gray-400">Due in 1 day
                                        <a href="#">Karina Clark</a></div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef10a4d6">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef10a4d6" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Member Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Notifications:</label>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center position-relative mb-7">
                                    <!--begin::Label-->
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <!--end::Label-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
                                        <!--begin::Info-->
                                        <div class="text-gray-400">Due in 3 days
                                        <a href="#">Rober Doe</a></div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef10a6be">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef10a6be" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Member Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Notifications:</label>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center position-relative mb-7">
                                    <!--begin::Label-->
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <!--end::Label-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>
                                        <!--begin::Info-->
                                        <div class="text-gray-400">Due in 1 week
                                        <a href="#">Neil Owen</a></div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef10a86f">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef10a86f" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Member Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Notifications:</label>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center position-relative mb-7">
                                    <!--begin::Label-->
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <!--end::Label-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Dashgboard UI &amp; UX for Leafr CRM</a>
                                        <!--begin::Info-->
                                        <div class="text-gray-400">Due in 1 week
                                        <a href="#">Olivia Wild</a></div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef10aa20">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef10aa20" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Member Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Notifications:</label>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center position-relative">
                                    <!--begin::Label-->
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <!--end::Label-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Details-->
                                    <div class="fw-bold">
                                        <a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
                                        <!--begin::Info-->
                                        <div class="text-gray-400">Due in 2 weeks
                                        <a href="#">Sean Bean</a></div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf1ef10abca">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf1ef10abca" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Member Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Notifications:</label>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Tasks-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>

            <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                ...
            </div>
        </div>
        <!-- end::tab content -->
        
    </div>
    <!--end::Container-->
</div>

<div class="modal fade" tabindex="-1" id="modal-add-order">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Order Baru</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="modal-add-order-close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"><i class="fas fa-times"></i></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body mt-n5">
                <form action="" id="form-order">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="customer_id" class="required form-label">Konsumen</label>
                                <select name="customer_id" id="customer_id" class="form-select form-select-solid">
                                    <option value="" selected disabled> - Pilih Konsumen</option>
                                    
                                </select>
                                <small class="text-danger"><strong id="customer_id_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="required form-label">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control form-control-solid" placeholder="Tanggal"/>
                                <small class="text-danger"><strong id="tanggal_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="sumber" class="required form-label">Sumber</label>
                                <select id="sumber_id" name="sumber_id" class="form-select form-control form-control-solid" aria-label="Select example">
                                    <option selected disabled>- Pilih Sumber</option>
                                    <?php foreach($sumber->result() as $s){ ?>
                                        <option value="<?= $s->id ?>" data-kode="<?= $s->kode ?>"> <?= $s->sumber ?></option>
                                    <?php } ?>
                                </select>
                                <small class="text-danger"><strong id="sumber_id_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="kontrak" class="required form-label">Waktu Kontrak</label>
                                <input type="date" id="kontrak" name="kontrak" class="form-control form-control-solid" placeholder="Waktu Kontrak"/>
                                <small class="text-danger"><strong id="kontrak_error"></strong></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="order_code" class="required form-label">Kode Order</label>
                                <input type="text" id="order_code" name="order_code" class="form-control form-control-solid" placeholder="Kode Order"/>
                                <small class="text-danger"><strong id="order_code_error"></strong></small>
                            </div>

                            <div class="mb-3">
                                <label for="pic_id" class="required form-label">PIC</label>
                                <select id="pic_id" name="pic_id" class="form-select form-control form-control-solid" aria-label="Select example">
                                    <option selected disabled>- Pilih PIC</option>
                                    <?php foreach($pic->result() as $p){ ?>
                                        <option value="<?= $p->id ?>"> <?= $p->nama ?></option>
                                    <?php } ?>
                                </select>
                                <small class="text-danger"><strong id="pic_id_error"></strong></small>
                            </div>

                            <div class="mb-3">
                                <label for="bulan" class="form-label">Bulan</label>
                                <select id="bulan" name="bulan" class="form-select form-control form-control-solid" aria-label="Select example" disabled>
                                    <option selected disabled>- Pilih Bulan</option>
                                    <?php foreach(range(1, 12) as $b){ ?>
                                        <option value="<?= $b ?>" <?= ((int)date('m') == $b) ? 'selected' : '' ?>> <?= bulan($b) ?></option>
                                    <?php } ?>
                                </select>
                                <small class="text-danger"><strong id="bulan_error"></strong></small>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="deal_status_id" class="required form-label">Status Deal</label>
                                        <select id="deal_status_id" name="deal_status_id" class="form-select form-control form-control-solid" aria-label="Select example" disabled>
                                            <option selected disabled>- Pilih Status Deal</option>
                                            <?php foreach($deal_status->result() as $ds): ?>
                                                <option value="<?= $ds->id ?>"> <?= $ds->status ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><strong id="deal_status_id_error"></strong></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="order_status_id" class="required form-label">Status Order</label>
                                        <div class="order-status">
                                            <select id="order_status_id" name="order_status_id" class="form-select form-control form-control-solid" aria-label="Select example">
                                                <option selected disabled>- Pilih Status Order</option>
                                            </select>
                                        </div>
                                        <small class="text-danger"><strong id="order_status_id_error"></strong></small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" id="submit-form-order" class="btn btn-primary my-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="modal-edit-order">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Order Baru</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="modal-add-order-close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"><i class="fas fa-times"></i></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body mt-n5">
                <form action="" id="form-edit-order">
                    <input type="hidden" name="id" id="edit-order-id">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="customer_id" class="required form-label">Konsumen</label>
                                <select name="customer_id" id="edit-order-customer_id" class="form-select form-select-solid">
                                    <option value="" selected disabled> - Pilih Konsumen</option>
                                    
                                </select>
                                <small class="text-danger"><strong id="edit-order-customer_id_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="required form-label">Tanggal</label>
                                <input type="date" id="edit-order-tanggal" name="tanggal" class="form-control form-control-solid" placeholder="Tanggal"/>
                                <small class="text-danger"><strong id="edit-order-tanggal_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="sumber" class="required form-label">Sumber</label>
                                <select id="edit-order-sumber_id" name="sumber_id" class="form-select form-control form-control-solid" aria-label="Select example" data-allow-clear="true">
                                    <option selected disabled>- Pilih Sumber</option>
                                    <?php foreach($sumber->result() as $s){ ?>
                                        <option value="<?= $s->id ?>" data-kode="<?= $s->kode ?>"> <?= $s->sumber ?></option>
                                    <?php } ?>
                                </select>
                                <small class="text-danger"><strong id="edit-order-sumber_id_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="kontrak" class="required form-label">Waktu Kontrak</label>
                                <input type="date" id="edit-order-kontrak" name="kontrak" class="form-control form-control-solid" placeholder="Waktu Kontrak"/>
                                <small class="text-danger"><strong id="edit-order-kontrak_error"></strong></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="order_code" class="required form-label">Kode Order</label>
                                <input type="text" id="edit-order-order_code" name="order_code" class="form-control form-control-solid" placeholder="Kode Order"/>
                                <small class="text-danger"><strong id="edit-order-order_code_error"></strong></small>
                            </div>

                            <div class="mb-3">
                                <label for="pic_id" class="required form-label">PIC</label>
                                <select id="edit-order-pic_id" name="pic_id" class="form-select form-control form-control-solid" aria-label="Select example">
                                    <option selected disabled>- Pilih PIC</option>
                                    <?php foreach($pic->result() as $p){ ?>
                                        <option value="<?= $p->id ?>"> <?= $p->nama ?></option>
                                    <?php } ?>
                                </select>
                                <small class="text-danger"><strong id="edit-order-pic_id_error"></strong></small>
                            </div>

                            <div class="mb-3">
                                <label for="bulan" class="form-label">Bulan</label>
                                <select id="edit-order-bulan" name="bulan" class="form-select form-control form-control-solid" aria-label="Select example" disabled>
                                    <option selected disabled>- Pilih Bulan</option>
                                    <?php foreach(range(1, 12) as $b){ ?>
                                        <option value="<?= $b ?>" <?= ((int)date('m') == $b) ? 'selected' : '' ?>> <?= bulan($b) ?></option>
                                    <?php } ?>
                                </select>
                                <small class="text-danger"><strong id="edit-order-bulan_error"></strong></small>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="deal_status_id" class="required form-label">Status Deal</label>
                                        <select id="edit-order-deal_status_id" name="deal_status_id" class="form-select form-control form-control-solid" aria-label="Select example" disabled>
                                            <option selected disabled>- Pilih Status Deal</option>
                                            <?php foreach($deal_status->result() as $ds): ?>
                                                <option value="<?= $ds->id ?>"> <?= $ds->status ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><strong id="edit-order-deal_status_id_error"></strong></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="order_status_id" class="required form-label">Status Order</label>
                                        <div class="order-status">
                                            <select id="edit-order-order_status_id" name="order_status_id" class="form-select form-control form-control-solid" aria-label="Select example">
                                                <option selected disabled>- Pilih Status Order</option>
                                            </select>
                                        </div>
                                        <small class="text-danger"><strong id="edit-order-order_status_id_error"></strong></small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" id="submit-form-order" class="btn btn-primary my-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="modal-add-customer">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Konsumen Baru</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close" id="modal-add-customer-only-close-btn">
                    <span class="svg-icon svg-icon-2x"><i class="fas fa-times"></i></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body mt-n5">
                <form action="" id="form-add-customer">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="nama" class="required form-label">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control form-control-solid" placeholder="Nama Konsumen"/>
                                <small class="text-danger"><strong id="nama_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="nohp" class="required form-label">No HP</label>
                                <input type="number" id="nohp" name="nohp" class="form-control form-control-solid" placeholder="Nomor Handphone"/>
                                <small class="text-danger"><strong id="nohp_error"></strong></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instansi_id" class="required form-label">Tipe Instansi</label>
                                <select id="instansi_id" name="instansi_id" class="form-select form-control form-control-solid" aria-label="Select example">
                                    <option selected disabled>- Pilih Tipe Instansi</option>
                                    <?php foreach($instansi->result() as $i){ ?>
                                        <option value="<?= $i->id ?>"> <?= $i->instansi ?></option>
                                    <?php } ?>
                                </select>
                                <small class="text-danger"><strong id="instansi_id_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="instansi" class="required form-label">Instansi</label>
                                <input type="text" id="instansi" name="instansi" class="form-control form-control-solid" placeholder="Nama Instansi"/>
                                <small class="text-danger"><strong id="instansi_error"></strong></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" id="submit-form-add-customer" class="btn btn-primary my-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="modal-import-customer">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Konsumen Baru</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close" id="modal-add-customer-only-close-btn">
                    <span class="svg-icon svg-icon-2x"><i class="fas fa-times"></i></span>
                </div>
                <!--end::Close-->
            </div>

            <form action="<?= site_url('customer/import') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body mt-n5">
                <a href="<?= site_url('customer/downloadFormat') ?>" class="btn btn-sm my-primary w-100 mb-5 text-white" download><i class="fas fa-download me-3 text-white"></i> Format Import Konsumen</a>
                <div class="mb-3">
                    <label for="nama" class="required form-label">Pilih File</label>
                    <input type="file" id="file" name="fileImport" class="form-control form-control-solid" placeholder="Nama Konsumen"/>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="submit-form-import-customer" class="btn btn-primary my-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="modal-edit-customer-only">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Konsumen</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close" id="modal-edit-customer-only-close-btn">
                    <span class="svg-icon svg-icon-2x"><i class="fas fa-times"></i></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body mt-n5">
                <form action="" id="form-edit-konsumen-only">
                    <input type="hidden" name="id" id="edit-cust_id">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="nama" class="required form-label">Nama</label>
                                <input type="text" id="edit-konsumen-nama" name="nama" class="form-control form-control-solid" placeholder="Nama Konsumen"/>
                                <small class="text-danger"><strong id="edit-konsumen-nama_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="nohp" class="required form-label">No HP</label>
                                <input type="number" id="edit-konsumen-nohp" name="nohp" class="form-control form-control-solid" placeholder="Nomor Handphone"/>
                                <small class="text-danger"><strong id="edit-konsumen-nohp_error"></strong></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="instansi_id" class="required form-label">Tipe Instansi</label>
                                <select id="edit-konsumen-instansi_id" name="instansi_id" class="form-select form-control form-control-solid" aria-label="Select example">
                                    <option selected disabled>- Pilih Tipe Instansi</option>
                                    <?php foreach($instansi->result() as $i){ ?>
                                        <option value="<?= $i->id ?>"> <?= $i->instansi ?></option>
                                    <?php } ?>
                                </select>
                                <small class="text-danger"><strong id="edit-konsumen-instansi_id_error"></strong></small>
                            </div>
                            <div class="mb-3">
                                <label for="instansi" class="required form-label">Instansi</label>
                                <input type="text" id="edit-konsumen-instansi" name="instansi" class="form-control form-control-solid" placeholder="Nama Instansi"/>
                                <small class="text-danger"><strong id="edit-konsumen-instansi_error"></strong></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" id="submit-form-edit-konsumen-only" class="btn btn-primary my-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>