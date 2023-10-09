<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importar JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">    
        <div class="col-md-6 offset-md-3">
            <h4>Importar Arquivo JSON</h4>
            <div class="input-group mb-3">
                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
                <input type="text" id="filePath" class="form-control" placeholder="Caminho do arquivo .json" readonly>
                <button class="btn btn-primary" onclick="selectFile()">Localizar Arquivo</button>
            </div>
            <button class="btn btn-success" onclick="importFile()">Importar</button>
        </div>
    </div>
</div>

<script src="js/import.js"></script>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head> -->
    <!-- Meta tags, title, etc. -->
<!-- </head>
<body>
    <div id="app">
        <import-json-view></import-json-view>
    </div>        
    <script src="public/js/app.js"></script>      
    <script src="public/build/assets/app-b1766507.js"></script>      
</body>
</html> -->
