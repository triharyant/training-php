<?php

$error = '';
$name = '';
$email = '';
$telephone = '';
$image = '';
$document = '';


if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $image = $_POST["image"];
        $document = $_POST["document"];

        //$target_dir = "uploads/";
        //$target_file = $target_dir . basename($_FILES["image"]["image"]);
        //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        //move_uploaded_file(
            //$_FILES['image']['tmp_name'], 
            //'uploads/' . $_FILES['image']['name']
         // );
          
        
        




            $file_open = fopen("file.csv", "a");
            $no_rows = count(file("file.csv"));
            if($no_rows > 1)
                {
                    $no_rows = ($no_rows - 1) + 1;
                }
        $form_data = array(
            'sr_no'  => $no_rows,
            'name'  => $name,
            'email'  => $email,
            'telephone' => $telephone,
            'image' => $image,
            'document' => $document
        );
        fputcsv($file_open, $form_data);
            $error = '<label class="text-success">Berhasil!</label>';
            $name = '';
            $email = '';
            $telephone = '';
            $image = '';
            $document = '';
        
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Registrasi</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
 <body>
  <br />
    <div class="container">
    <h2 align="center">Form Registrasi</h2>
    <br />
    <div class="col-md-6" style="margin:0 auto; float:none;">
        <form method="post">
        
        <br />
            <?php echo $error; ?>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" placeholder="Masukkan Nama" class="form-control" value="<?php echo $name; ?>" />
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo $email; ?>" />
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="telephone" class="form-control" placeholder="Masukkan Nomor Telepon" value="<?php echo $telephone; ?>" />
                </div>

                <div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Upload Profile Picture" value="<?php echo $image; ?>">
                        <?php 
                            //echo $message;

                            // $target_dir = "./file";
                            // $target_file = $target_dir . basename($_FILES["image"]["name"]);
                            // $uploadOk = 1;
                            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // // Check if image file is a actual image or fake image
                            // if(isset($_POST["submit"])) {
                            // $check = getimagesize($_FILES["image"]["tmp_name"]);
                            // if($check !== false) {
                            //     echo "File is an image - " . $check["mime"] . ".";
                            //     $uploadOk = 1;
                            // } else {
                            //     echo "File is not an image.";
                            //     $uploadOk = 0;
                            // }
                            // }
                        ?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Dokumen</label>
                    <input type="file" name="document" id="document" class="form-control" placeholder="Upload Dokumen" value="<?php echo $document; ?>">
                </div>

                <div class="form-group" align="center">
                    <input type="submit" name="submit" class="btn btn-info" value="Submit" />
                </div>
        </form>
    </div>
    </div>
 </body>
</html>