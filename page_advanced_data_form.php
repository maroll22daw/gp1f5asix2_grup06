<?php include 'header.php';?>

    <div class="contentBasicForm">
        <h1>Formulario para introducir datos avanzados</h1>
        <form class="" method="POST" action="page_show_fileconfig.php">
            <div class="mb-3">
                <label for="ddns-update-style" class="form-label">ddns-update-style</label>
                <select class="form-control" id="ddns-update-style" name="ddns-update-style">
                    <option value="ad-hoc">ad-hoc</option>
                    <option value="interim">interim</option>
                    <option value="standard">standard</option>
                    <option value="none" selected>none</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">default-lease-time</label>
                <input type="number" class="form-control" id="default-lease-time" name="default-lease-time" min="1" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">max-lease-time</label>
                <input type="number" class="form-control" id="max-lease-time" name="max-lease-time" min="1" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">authorative</label>
                <select class="form-control" id="authorative" name="authorative">
                    <option value="authorative">authorative</option>
                    <option value="null">default</option>                
                </select>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">Subnet</label>
                <input type="text" class="form-control" id="subnet" name="subnet" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 192.168.1.0" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">Netmask</label>
                <input type="text" class="form-control" id="mask" name="mask" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 255.255.0.0" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">Range</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="range-start" name="range-start" placeholder="Inicio del Rango: IP" required>
                        <input type="text" class="form-control" id="range-end" name="range-end" placeholder="Fin del Rango: IP" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="deny-unknown-clients" name="deny-unknown-clients">
                        <label class="form-check-label" for="deny-unknown-clients">Denegar asignación a clientes desconocidos</label>
                    </div>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">Subnet Maks</label>
                <input type="text" class="form-control" id="submask" name="submask" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 255.255.255.0" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">Puerta de enlace (Router)</label>
                <input type="text" class="form-control" id="gateway" name="gateway" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 192.168.1.1" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">Servidor DNS</label>
                <input type="text" class="form-control" id="domain-name-servers" name="domain-name-servers" pattern="\b(?:\d{1,3}\.){3}\d{1,3}\b" placeholder="Ejemplo: 8.8.8.8" required>
            </div>
            <div class="mb-3">
                <label for="authorative" class="form-label">Domain Name</label>
                <input type="text" pattern="[a-zA-Z0-9]+" minlength="5" maxlength="20" class="form-control" id="domain_name" name="domain_name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="client-name" class="form-label">Nombre Host</label>
                <input type="text" class="form-control" id="client-name" name="client-name" required>
            </div>
            <div class="mb-3">
                <label for="mac-address" class="form-label">Dirección MAC</label>
                <input type="text" class="form-control" id="mac-address" name="mac-address" pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$" placeholder="Ejemplo: 00:11:22:33:44:55" required>
            </div>
            <div class="mb-3">
                <label for="ip-address" class="form-label">Dirección IP Fija</label>
                <input type="text" class="form-control" id="ip-address" name="ip-address" pattern="^(\d{1,3}\.){3}\d{1,3}$" placeholder="Ejemplo: 192.168.1.101" required>
            </div>
            <button class=" button1 btn btn-primary" type='submit'>Siguiente página</button>
        </form>
    </div>
    <a href="page_data_type_selection.php"><button type="submit" class=" button2 btn btn-primary ">Anterior</button></a>
</body>
</html>
