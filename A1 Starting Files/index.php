<?php

/*************** 
    
    Name:Dawson Zorn
    Date: 2024-05-16
    Description: Building a dynamic image gallery using php to store the configuration for the gallery

****************/

$config = [
    //Saumya Rastogi  https://unsplash.com/@saumya04 allianz
    //Roméo A. https://unsplash.com/@gronemo kyoto
    //Hasmik Ghazaryan Olson https://unsplash.com/@find_something_pretty_everyday Austria
    //Ivana Cajina https://unsplash.com/@von_co space
    'gallery_name' => 'Dawsons Gallery',
 
    'unsplash_categories' => ['Soccer','Space','Europe','Japan', 'Philosophy', 'programming'],
 
    'local_images' => [
        'allianzarena.jpg' => ['photographer' => 'Saumya Rastogi','url' => 'https://unsplash.com/@saumya04'],
        'kyoto.jpg' => ['photographer' => 'Roméo A.', 'url' => 'https://unsplash.com/@gronemo'],
        'austria.jpg' => ['photographer' => 'Hasmik Ghazaryan Olson', 'url' => 'https://unsplash.com/@find_something_pretty_everyday'],
        'space.jpg' => ['photographer' => 'Ivana Cajina', 'url' => 'https://unsplash.com/@von_co']
        ]
 
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title> <?php
       echo $config['gallery_name'];
    ?></title>
</head>
<body>
    <h1>
        <?php
            echo $config['gallery_name'];
        ?>
    </h1>
    <div id="gallery"> 
        <?php
        foreach ($config['unsplash_categories'] as $category) { //for each to iterate through each category in array
            echo "<h2>{$category}</h2>";
            echo "<img src='https://source.unsplash.com/300x200/?{$category}' alt='{$category} Unsplash Image'>";
        }
        ?>
    </div>
    <div id="large-images">
        <h1>
            <?php
                echo count($config['local_images']);
            ?>
            Large Images
        </h1>
            
            <?php foreach($config['local_images'] as $key => $value): ?> 
                <img src="./images/<?php echo $key; ?>" alt="<?php echo ($key); ?> Image">
                <h3 class="photographer">
                    <a href="<?php echo $value['url']; ?>" ><?php echo $value['photographer']; ?></a>
                </h3>
            <?php endforeach; ?>
    </div>
</body>
</html>