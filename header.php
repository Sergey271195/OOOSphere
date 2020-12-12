<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/images/logo.png" type="image/png">
    <title></title>
    <?php wp_head();?>
</head>

<body>
<!-- HEADER -->
<header class = 'header'>
    <div class = 'background-main-section-div'></div>
    
        <div class = 'mycontainer' id = 'header-container'>
            
            <!-- LOGO -->
            <div class = 'logo-main'>
                <img src = '<?php bloginfo('template_url');?>/images/logo.png' alt = 'logo'/>
            </div>

            <div class = 'anchor-link-div'>
                <a href = '#about' class = 'anchor-link'>О школе</a>
                <img class = 'header-button-image' src = '<?php bloginfo('template_url');?>/images/activebutton.png'/>
            </div>
            <div class = 'anchor-link-div'>
                <a href = '#coaches' class = 'anchor-link'>Тренеры</a>
                <img class = 'header-button-image' src = '<?php bloginfo('template_url');?>/images/activebutton.png'/>
            </div>
            <div class = 'anchor-link-div'>
                <a href = '#schedule' class = 'anchor-link' id = 'schedule-link'>Расписание</a>
                <img class = 'header-button-image' src = '<?php bloginfo('template_url');?>/images/activebutton.png'/>
            </div>
            <div class = 'anchor-link-div'>
                <a href = '#reviews' class = 'anchor-link'>Отзывы</a>
                <img class = 'header-button-image' src = '<?php bloginfo('template_url');?>/images/activebutton.png'/>
            </div>
            <div class = 'anchor-link-div'>
                <a href = '#contacts' class = 'anchor-link'>Контакты</a>
                <img class = 'header-button-image' src = '<?php bloginfo('template_url');?>/images/activebutton.png'/>
            </div>

            <div class = 'header-phone-container'>
            <?php 
                $number = get_field('телефон_в_хедере');
                $replaced = preg_replace( '/[^0-9]/', '',  $number );
                if (substr($replaced, 0, 1) === '8') {
                    $formatted_number = '+7'.substr($replaced, 0, 1);
                } else {
                    $formatted_number = '+'.$replaced;
                }
            ?>
                <a href = 'https://wa.me/<?php echo $formatted_number ?>' target = 'blank_'><img src = '<?php bloginfo('template_url');?>/images/whatsapp.png' alt = 'whatsapp'/></a>
                <a href = 'viber://chat?number=<?php echo $formatted_number ?>' style = 'margin-left: 15px;'><img src = '<?php bloginfo('template_url');?>/images/viber.png' alt = 'viber'/></a>
                <a class = 'header-phone-link' href = 'tel:<?php echo $formatted_number ?>'>
                    <b><?php echo get_field('телефон_в_хедере'); ?></b>
                </a>
            </div>
        </div>
</header>