<!--begin::Aside menu-->
<div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
    <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-bold fs-6 my-auto" data-kt-menu="true">
        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item here show py-3">
            <span class="menu-link" title="Dashboards" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon <?= ($this->uri->segment(1) == 'dashboard') ? 'my-primary' : 'my-white' ?> side-menu" data-url="<?= site_url('dashboard') ?>">
                    <!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs029.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="<?= ($this->uri->segment(1) == 'dashboard') ? 'white' : 'black' ?>"/>
                            <path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="<?= ($this->uri->segment(1) == 'dashboard') ? 'white' : 'black' ?>"/>
                        </svg>
                    <!--end::Svg Icon-->
                </span>
            </span>
        </div>

        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
            <span class="menu-link" title="CRM" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon <?= ($this->uri->segment(1) == 'crm' || $this->uri->segment(1) == 'customer' || $this->uri->segment(1) == 'orders') ? 'my-primary' : 'my-white' ?> side-menu" data-url="<?= site_url('crm') ?>">
                    <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com014.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="<?= ($this->uri->segment(1) == 'crm' || $this->uri->segment(1) == 'customer' || $this->uri->segment(1) == 'orders') ? 'white' : 'black' ?>"/>
                        <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="<?= ($this->uri->segment(1) == 'crm' || $this->uri->segment(1) == 'customer' || $this->uri->segment(1) == 'orders') ? 'white' : 'black' ?>"/>
                        <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="<?= ($this->uri->segment(1) == 'crm' || $this->uri->segment(1) == 'customer' || $this->uri->segment(1) == 'orders') ? 'white' : 'black' ?>"/>
                        <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="<?= ($this->uri->segment(1) == 'crm' || $this->uri->segment(1) == 'customer' || $this->uri->segment(1) == 'orders') ? 'white' : 'black' ?>"/>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </span>
        </div>

        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
            <span class="menu-link" title="Produksi" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon <?= $this->uri->segment(1) == 'produksi' ? 'my-primary' : 'my-white' ?> side-menu" data-url="<?= site_url('produksi') ?>">
                    <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com014.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="<?= ($this->uri->segment(1) == 'produksi') ? 'white' : 'black' ?>" />
                        <path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="<?= ($this->uri->segment(1) == 'produksi') ? 'white' : 'black' ?>" />
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </span>
        </div>
        
        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
            <span class="menu-link" title="Resources" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
            </span>
            <div class="menu-sub menu-sub-dropdown w-225px w-lg-275px px-1 py-4">
                <div class="menu-item">
                    <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Resources</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="../../demo9/dist/documentation/base/utilities.html" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/layouts/lay009.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z" fill="black" />
                                    <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Components</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="../../demo9/dist/documentation/getting-started.html" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Documentation</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo9/layout-builder.html" title="Build your layout, preview and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Layout Builder</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="../../demo9/dist/documentation/getting-started/changelog.html">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
                                    <rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
                                    <rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
                                    <rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Changelog v8.0.34</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Aside menu-->