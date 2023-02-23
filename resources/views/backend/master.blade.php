
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Responsive layout with advanced sidebar menu built with SCSS and vanilla Javascript" />
        <title>Accounts | Deposit</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/logo/favicon.ico" type="image/x-icon" />

        <!-- Remixicon Icons -->
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/icons/remixicon/remixicon.css" />
        <!-- Fontawsoem Icon -->
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/icons/fontawesome-free-6.3.0/css/all.min.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/bootstrap_5.3/css/bootstrap.min.css" />
        <!-- Vanilla Datepicker CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css" />
        <!-- Sidebar CSS -->
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/sidebar/main.css" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css" />
    </head>

    <body>
        @include('sweetalert::alert')
        <div class="layout has-sidebar fixed-sidebar fixed-header">


            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar break-point-lg">
                <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
                <div class="image-wrapper">
                    <img class="img-fluid" src="assets/images/sidebar-bg.jpg" alt="sidebar background" />
                </div>
                <div class="sidebar-layout">
                    @include('backend.layouts.sidebar')
                </div>
            </aside>

            <!-- sidebar dropdown not work if overlay deleted -->
            <div id="overlay" class="overlay"></div>
            <!-- sidebar dropdown not work if overlay deleted -->

            <!-- Main Layout -->
            <div class="layout pageLayout">
                <!-- Header -->
                <header class="">
                    <!-- Sidebar Toggler Button -->
                    <a id="btn-toggle" href="#" class="sidebar-toggler break-point-lg">
                        <i class="ri-menu-line ri-xl"></i>
                    </a>
                </header>

                <!-- Main Content -->
                <main class="content p-3 p-md-4">
                    <!-- Page content -->
                    @yield('backend')
                </main>

                <!-- Footer -->
                <footer class="footer mb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            © Accounts
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </div>

                        <div>Powered by <a href="https://desktopit.net" target="_blank">Desktop IT</a></div>
                    </div>
                </footer>

                <div class="overlay"></div>
            </div>
        </div>
    </body>

    <!-- Bootstrap JS -->
    <script src="{{ asset('backend') }}/assets/vendors/bootstrap_5.3/js/bootstrap.bundle.min.js"></script>
    <!-- Sidebar JS -->
    <script src="{{ asset('backend') }}/assets/css/sidebar/main.js"></script>
    <!-- Vanilla Datepicker JS -->
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('backend') }}/assets/js/custom.js"></script>
</html>
