<?php
// app/views/catalogo.php - Catálogo View

require_once __DIR__ . '/../../includes/header.php';
?>

<h1 class="text-center my-4">Catálogo de Viandas</h1>

<div class="container">
    <div class="row">
        <?php foreach ($viandas as $vianda): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x200?text=<?php echo urlencode($vianda['nombre']); ?>" class="card-img-top" alt="<?php echo $vianda['nombre']; ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $vianda['nombre']; ?></h5>
                        <p class="card-text"><?php echo $vianda['descripcion']; ?></p>
                        <p class="card-text"><strong>Precio: $<?php echo $vianda['precio']; ?></strong></p>
                        <button class="btn btn-primary mt-auto">Agregar al pedido</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
require_once __DIR__ . '/../../includes/footer.php';
?>