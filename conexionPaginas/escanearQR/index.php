<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VaQr - Escanear Código QR</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Incluye correctamente la librería html5-qrcode -->
    <script src="https://cdn.jsdelivr.net/npm/html5-qrcode/minified/html5-qrcode.min.js"></script>
</head>
<body>
    <div class="contenedor-telefono">
        <div class="pantalla">
            <h1 class="titulo">VaQr</h1>
            <div class="codigo-qr">
                <div id="qr-reader" style="width: 300px; height: 300px;"></div> <!-- Escáner QR -->
            </div>
            <div class="logo-vaca">
                <img src="bovine-icon.png" alt="Icono Vaca">
            </div>
        </div>
    </div>

    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Código escaneado: ${decodedText}`);
            alert(`Código QR detectado: ${decodedText}`);
        }

        function onScanFailure(error) {
            console.warn(`Error al escanear: ${error}`);
        }

        function iniciarEscaneo() {
            // Verificar si la API de medios está disponible
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        const html5QrCode = new Html5Qrcode("qr-reader");
                        
                        Html5Qrcode.getCameras().then(devices => {
                            if (devices && devices.length > 0) {
                                const cameraId = devices[0].id;  // Usa la primera cámara disponible

                                html5QrCode.start(
                                    cameraId,
                                    {
                                        fps: 10,    // Cuadros por segundo
                                        qrbox: { width: 250, height: 250 }  // Área de escaneo visible
                                    },
                                    onScanSuccess,
                                    onScanFailure
                                ).catch(err => {
                                    console.error(`Error al iniciar el escaneo: ${err}`);
                                });
                            } else {
                                alert("No se encontraron cámaras. Verifica los permisos.");
                            }
                        }).catch(err => {
                            console.error(`Error obteniendo cámaras: ${err}`);
                            alert("Error accediendo a la cámara: " + err);
                        });
                    })
                    .catch(function (err) {
                        console.log("No se pudo acceder a la cámara: ", err);
                        alert("Error al intentar acceder a la cámara: " + err.message);
                    });
            } else {
                alert("La API de acceso a la cámara no es compatible con este navegador.");
            }
        }

        // Iniciar el escaneo cuando la página esté lista
        window.onload = function() {
            iniciarEscaneo();
        };
    </script>
</body>
</html>



