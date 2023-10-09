    let file = null;

    function selectFile() {
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = '.json';
        input.onchange = event => {
            file = event.target.files[0];
            document.getElementById('filePath').value = file.name;
        };
        input.click();
    }

    function importFile() {
        if (!file) {
            alert('Por favor, selecione um arquivo .json primeiro.');
            return;
        }

        const formData = new FormData();
        formData.append('file', file);

        const tokenCSRF = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('http://localhost:8000/importar', {
            method: 'POST',       
            file:file ,
            headers: {
                'X-CSRF-TOKEN': tokenCSRF
            },        

        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = '/path-to-new-view';
            } else {
                alert('Erro ao importar o arquivo.');
            }
        })
        .catch(error => {
            console.error('Houve um erro ao fazer upload do arquivo:', error);
        });
    }
