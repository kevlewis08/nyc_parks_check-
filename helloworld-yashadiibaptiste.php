<html>
<head>
<title>Hello, World Page</title>
</head>
<body>
This is yashadii baptiste page


<?php
$response = file_get_contents('https://api.imgflip.com/get_memes');
$json_response = json_decode($response);
$img_name = $json_response->data->memes[2]->name; // Extract the third image
$img_url = $json_response->data->memes[2]->url;
print_r($json_response);
?>


<div><img src="<?php echo $img_url?>" /></div>
<p><?php echo $img_name?></p>



</body>
</html>
