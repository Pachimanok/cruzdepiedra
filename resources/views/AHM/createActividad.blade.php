@include('AA.header')

<body class="g-sidenav-show  bg-gray-100">
    @include('AHM.aside');
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Nueva</a>
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Actividad</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 row" id="navbar">
                    <div class="container-fluid py-1 px-3">
                        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 row" id="navbar">
                            <ul class="navbar-nav justify-content-end">
                                <li class="nav-item d-flex align-items-center dropdown">
                                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-user me-sm-1"></i>
                                        <span class="d-sm-inline d-none">{{ $user->name }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @include('AA.alert')
        <!-- End Navbar -->
        {{-- ||||||||||||||||||||||||||||------------- BARRA DE ESTADISTICAS -------------|||||||||||||||||||||||||||| --}}
        <div class="container-fluid py-4">

            {{-- ||||||||||||||||||||||||||||------------- TABLA CONFIRMADOS -------------|||||||||||||||||||||||||||| --}}
            <div class="row my-4">
                <div class="col-lg-12 col-md-8 mb-md-0 mb-7">
                    <div class="card">
                        <form action="/cruzdepiedra/public/actividades" method="POST">
                            @csrf
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-7">
                                        <h6>Ingresar datos de la Actividad.</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="col-sm-11 mx-auto">
                                    <div class="form-group">
                                        <label class="form-control-label" for="basic-url">Titulo de la
                                            Actividad:</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon3"></span>
                                            <input type="text" name="titulo" class="form-control" id="basic-url"
                                                aria-describedby="basic-addon3" placeholder="Convivencia de Verano Jovenes Profesionales"required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="basic-url">Descripcion de la
                                            actividad:</label>
                                        <div class="input-group">
                                            <textarea class="form-control" placeholder="Predica el Padre Tino (aprovecha para encomendarle la actividad)" name="descripcion" aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="example-date-input" class="form-control-label">Fecha
                                                        Inicio</label>
                                                    <input class="form-control" type="date" name="FechaInicio"
                                                        value="2022-01-01" id="example-date-input" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="example-time-input" class="form-control-label">Hora
                                                        Inicio</label>
                                                    <input class="form-control" name="horaInicio" type="time"
                                                        value="20:00:00" id="example-time-input" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="example-date-input" class="form-control-label">Fecha
                                                        Fin</label>
                                                    <input class="form-control" type="date" name="FechaFin"
                                                        value="2022-12-31" id="example-date-input" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="example-time-input" class="form-control-label">Hora
                                                        Fin</label>
                                                    <input class="form-control" type="time" name="horaFin"
                                                        value="15:00:00" id="example-time-input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Tipo de
                                                            Actividad:</label>
                                                        <select class="form-control" name="tipo[]"
                                                            id="exampleFormControlSelect1" required>
                                                            <option value="">Selecccionar Tipo</option>
                                                            <option value="retiro">Retiro</option>
                                                            <option value="convivencia">Convivencia</option>
                                                            <option value="otros">Otros</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Precio de
                                                            Actividad:</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">$</span>
                                                            <input type="text" name="precio" placeholder="18000"class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h6>Asignar encargados de Actividades (Opcional). </h6>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Director:</label>
                                                        <select class="form-control" name="director[]"
                                                            id="exampleFormControlSelect1">
                                                            <option value="">Selecccionar director</option>
                                                            @foreach ($directores as $director)
                                                                <option value="{{ $director->id }}">
                                                                    {{ $director->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Sub-Director:</label>
                                                        <select class="form-control" name="subDirector[]"
                                                            id="exampleFormControlSelect1">
                                                            <option value="">Selecccionar Sub-director</option>
                                                            @foreach ($directores as $director)
                                                                <option value="{{ $director->id }}">
                                                                    {{ $director->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-sm-5 mx-auto">
                                                <button class="btn btn-info w-100" type="submit">crear
                                                    actividad</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                    href="https://www.creative-tim.com/product/soft-ui-dashboard">Free
                    Download</a>
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
    @include('AA.footer')
