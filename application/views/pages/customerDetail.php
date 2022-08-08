<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Navbar-->
        <div class="card mb-6">
            <div class="card-body pt-9">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin::Info-->
                    <div class="row flex-grow-1">
                        <!--begin::Title-->
                        <div class="col-lg-7 justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="text-gray-900 fs-1 fw-bolder me-1"><?= $customer->nama ?></h1>
                                    <a href="#">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-primary ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"></path>
                                                <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                         <!--begin::Title-->
                         <div class="col-lg-5 justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th class="fs-6 text-gray-900 fw-bolder">No Hp</th>
                                            <th class="fs-6 text-gray-900 fw-bolder">:&nbsp;&nbsp;<?= $customer->nohp ?></th>
                                        </tr>
                                        <tr>
                                            <th class="fs-6 text-gray-900 fw-bolder">Instansi / Tipe Instansi</th>
                                            <th class="fs-6 text-gray-900 fw-bolder">:&nbsp;&nbsp;<?= $customer->instansi." / (".$customer->tipe_instansi ?>)</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <hr class="my-5">

                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <h1 class="fw-bolder fs-1 text-gray-900 mb-3 mt-3">&nbsp;&nbsp;Riwayat Transaksi</h1>
                        <div class="card border-secondary mt-8" style="background-color: #FDFBFB">
                            <div class="card-body">
                                <h1 class="fw-bolder fs-4 text-gray-900 mb-5">Riwayat Transaksi</h1>
                                <h1 class="fw-bolder fs-6 text-gray-900">Cara Merubah Harga</h1>
                                <h1 class="fs-6 text-gray-500 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, iure? Rem vitae quidem, molestias exercitationem consectetur maxime, nostrum voluptas aperiam molestiae repudiandae blanditiis doloribus sit incidunt inventore provident? Laudantium, odit!</h1>
                                <h1 class="fw-bolder fs-6 text-gray-900">Cara Merubah Harga</h1>
                                <h1 class="fs-6 text-gray-500 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, iure? Rem vitae quidem, molestias exercitationem consectetur maxime, nostrum voluptas aperiam molestiae repudiandae blanditiis doloribus sit incidunt inventore provident? Laudantium, odit!</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="table-responsive mt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="fw-bolder fs-6 text-gray-900 mb-2 text-center" width="5px">No</th>
                                        <th class="fw-bolder fs-6 text-gray-900 mb-2">Tanggal Order</th>
                                        <th class="fw-bolder fs-6 text-gray-900 mb-2">Kode Order</th>
                                        <th class="fw-bolder fs-6 text-gray-900 mb-2">Jatuh Tempo</th>
                                        <th class="fw-bolder fs-6 text-gray-900 mb-2">Status</th>
                                        <th class="fw-bolder fs-6 text-gray-900 mb-2" width="5px">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no =1;
                                    foreach($orders as $row){ ?>
                                    <tr>    
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= longdate_indo(date('Y-m-d', strtotime($row->tanggal))) ?></td>
                                        <td class="fw-bolder text-hover-primary "><a href="#"><?= $row->kode_order ?></a></td>
                                        <td></td>
                                        <td><?= $row->keterangan ?></td>
                                        <td><?= rupiah($row->price) ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Navbar-->
    </div>
</div>