<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mi Sistema')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sistema de Productos</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="{{route('home')}}">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('productos.index') }}">Productos</a>
                </li>
                <li>
                    <a href="{{ route('proveedors.index') }}">Proveedores</a>
                </li>
                <li>
                    <a href="{{ route('ordens.index') }}">Ordenes</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sideAcordion" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menú</span>
                    </button>
                </div>
            </nav>

                <div class="container mt-4">
        @yield('content')
    </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#codigo_producto').on('change', function () {
        const productoId = $(this).val();
        const proveedorSelect = $('#codigo_proveedor');

        proveedorSelect.empty().append('<option value="">Cargando...</option>');

        if (productoId) {
            fetch(`/proveedores-por-producto/${productoId}`)
                .then(response => response.json())
                .then(data => {
                    proveedorSelect.empty().append('<option value="">-- Selecciona un proveedor --</option>');
                    data.forEach(proveedor => {
                        proveedorSelect.append(`<option value="${proveedor.codigo_proveedor}">${proveedor.nombre_proveedor}</option>`);
                    });
                })
                .catch(error => {
                    console.error('Error al cargar proveedores:', error);
                    proveedorSelect.empty().append('<option value="">Error al cargar</option>');
                });
        } else {
            proveedorSelect.empty().append('<option value="">-- Selecciona un proveedor --</option>');
        }
    });
</script>


        <script>
        $(document).ready(function () {
            $('#sideAcordion').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
