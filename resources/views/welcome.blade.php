<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
   <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />

</head>
<body>
    

    <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container my-5">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    Dropzone FileUpload
                </div>
                <div class="card-body">
                    <input type="file" class="my-pond" name="documents[]" multiple/>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
    

    <!-- include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<!-- include FilePond library -->
<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

<!-- include FilePond plugins -->
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

<!-- include FilePond jQuery adapter -->
<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

<script>
     $(function(){
  
    // First register any plugins
    // $.fn.filepond.registerPlugin(FilePondPluginImagePreview);
    $('.my-pond').filepond.registerPlugin(FilePondPluginImagePreview);
    // Set allowMultiple property to true
    $('.my-pond').filepond({
        allowMultiple: true,
        storeAsFile:true
    });
  
  
  });
</script>
</body>
</html>