<html lang="en">

<head>
    <title>Crop image using croppie plugins - techsolutionstuff.com</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
</head>

<body>

    <h3 class="text-center">crop image using croppie plugins - techsolutionstuff.com</h3>
    <div class="container">
        <div class="panel panel-default" style="margin-top: 25px;">
            <div class="panel-heading">Upload Image</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4 text-center" style="padding-top:30px;">
                        <div id="upload-input" style="width:350px; height: 400px;"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <strong>Select Image:</strong>
                        <br />
                        <input type="file" id="upload">
                        <br />
                        <button class="btn btn-success upload-result">Upload Image</button>
                    </div>
                    <div class="col-md-4">
                        <div id="uploaded-input"
                            style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script type="text/javascript">
        $uploadCrop = $('#upload-input').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'circle'
            },
            boundary: {
                width: 300,
                height: 300
            }
        });


        $('#upload').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });

            }
            reader.readAsDataURL(this.files[0]);
        });


        $('.upload-result').on('click', function(ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(resp) {
                $.ajax({
                    url: "/crop_image/store_img_ajax.php",
                    type: "POST",
                    data: {
                        "image": resp
                    },
                    success: function(data) {
                        html = '<img style="margin: 20px;" src="' + resp + '" />';
                        $("#uploaded-input").html(html);
                    }
                });
            });
        });
    </script>
</body>

</html>
