<template>
    <div>
        <input type="file" ref="fileInput" @change="handleFileUpload" style="display: none" />
        <button @click="triggerFileInput">Procurar arquivo</button>
        <button @click="uploadFile">Importar</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedFile: null
        };
    },
    methods: {
        triggerFileInput() {
            this.$refs.fileInput.click();
        },
        handleFileUpload(event) {
            this.selectedFile = event.target.files[0];
        },
        async uploadFile() {
            if (!this.selectedFile) {
                alert('Por favor, selecione um arquivo primeiro.');
                return;
            }

            const formData = new FormData();
            formData.append('file', this.selectedFile);

            try {
                const response = await this.$http.post('/import-json', formData);
                alert('Arquivo importado com sucesso!');
            } catch (error) {
                alert('Erro ao importar arquivo: ' + (error.response && error.response.data.message || 'Erro desconhecido'));
            }
        }
    }
}
</script>