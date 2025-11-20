<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Directorio de Comidas</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Estilo adicional -->
    <style>
        body {
            background: #fff8ef;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
            padding: 80px 20px;
            color: white;
            text-shadow: 2px 2px 6px black;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .search-box input {
            border-radius: 30px;
            padding: 12px 20px;
            border: 2px solid #ff7b00;
        }
        .card {
            border-radius: 15px;
        }
        .card-title {
            color: #ff7b00;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- HERO (Encabezado principal) -->
    <div class="hero text-center">
        
        <h1 class="display-4 fw-bold">Bienvenido al Directorio de Comidas</h1>
        <p class="lead">Encuentra los mejores negocios locales cerca de ti</p>

        <!-- Barra de búsqueda -->
        <div class="container mt-4 search-box">
            <input type="text" id="buscador" class="form-control form-control-lg text-center" placeholder="🔍 Buscar negocio, comida, dirección...">
        </div>
    </div>

    <!-- CONTENIDO -->
    <div class="container mt-5 mb-5">

        <h2 class="text-center mb-4 fw-bold">Negocios Destacados</h2>

        <div class="row" id="lista-negocios">

            <!-- CARD DE EJEMPLO (El Entronque) -->
            <div class="col-md-4 mb-4 negocio">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?auto=format&fit=crop&w=800&q=60"
                        class="card-img-top" alt="Comida">
                    <div class="card-body">
                        <h5 class="card-title">El Entronque</h5>
                        <p class="card-text">
                            <strong>Especialidad:</strong> Comida casera y antojitos<br>
                            <strong>Horario:</strong> 9:00 AM - 8:00 PM<br>
                            <strong>Tel:</strong> 753-123-4567
                        </p>
                        <a href="#" class="btn btn-warning w-100">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- DUPLICA ESTE FORMATO PARA MÁS NEGOCIOS -->

        </div>

    </div>

    <script>
        // Buscador dinámico
        document.getElementById("buscador").addEventListener("keyup", function() {
            let filtro = this.value.toLowerCase();
            let negocios = document.querySelectorAll(".negocio");

            negocios.forEach(card => {
                let texto = card.innerText.toLowerCase();
                card.style.display = texto.includes(filtro) ? "" : "none";
            });
        });
    </script>

</body>
</html>
