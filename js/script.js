function updateFileName() {
    var fileInput = document.getElementById('fileToUpload');
    var fileLabel = document.getElementById('fileLabel');
    fileLabel.textContent = fileInput.files[0].name;
}