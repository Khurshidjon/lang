<template>
    <div class="container">
        <h2>Upload file</h2>
        <textarea autofocus name=""  class="form-control text-content" id="" cols="30" rows="10"></textarea>
        <div class="upload-file">
            <div class="progress">
                <div class="progress-bar progress-bar-striped" :style="{width:progressProcessing + '%'}">{{ progress }}}%</div>
            </div>
            <span class="placeholder">Matn kiriting yoki fayl yuklang</span>
            <input type="file" @change="fileInputChange" accept="application/pdf">
        </div>
    </div>
</template>

<script>
    export default {
        name: "FileUploadComponent",
        data(){
            return {
                progressProcessing: 90,
                progress: 90
            }
        },
        methods: {
            async fileInputChange(){
                    let files = Array.from(event.target.files);
                console.log(files)
            }
        }
    }
</script>

<style scoped>
    .text-content{
        position: relative;
        width: 100%;
    }
    .upload-file .progress{
        margin-bottom: 50px;
    }
    .upload-file{
        text-align: center;
        position: relative;
        top: -480px;
        /*left: 500px;*/
    }
    textarea{
        font-size: 30px;
    }
    .upload-file .placeholder{
        font-size: 30px;
    }
</style>
