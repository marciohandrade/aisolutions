<template>
    <div>
        <h2>Importação de Arquivos JSON</h2>

        <!-- Campo para mostrar o caminho do arquivo -->
        <input type="text" v-model="filePath" placeholder="Caminho do arquivo" readonly />

        <!-- Botões -->
        <button @click="triggerFileInput">Localizar arquivo</button>
        <button @click="clearFields">Cancelar</button>
        <button @click="importFile">Importar</button>

        <!-- Input escondido para seleção de arquivo -->
        <input type="file" ref="fileInput" @change="handleFileUpload" style="display: none" />
    </div>
</template>

<script>
export default {
    data() {
        return {
            filePath: '',
            selectedFile: null
        };
    },
    methods: {
        triggerFileInput() {
            this.$refs.fileInput.click();
        },
        handleFileUpload(event) {
            const file = event.target.files[0];
            if (file) {
                this.filePath = file.name;
                this.selectedFile = file;
            }
        },
        clearFields() {
            this.filePath = '';
            this.selectedFile = null;
        },
        async importFile() {
            if (!this.selectedFile) {
                alert('Por favor, selecione um arquivo primeiro.');
                return;
            }

            if (this.selectedFile.name.split('.').pop().toLowerCase() !== 'json') {
                alert('Selecione um arquivo com extensão .json');
                return;
            }

            const formData = new FormData();
            formData.append('file', this.selectedFile);

            try {
                await this.$http.post('/json-import', formData);
                alert('Arquivo importado com sucesso!');
                this.clearFields();
            } catch (error) {
                alert('Erro ao importar arquivo: ' + (error.response && error.response.data.message || 'Erro desconhecido'));
            }
        }
    }
}
</script>
