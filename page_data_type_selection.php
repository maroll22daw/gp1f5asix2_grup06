<?php include 'header.php';?>

    <div class="container mt-5 bg-dark text-white p-4 rounded">
        <h1>Seleccione el tipo de datos</h1>
        <form method="post" action="process.php">
            <div>
                <label for="data_type">Seleccione el tipo de datos:</label>
                <select name="data_type" required>
                    <option value="basic">Datos Básicos</option>
                    <option value="advanced">Datos Avanzados</option>
                </select>
            </div>
            
            <button class="btn btn-primary" type="submit">Aceptar</button>
        </form>
    </div>
</body>
</html>
