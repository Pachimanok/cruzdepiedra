@include('AHM.header')

<body class="g-sidenav-show  bg-gray-100">
    @include('AHM.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">{{ $user->name }}</a></li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Gestion de Usuarios</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                    <ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @include('AHM.barraEstadisticas')
            <div class="row my-4">
                <div class="col-lg-12 col-md-10 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Usuarios Activos</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">30 </span> usuarios activos.
                                    </p>
                                </div>
                                <div class="col-lg-12 col-10 my-auto text-end">

                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            @include('AHM.alert')
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                id</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Usuario</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                email</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Rol</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Actualizado</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($usuarios as $usuario)
                                            <tr>
                                                <td>
                                                    {{ $usuario->id }}
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0"> {{ $usuario->name }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $usuario->email }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm text-center">
                                                                @if ($usuario->rol == 'A')
                                                                    Administrador
                                                                @elseif($usuario->rol == 'AA')
                                                                    Admin Actividad
                                                                @else
                                                                    user
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $usuario->updated_at }}</p>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <button data-bs-toggle="modal" data-bs-target="#modal-form"
                                                            class="btn p-2 mb-0"
                                                            style="margin-left: 0.5em; box-shadow: none !important; padding: 0.1vw 1vh!important; font-size: unset;">
                                                            <span class="btn-inner--icon"><i
                                                                    class="fas fa-highlighter"></i></span>
                                                        </button>
                                                        <form action="/cruzdepiedra/public/usuarios/{{ $usuario->id }}" method="POST">
                                                            @csrf @method('delete')<button type="submit"
                                                                class="btn p-2 mb-0"
                                                                style="margin-left: 0.5em; box-shadow: none !important; padding: 0.1vw 1vh!important; font-size: unset;"><span
                                                                    class="btn-inner--icon"><i
                                                                        class="fas fa-trash"></i></span></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                                aria-labelledby="modal-form" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-sm"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card card-plain">
                                                                <div class="card-header pb-0 text-left">
                                                                    <h3
                                                                        class="font-weight-bolder text-info text-gradient">
                                                                        Editar Usuario</h3>
                                                                    <p class="mb-0">{{ $usuario->name }}</p>
                                                                </div>
                                                                <div class="card-body">
                                                                    <form action="/cruzdepiedra/public/usuarios/{{ $usuario->id }}"
                                                                        method="POST" role="form text-left">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <label>Rol</label>
                                                                        <div class="input-group mb-3">
                                                                            <select name="rol[]" id=""
                                                                                class="form-control">
                                                                                @if ($usuario->rol == 'A')
                                                                                    <option value="A">Administrador
                                                                                    </option>
                                                                                    <option value="AA">Admin Actividad
                                                                                    </option>
                                                                                @elseif($usuario->rol == 'AA')
                                                                                    <option value="AA">Admin Actividad
                                                                                    </option>
                                                                                    <option value="A">Administrador
                                                                                    </option>
                                                                                @else
                                                                                    <option value="user">Asignar Rol
                                                                                    </option>
                                                                                    <option value="AA">Admin Actividad
                                                                                    </option>
                                                                                    <option value="A">Administrador
                                                                                    </option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <label>Estado</label>
                                                                        <div class="input-group mb-3">
                                                                            <select name="activo[]" id=""
                                                                                class="form-control">
                                                                                @if ($usuario->activo == 'si')
                                                                                    <option value="si">Activo
                                                                                    </option>
                                                                                    <option value="no">No Activo
                                                                                    </option>
                                                                                @else
                                                                                    <option value="no">No Activo
                                                                                    </option>
                                                                                    <option value="si">Activo
                                                                                    </option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="submit"
                                                                                class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Modificar</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                            @endforeach


                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-dark w-100"
                    href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('AHM.footer')
