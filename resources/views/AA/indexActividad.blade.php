@include('AA.header')

<body class="g-sidenav-show  bg-gray-100">
    @include('AA.aside');
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">{{ $actividad->FechaInicio }}</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                            {{ $actividad->FechaFin }}</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">{{ $actividad->titulo }}</h6>
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
{{-- 
  
  ||||||||||||||||||||||||||||------------- BARRA DE ESTADISTICAS -------------||||||||||||||||||||||||||||

--}}
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Participantes Totales
                                        </p>
                                        <h5 class="font-weight-bolder mb-0">
                                            15
                                            <span class="text-success text-sm font-weight-bolder">+2</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Confirmados</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            10
                                            <span class="text-success text-sm font-weight-bolder">+3</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Sin Confirmar</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            5
                                            <span class="text-danger text-sm font-weight-bolder">-3</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Lista de Espera</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            3
                                            <span class="text-success text-sm font-weight-bolder">+3</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-- 
  
  ||||||||||||||||||||||||||||------------- TABLA CONFIRMADOS -------------||||||||||||||||||||||||||||

--}}
            <div class="row my-4">
                <div class="col-lg-12 col-md-8 mb-md-0 mb-7">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Participantes Confirmados</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">X Agragados</span> el ultimo dia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive pb-4">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nombre y Apellido</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Telefono</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Email</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Pago</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participantes as $participante)
                                            @if ($participante->estado_participacion == 'confirmado')
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div
                                                                class="d-flex flex-column justify-content-center text-center">
                                                                <h6 class="mb-0 text-sm text-center">
                                                                    {{ $participante->id }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a data-bs-toggle="modal"
                                                                    data-bs-target="#modal-notification-{{ $participante->id }}"
                                                                    class="btn btn-link pe-3 ps-0 mb-0">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->nombre }}
                                                                        {{ $participante->apellido }}</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 text-lowercase"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Click para enviar WhatsApp" target="_blank"
                                                                    href="https://api.whatsapp.com/send?phone=549{{ $participante->email }}&text=Hola, Soy el organizador del {{ $actividad->titulo }}">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->phone }}</h6>
                                                                </a>
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 text-lowercase"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Click para enviar Mail"
                                                                    href="mailto:{{ $participante->email }}">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->email }}</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto">
                                                                    <h6 class="mb-0 text-sm text-center">$
                                                                        {{ $participante->total_pago }} <span
                                                                            class="badge bg-gradient-success">{{ $participante->pago }}</span>
                                                                    </h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row text-center">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <button type="button"
                                                                    class="dropdown-item text-secondary font-weight-bold text-xs"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-form-{{ $participante->id }}">Editar</button>
                                                                <form action="/inscripcion/{{ $participante->id }}"
                                                                    method="POST">@csrf @method('delete')<button
                                                                        type="submit"
                                                                        class="dropdown-item text-secondary font-weight-bold text-xs"
                                                                        h>Eliminar</button></form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- Modal para Ver Participante --}}
                                                    <div class="modal fade"
                                                        id="modal-notification-{{ $participante->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="modal-notification"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-danger modal-dialog-centered modal-"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header mx-auto">
                                                                    <h6 class="modal-title text-center"
                                                                        id="modal-title-notification">Ficha
                                                                        {{ $participante->id }}:
                                                                        {{ $participante->nombre }}
                                                                        {{ $participante->apellido }} <br>
                                                                        <small style="font-size: x-small">Creado:
                                                                            {{ $participante->created_at }}</small>
                                                                    </h6>
                                                                </div>
                                                                <div class="modal-body pt-1">
                                                                    <div class="text-center">
                                                                        <a class="btn btn-link mb-0 pb-0"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Click para enviar WhatsApp" target="_blank"
                                                                            href="https://api.whatsapp.com/send?phone=549{{ $participante->email }}&text=Hola, Soy el organizador del {{ $actividad->titulo }}">
                                                                            <h6 class="mb-0 text-sm">Celular:
                                                                                {{ $participante->phone }}</h6>
                                                                        </a>
                                                                        <a class="btn btn-link mb-0 pb-0 text-lowercase"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Click para enviar Mail"
                                                                            href="mailto:{{ $participante->email }}">
                                                                            <h6 class="mb-0 text-sm">E-mail:
                                                                                {{ $participante->email }}</h6>
                                                                        </a>
                                                                        <hr>
                                                                        <h6 class="mb-0 text-sm">Llega: </h6>
                                                                        <p>{{ $participante->llega }}</p>
                                                                        <h6 class="mb-0 text-sm">Dieta: </h6>
                                                                        <p>{{ $participante->dieta }}</p>
                                                                        <h6 class="mb-0 text-sm">Observaciones: </h6>
                                                                        <p>{{ $participante->observaciones }}</p>
                                                                        <hr>
                                                                        <a class="btn btn-link mb-0 pb-0">
                                                                            <h6 class="mb-0 text-sm text-center">$
                                                                                {{ $participante->total_pago }} <span
                                                                                    class="badge bg-gradient-success">{{ $participante->pago }}</span>
                                                                            </h6>
                                                                        </a>
                                                                        <h6 class="mb-0 text-sm text-secondary">
                                                                            <small> Facturar a:
                                                                                {{ $participante->facturacion }}
                                                                            </small>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-primary mx-auto"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close">Cerrar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- FIN MODAL VER --}}
                                                    {{-- Modal para Editar Participante --}}
                                                    <div class="modal fade"
                                                        id="modal-form-{{ $participante->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <div class="card card-plain">
                                                                        <div class="card-header pb-0 text-left">
                                                                            <h3
                                                                                class="font-weight-bolder text-primary text-gradient">
                                                                                Editar Ficha
                                                                                {{ $participante->id }}:
                                                                                {{ $participante->nombre }}
                                                                                {{ $participante->apellido }}</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form
                                                                                action="/inscripcion/{{ $participante->id }}"
                                                                                method="POST" role="form text-left">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Nombre</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->nombre }}"
                                                                                                name='nombre'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Apellido</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->apellido }}"
                                                                                                name='apellido'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Celular</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="phone"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->phone }}"
                                                                                                name='phone'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>e-mail</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Apellido"
                                                                                                value="{{ $participante->email }}"
                                                                                                name='email'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Llega:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="phone"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->llega }}"
                                                                                                name='llega'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Dieta:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->dieta }}"
                                                                                                name='dieta'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <label>Observaciones:</label>
                                                                                <div class="input-group mb-3">
                                                                                    <textarea type="text" class="form-control" placeholder="Comentarios..."
                                                                                        name='obsercaciones'>{{ $participante->observaciones }}</textarea>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Pago:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <select
                                                                                                class="form-control"
                                                                                                name='estado_pago[]'>
                                                                                                @if ($participante->estado_pago == 'pagado')
                                                                                                    <option
                                                                                                        value="pagado">
                                                                                                        pagado</option>
                                                                                                    <option
                                                                                                        value="no pagado">
                                                                                                        no pagado
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="no pagado">
                                                                                                        no pagado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="pagado">
                                                                                                        pagado</option>
                                                                                                @endif
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Estado de
                                                                                            Participacion</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <select
                                                                                                class="form-control"
                                                                                                name='estado_participacion[]'>
                                                                                                @if ($participante->estado_participacion == 'confirmado')
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                @elseif($participante->estado_participacion == 'inscripto')
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                @endif
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    <input type="hidden"
                                                                                        name="id_actividad"
                                                                                        value="{{ $actividad->id }}">
                                                                                    <button type="submit"
                                                                                        class="btn  bg-gradient-primary btn-lg w-100 mt-4 mb-0">modificar</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- FIN MODAL EDITAR --}}
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-- 
  
  ||||||||||||||||||||||||||||------------- TABLA EN INSCRIPTOS / NO CONFIRMADOS -------------||||||||||||||||||||||||||||

--}}
            <div class="row my-4">
                <div class="col-lg-12 col-md-8 mb-md-0 mb-7">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Participantes No Confirmados</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">X Agragados</span> el ultimo dia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive pb-4">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nombre y Apellido</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Telefono</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Email</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Pago</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participantes as $participante)
                                            @if ($participante->estado_participacion == 'inscripto')
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div
                                                                class="d-flex flex-column justify-content-center text-center">
                                                                <h6 class="mb-0 text-sm text-center">
                                                                    {{ $participante->id }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a data-bs-toggle="modal"
                                                                    data-bs-target="#modal-notification-{{ $participante->id }}"
                                                                    class="btn btn-link pe-3 ps-0 mb-0">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->nombre }}
                                                                        {{ $participante->apellido }}</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 text-lowercase"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Click para enviar WhatsApp" target="_blank"
                                                                    href="https://api.whatsapp.com/send?phone=549{{ $participante->email }}&text=Hola, Soy el organizador del {{ $actividad->titulo }}">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->phone }}</h6>
                                                                </a>
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 text-lowercase"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Click para enviar Mail"
                                                                    href="mailto:{{ $participante->email }}">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->email }}</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto">
                                                                    <h6 class="mb-0 text-sm text-center">$
                                                                        {{ $participante->total_pago }} <span
                                                                            class="badge bg-gradient-success">{{ $participante->pago }}</span>
                                                                    </h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row text-center">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <button type="button"
                                                                    class="dropdown-item text-secondary font-weight-bold text-xs"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-form-{{ $participante->id }}">Editar</button>
                                                                <form action="/inscripcion/{{ $participante->id }}"
                                                                    method="POST">@csrf @method('delete')<button
                                                                        type="submit"
                                                                        class="dropdown-item text-secondary font-weight-bold text-xs"
                                                                        h>Eliminar</button></form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- Modal para Ver Participante --}}
                                                    <div class="modal fade"
                                                        id="modal-notification-{{ $participante->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="modal-notification"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-danger modal-dialog-centered modal-"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header mx-auto">
                                                                    <h6 class="modal-title text-center"
                                                                        id="modal-title-notification">Ficha
                                                                        {{ $participante->id }}:
                                                                        {{ $participante->nombre }}
                                                                        {{ $participante->apellido }} <br>
                                                                        <small style="font-size: x-small">Creado:
                                                                            {{ $participante->created_at }}</small>
                                                                    </h6>
                                                                </div>
                                                                <div class="modal-body pt-1">
                                                                    <div class="text-center">
                                                                        <a class="btn btn-link mb-0 pb-0"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Click para enviar WhatsApp" target="_blank"
                                                                            href="https://api.whatsapp.com/send?phone=549{{ $participante->email }}&text=Hola, Soy el organizador del {{ $actividad->titulo }}">
                                                                            <h6 class="mb-0 text-sm">Celular:
                                                                                {{ $participante->phone }}</h6>
                                                                        </a>
                                                                        <a class="btn btn-link mb-0 pb-0 text-lowercase"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Click para enviar Mail"
                                                                            href="mailto:{{ $participante->email }}">
                                                                            <h6 class="mb-0 text-sm">E-mail:
                                                                                {{ $participante->email }}</h6>
                                                                        </a>
                                                                        <hr>
                                                                        <h6 class="mb-0 text-sm">Llega: </h6>
                                                                        <p>{{ $participante->llega }}</p>
                                                                        <h6 class="mb-0 text-sm">Dieta: </h6>
                                                                        <p>{{ $participante->dieta }}</p>
                                                                        <h6 class="mb-0 text-sm">Observaciones: </h6>
                                                                        <p>{{ $participante->observaciones }}</p>
                                                                        <hr>
                                                                        <a class="btn btn-link mb-0 pb-0">
                                                                            <h6 class="mb-0 text-sm text-center">$
                                                                                {{ $participante->total_pago }} <span
                                                                                    class="badge bg-gradient-success">{{ $participante->pago }}</span>
                                                                            </h6>
                                                                        </a>
                                                                        <h6 class="mb-0 text-sm text-secondary">
                                                                            <small> Facturar a:
                                                                                {{ $participante->facturacion }}
                                                                            </small>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-primary mx-auto"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close">Cerrar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- FIN MODAL VER --}}
                                                    {{-- Modal para Editar Participante --}}
                                                    <div class="modal fade"
                                                        id="modal-form-{{ $participante->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <div class="card card-plain">
                                                                        <div class="card-header pb-0 text-left">
                                                                            <h3
                                                                                class="font-weight-bolder text-primary text-gradient">
                                                                                Editar Ficha
                                                                                {{ $participante->id }}:
                                                                                {{ $participante->nombre }}
                                                                                {{ $participante->apellido }}</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form
                                                                                action="/inscripcion/{{ $participante->id }}"
                                                                                method="POST" role="form text-left">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Nombre</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->nombre }}"
                                                                                                name='nombre'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Apellido</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->apellido }}"
                                                                                                name='apellido'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Celular</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="phone"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->phone }}"
                                                                                                name='phone'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>e-mail</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Apellido"
                                                                                                value="{{ $participante->email }}"
                                                                                                name='email'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Llega:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="phone"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->llega }}"
                                                                                                name='llega'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Dieta:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->dieta }}"
                                                                                                name='dieta'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <label>Observaciones:</label>
                                                                                <div class="input-group mb-3">
                                                                                    <textarea type="text" class="form-control" placeholder="Comentarios..."
                                                                                        name='obsercaciones'>{{ $participante->observaciones }}</textarea>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Pago:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <select
                                                                                                class="form-control"
                                                                                                name='estado_pago[]'>
                                                                                                @if ($participante->estado_pago == 'pagado')
                                                                                                    <option
                                                                                                        value="pagado">
                                                                                                        pagado</option>
                                                                                                    <option
                                                                                                        value="no pagado">
                                                                                                        no pagado
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="no pagado">
                                                                                                        no pagado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="pagado">
                                                                                                        pagado</option>
                                                                                                @endif
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Estado de
                                                                                            Participacion</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <select
                                                                                                class="form-control"
                                                                                                name='estado_participacion[]'>
                                                                                                @if ($participante->estado_participacion == 'confirmado')
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                @elseif($participante->estado_participacion == 'inscripto')
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                @endif
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    <input type="hidden"
                                                                                        name="id_actividad"
                                                                                        value="{{ $actividad->id }}">
                                                                                    <button type="submit"
                                                                                        class="btn  bg-gradient-primary btn-lg w-100 mt-4 mb-0">modificar</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- FIN MODAL EDITAR --}}
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-- 

  ||||||||||||||||||||||||||||------------- TABLA EN ESPERA -------------||||||||||||||||||||||||||||

--}}
            <div class="row my-4">
                <div class="col-lg-12 col-md-8 mb-md-0 mb-7">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Participantes En lista de Espera</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">X Agragados</span> el ultimo dia.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pb-2">

                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Titulo</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Fechas</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tipo</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Participantes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participantes as $participante)
                                            @if ($participante->estado_participacion == 'en espera')
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div
                                                                class="d-flex flex-column justify-content-center text-center">
                                                                <h6 class="mb-0 text-sm text-center">
                                                                    {{ $participante->id }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a data-bs-toggle="modal"
                                                                    data-bs-target="#modal-notification-{{ $participante->id }}"
                                                                    class="btn btn-link pe-3 ps-0 mb-0">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->nombre }}
                                                                        {{ $participante->apellido }}</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 text-lowercase"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Click para enviar WhatsApp" target="_blank"
                                                                    href="https://api.whatsapp.com/send?phone=549{{ $participante->email }}&text=Hola, Soy el organizador del {{ $actividad->titulo }}">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->phone }}</h6>
                                                                </a>
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 text-lowercase"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Click para enviar Mail"
                                                                    href="mailto:{{ $participante->email }}">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ $participante->email }}</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto">
                                                                    <h6 class="mb-0 text-sm text-center">$
                                                                        {{ $participante->total_pago }} <span
                                                                            class="badge bg-gradient-success">{{ $participante->pago }}</span>
                                                                    </h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row text-center">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <button type="button"
                                                                    class="dropdown-item text-secondary font-weight-bold text-xs"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-form-{{ $participante->id }}">Editar</button>
                                                                <form action="/inscripcion/{{ $participante->id }}"
                                                                    method="POST">@csrf @method('delete')<button
                                                                        type="submit"
                                                                        class="dropdown-item text-secondary font-weight-bold text-xs"
                                                                        h>Eliminar</button></form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- Modal para Ver Participante --}}
                                                    <div class="modal fade"
                                                        id="modal-notification-{{ $participante->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="modal-notification"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-danger modal-dialog-centered modal-"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header mx-auto">
                                                                    <h6 class="modal-title text-center"
                                                                        id="modal-title-notification">Ficha
                                                                        {{ $participante->id }}:
                                                                        {{ $participante->nombre }}
                                                                        {{ $participante->apellido }} <br>
                                                                        <small style="font-size: x-small">Creado:
                                                                            {{ $participante->created_at }}</small>
                                                                    </h6>
                                                                </div>
                                                                <div class="modal-body pt-1">
                                                                    <div class="text-center">
                                                                        <a class="btn btn-link mb-0 pb-0"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Click para enviar WhatsApp" target="_blank"
                                                                            href="https://api.whatsapp.com/send?phone=549{{ $participante->email }}&text=Hola, Soy el organizador del {{ $actividad->titulo }}">
                                                                            <h6 class="mb-0 text-sm">Celular:
                                                                                {{ $participante->phone }}</h6>
                                                                        </a>
                                                                        <a class="btn btn-link mb-0 pb-0 text-lowercase"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Click para enviar Mail"
                                                                            href="mailto:{{ $participante->email }}">
                                                                            <h6 class="mb-0 text-sm">E-mail:
                                                                                {{ $participante->email }}</h6>
                                                                        </a>
                                                                        <hr>
                                                                        <h6 class="mb-0 text-sm">Llega: </h6>
                                                                        <p>{{ $participante->llega }}</p>
                                                                        <h6 class="mb-0 text-sm">Dieta: </h6>
                                                                        <p>{{ $participante->dieta }}</p>
                                                                        <h6 class="mb-0 text-sm">Observaciones: </h6>
                                                                        <p>{{ $participante->observaciones }}</p>
                                                                        <hr>
                                                                        <a class="btn btn-link mb-0 pb-0">
                                                                            <h6 class="mb-0 text-sm text-center">$
                                                                                {{ $participante->total_pago }}
                                                                                <span
                                                                                    class="badge bg-gradient-success">{{ $participante->pago }}</span>
                                                                            </h6>
                                                                        </a>
                                                                        <h6 class="mb-0 text-sm text-secondary">
                                                                            <small> Facturar a:
                                                                                {{ $participante->facturacion }}
                                                                            </small>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-primary mx-auto"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close">Cerrar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- FIN MODAL VER --}}
                                                    {{-- Modal para Editar Participante --}}
                                                    <div class="modal fade"
                                                        id="modal-form-{{ $participante->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <div class="card card-plain">
                                                                        <div class="card-header pb-0 text-left">
                                                                            <h3
                                                                                class="font-weight-bolder text-primary text-gradient">
                                                                                Editar Ficha
                                                                                {{ $participante->id }}:
                                                                                {{ $participante->nombre }}
                                                                                {{ $participante->apellido }}</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form
                                                                                action="/inscripcion/{{ $participante->id }}"
                                                                                method="POST" role="form text-left">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Nombre</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->nombre }}"
                                                                                                name='nombre'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Apellido</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->apellido }}"
                                                                                                name='apellido'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Celular</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="phone"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->phone }}"
                                                                                                name='phone'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>e-mail</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Apellido"
                                                                                                value="{{ $participante->email }}"
                                                                                                name='email'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Llega:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="phone"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->llega }}"
                                                                                                name='llega'>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Dieta:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                value="{{ $participante->dieta }}"
                                                                                                name='dieta'>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <label>Observaciones:</label>
                                                                                <div class="input-group mb-3">
                                                                                    <textarea type="text" class="form-control" placeholder="Comentarios..."
                                                                                        name='obsercaciones'>{{ $participante->observaciones }}</textarea>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label>Pago:</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <select
                                                                                                class="form-control"
                                                                                                name='estado_pago[]'>
                                                                                                @if ($participante->estado_pago == 'pagado')
                                                                                                    <option
                                                                                                        value="pagado">
                                                                                                        pagado</option>
                                                                                                    <option
                                                                                                        value="no pagado">
                                                                                                        no pagado
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="no pagado">
                                                                                                        no pagado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="pagado">
                                                                                                        pagado</option>
                                                                                                @endif
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label>Estado de
                                                                                            Participacion</label>
                                                                                        <div class="input-group mb-3">
                                                                                            <select
                                                                                                class="form-control"
                                                                                                name='estado_participacion[]'>
                                                                                                @if ($participante->estado_participacion == 'confirmado')
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                @elseif($participante->estado_participacion == 'inscripto')
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="en espera">
                                                                                                        en espera
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="confirmado">
                                                                                                        confirmado
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="inscripto">
                                                                                                        no corfimado
                                                                                                    </option>
                                                                                                @endif
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    <input type="hidden"
                                                                                        name="id_actividad"
                                                                                        value="{{ $actividad->id }}">
                                                                                    <button type="submit"
                                                                                        class="btn  bg-gradient-primary btn-lg w-100 mt-4 mb-0">modificar</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- FIN MODAL EDITAR --}}
                                                </tr>
                                            @endif
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
                                <a href="https://www.creative-tim.com" class="font-weight-bold"
                                    target="_blank">Creative Tim</a>
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
    @include('AA.footer')
