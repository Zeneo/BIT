<?php include_once 'params.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php $data['page_title'];?></title>
		<link rel="stylesheet" href="../lab6/styles/css/base.css"/>
		<link rel="icon" href="../lab6/styles/img/icon.ico" type="image/x-icon"/>
		<link rel="stylesheet" href="../lab6/styles/css/main.css"/>
	</head>
	<body>
		<div class="slider">
            <ul class="sliderCnt">
                <?php foreach($data['ads'] as $key => $ad) { ?>
                    <li styles="background-image: <?php echo $ad['img_url'];?>">
                        <a href="<?php echo $ad['url'];?>">
                            <img alt="<?php echo $ad['img_alt'];?>" src="<?php echo $ad['img_url'];?>"/>
                            <h2><?php echo $ad['title'];?></h2>
                            <span class="cont"><?php echo $ad['desc'];?></span>
                        </a>
                    </li>
                <?php } ?>
            </ul>  
		</div>
        <div class="mainMenuCnt">
            <div class="mainMenuCnt2">
                <ul class="mainMenu">
                    <?php foreach($data['menu'] as $item) { ?>
                        <li><a href="<?php echo $item['url'];?>"><?php echo $item['title'];?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
	    <style>
		
	    </style>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
	</body>
</html>

