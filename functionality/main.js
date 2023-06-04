function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var image = new Image();
      image.src = reader.result;
      image.style.maxWidth = "100%";  // Adjust the style as needed
      var container = document.getElementById('uploaded-image-container');
      container.innerHTML = '';
      container.appendChild(image);
    }
    reader.readAsDataURL(event.target.files[0]);
  }
  