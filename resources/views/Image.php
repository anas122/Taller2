<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen</title>
    <style>
        .container{
            max-width: 100vw;
            max-height: 100vh;
            padding: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .image{
            max-width: 30rem;
            max-height: 30rem;
            object-fit: cover;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <h1 class="philosophicalPhrase"><?php echo $philosophicalPhrase; ?></h1>
        <img class="image" src=<?php echo $image; ?> alt="">
    </div>
</body>