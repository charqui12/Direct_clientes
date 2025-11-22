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
            background: #f4f1f1ff;
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
            border-radius: 50px;
            padding: 12px 20px;
            border: 2px solid #150e4aff;
        }
        .card {
            border-radius: 15px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            flex-grow: 1;
        }
        .btn {
            margin-top: auto;
        }
    </style>
</head>

<body>

   
    <div class="hero text-center">
       
      
        <h1 class="display-4 fw-bold">
           <i class="fa-solid fa-house me-2"></i>
        <img src="img/logo.jpg" class="card-img-top" alt="logo" style="width:80px; height:80px; border-radius:50%; object-fit:cover; vertical-align:middle;">
           Bienvenido al Directorio de Comidas Food Finder 
        </h1>

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

            <!-- CARD 1 -->
            <div class="col-md-4 mb-4 negocio">
                <div class="card shadow-sm">
                    <img src="img/negocioburritos.jpg" class="card-img-top" alt="Comida">
                    <div class="card-body">
                        <h5 class="card-title">Burritos Mix</h5>
                        <p class="card-text">
                            <strong>Especialidad:</strong> Comida casera y antojitos<br>
                            <strong>Horario:</strong> 9:00 AM - 8:00 PM<br>
                            <strong>Tel:</strong> 753-123-4567
                        </p>
                        <a href="#" 
                           class="btn btn-warning w-100 verMas"
                           data-titulo="El Entronque"
                           data-especialidad="Comida casera y antojitos"
                           data-horario="9:00 AM - 8:00 PM"
                           data-telefono="753-123-4567"
                           data-imagen="img/negocio0.webp">
                           Ver más
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-4 mb-4 negocio">
                <div class="card shadow-sm">
                    <img src="img/negocioEntronque.jpg" class="card-img-top" alt="Comida">
                    <div class="card-body">
                        <h5 class="card-title">El Entronque Cutzeo</h5>
                        <p class="card-text">
                            <strong>Especialidad:</strong> Comida casera y antojitos<br>
                            <strong>Horario:</strong> 9:00 AM - 8:00 PM<br>
                            <strong>Tel:</strong> 753-123-4567
                        </p>
                        <a href="#" 
                           class="btn btn-warning w-100 verMas"
                           data-titulo="El Entronque Cutzeo"
                           data-especialidad="Comida casera y antojitos"
                           data-horario="9:00 AM - 8:00 PM"
                           data-telefono="753-123-4567"
                           data-imagen="img/negocio1.webp">
                           Ver más
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-4 mb-4 negocio">
                <div class="card shadow-sm">
                    <img src="img/negocioPatrona.jpg" class="card-img-top" alt="Comida">
                    <div class="card-body">
                        <h5 class="card-title">La Patrona</h5>
                        <p class="card-text">
                            <strong>Especialidad:</strong> Bar y comidas refinadas<br>
                            <strong>Horario:</strong> 10:00 AM - 9:00 PM<br>
                            <strong>Tel:</strong> 753-987-6543
                        </p>
                        <a href="#" 
                           class="btn btn-warning w-100 verMas"
                           data-titulo="La Patrona"
                           data-especialidad="Bar y comidas refinadas"
                           data-horario="10:00 AM - 9:00 PM"
                           data-telefono="753-987-6543"
                           data-imagen="img/negocio2.webp">
                           Ver más
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalNegocio" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header bg-warning">
            <h5 class="modal-title fw-bold" id="modalTitulo"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
              <img id="modalImagen" class="img-fluid mb-3 rounded" alt="Negocio">

              <p><strong>Especialidad:</strong> <span id="modalEspecialidad"></span></p>
              <p><strong>Horario:</strong> <span id="modalHorario"></span></p>
              <p><strong>Teléfono:</strong> <span id="modalTelefono"></span></p>
              <p><strong>Platillos destacados:</strong> Tacos, Enchiladas, Sopes <span id="modalPlatillos"></span></p>
          </div>

        </div>
      </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        // Funcionalidad del buscador
        document.getElementById("buscador").addEventListener("keyup", function() {
            let filtro = this.value.toLowerCase();
            let negocios = document.querySelectorAll(".negocio");

            negocios.forEach(card => {
                let texto = card.innerText.toLowerCase();
                card.style.display = texto.includes(filtro) ? "" : "none";
            });
        });

        // Manejo del modal
        document.querySelectorAll(".verMas").forEach(boton => {
            boton.addEventListener("click", function(e) {
                e.preventDefault();

                document.getElementById("modalTitulo").textContent = this.dataset.titulo;
                document.getElementById("modalEspecialidad").textContent = this.dataset.especialidad;
                document.getElementById("modalHorario").textContent = this.dataset.horario;
                document.getElementById("modalTelefono").textContent = this.dataset.telefono;
                document.getElementById("modalPlatillos").textContent = this.dataset.platillos;
                document.getElementById("modalImagen").src = this.dataset.imagen;

                let modal = new bootstrap.Modal(document.getElementById('modalNegocio'));
                modal.show();
            });
        });
    </script>

</body>
</html>
