<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

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

            <div class="container-fluid">
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        $(document).ready(function () {
            $('#sideAcordion').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
</body>
</html>