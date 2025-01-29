<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            wp_title('|', true, 'right'); //About
            bloginfo('name'); //IDM250
        ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <nav>
            <div class="nav">
                <div class="logo">
                    <h1>Fei Young</h1>
                </div>
                <div class="menu"> 
                    <button>WORK</button>
                    <button>PLAY</button>
                    <button>RESUME</button>
                    <button>ABOUT</button>
                </div>
            </div>
        </nav>
    </header>
