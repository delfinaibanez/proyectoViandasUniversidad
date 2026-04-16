<?php
// app/views/admin/pedidos.php - Pedidos Admin View

require_once __DIR__ . '/../../../includes/header.php';
require_once __DIR__ . '/../../../includes/auth.php';
requireLogin();
?>

<h1>Administrar Pedidos</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Total</th>
            <th>Fecha</th>
            <th>Status</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?php echo $pedido['id']; ?></td>
                <td><?php echo $pedido['cliente']; ?></td>
                <td>$<?php echo $pedido['total']; ?></td>
                <td><?php echo $pedido['fecha']; ?></td>
                <td><?php echo $pedido['status']; ?></td>
                <td>
                    <form method="POST" action="<?php echo BASE_URL; ?>/admin/pedidos/update/<?php echo $pedido['id']; ?>">
                        <select name="status">
                            <option value="pendiente">Pendiente</option>
                            <option value="preparando">Preparando</option>
                            <option value="listo">Listo</option>
                            <option value="entregado">Entregado</option>
                        </select>
                        <button type="submit">Actualizar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
require_once __DIR__ . '/../../../includes/footer.php';
?>