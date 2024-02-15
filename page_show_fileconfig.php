<?php include 'header.php'; ?>
    
</body>
</html>

<?php

// Assignación de las variables en relación a los datos introducidos en los inputs del formulario básico. 

if (isset($_POST['client-name'])) {
    mostrarFicheroAvanzado();
} else {
    mostrarFicheroBasico();
}

function mostrarFicheroBasico()
{
    $ddns_update_style_options = ['ad-hoc', 'interim', 'standard', 'none'];
    $ddns_update_style = isset($_POST['ddns-update-style']) && in_array($_POST['ddns-update-style'], $ddns_update_style_options)
        ? $_POST['ddns-update-style']
        : 'none';
    $default_lease_time = $_POST['default-lease-time'];
    $max_lease_time = $_POST['max-lease-time'];
    $authorative = (isset($_POST['authorative']) && $_POST['authorative'] === 'authorative') ? 'authorative;' : '';
    
    $subnet = $_POST['subnet'];
    $mask = $_POST['mask'];
    $rangeInicial = $_POST['range-start'];
    $rangeFinal = $_POST['range-end'];
    $submask = $_POST['submask'];
    $option_routers = $_POST['gateway'];
    $domain_name_servers = $_POST['domain-name-servers'];
    $domain_name = $_POST['domain_name'];

    $fichero_dhcp = "
        <div class='contentBasicForm'>
        <h1>Configuració DHCP - Simple</h1>
        <div class='file'>
        # Archivo de configuración del servidor DHCP<br>
        # Configuración global<br><br>
        ddns-update-style  $ddns_update_style;<br>
        default-lease-time $default_lease_time;<br>
        max-lease-time $max_lease_time;<br>
        $authorative<br>

        subnet $subnet netmask $mask {<br>
        &emsp;&emsp;range $rangeInicial $rangeFinal;<br>
        &emsp;&emsp;subnet-mask $submask;<br>
        &emsp;&emsp;option routers $option_routers;<br>
        &emsp;&emsp;option domain-name-servers $domain_name_servers;<br>
        &emsp;&emsp;option domain-name $domain_name;<br>
        }
        <br>
        </div>
        </div>
        ";
    echo "$fichero_dhcp";

}

function mostrarFicheroAvanzado()
{
    $ddns_update_style_options = ['ad-hoc', 'interim', 'standard', 'none'];
    $ddns_update_style = isset($_POST['ddns-update-style']) && in_array($_POST['ddns-update-style'], $ddns_update_style_options)
        ? $_POST['ddns-update-style']
        : 'none';
    $default_lease_time = $_POST['default-lease-time'];
    $max_lease_time = $_POST['max-lease-time'];
    $authorative = (isset($_POST['authorative']) && $_POST['authorative'] === 'authorative') ? 'authorative;' : '';
    
    $subnet = $_POST['subnet'];
    $mask = $_POST['mask'];
    $rangeInicial = $_POST['range-start'];
    $rangeFinal = $_POST['range-end'];
    $submask = $_POST['submask'];
    $option_routers = $_POST['gateway'];
    $domain_name_servers = $_POST['domain-name-servers'];
    $domain_name = $_POST['domain_name'];
    
    $host = $_POST['client-name'];
    $hardware_ethernet = $_POST['mac-address'];
    $fixed_address = $_POST['ip-address'];

    $fichero_dhcp_avanzado = "
        <div class='contentBasicForm'>
        <h1>Configuració DHCP - Avançat</h1>
        <div class='file'>
        # Archivo de configuración del servidor DHCP<br>
        # Configuración global<br><br>
        ddns-update-style  $ddns_update_style;<br>
        default-lease-time $default_lease_time;<br>
        max-lease-time $max_lease_time;<br>
        $authorative<br>

        subnet $subnet netmask $mask {<br>
        &emsp;&emsp;range $rangeInicial $rangeFinal;<br>
        &emsp;&emsp;subnet-mask $submask;<br>
        &emsp;&emsp;option routers $option_routers;<br>
        &emsp;&emsp;option domain-name-servers $domain_name_servers;<br>
        &emsp;&emsp;option domain-name $domain_name;<br>

        &emsp;&emsp;host $host {<br>
        &emsp;&emsp;&emsp;&emsp; hardware ethernet $hardware_ethernet;<br>
        &emsp;&emsp;&emsp;&emsp; fixed-address $fixed_address;<br>
        &emsp;&emsp;}<br>
        }
        <br>
        </div>
        </div>
        ";
    echo "$fichero_dhcp_avanzado";

}

?>