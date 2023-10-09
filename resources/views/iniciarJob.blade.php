<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Job</title>
</head>
<body>
    <button id="btnIniciarJob">Iniciar Job</button>

    <script>
        document.getElementById('btnIniciarJob').addEventListener('click', function() {
            fetch('http://localhost:8000/queue-start', {
                method: 'GET'
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
            });
        });
    </script>
</body>
</html>