<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <?php wp_head()?> 
    
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="header-wrapper">
            <div class="header-section">
                <a href="/">Home</a>
            </div>
        </div>
    </header>

    <div class="menu">
        <div class="menu-wrapper">
            <div class="search-field">
                <div class="input-line">
                    <input type="text">
                </div>
                <div class="submit-btn">
                    <button type="submit">ok</button>
                </div>
            </div>
    
            <div class="sort-field">
                <a href="#">sort by relevance</a>
                <a href="#">sort by new</a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="post">
            <div class="img-container">
                <img src="media/ex1.jpg" alt="">
            </div>
            <div class="text">
                <div class="tags">
                    #издач_история
                </div>
                <div class="body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque optio ipsa autem pariatur quae eveniet placeat distinctio vero quis amet accusamus soluta rerum, atque magni nesciunt sunt aut veritatis illum?
                </div>
                <div class="bottom-container">
                    <div class="date">
                        06 Jun 11:01:46
                    </div>
                    <div class="likes">
                        likes: 150
                    </div>
                </div>
            </div>
        </div>

        <div class="post">
            <div class="img-container">
                <img src="media/ex2.jpg" alt="">
            </div>
            <div class="text">
                <div class="tags">
                    #издач_из_жизни
                </div>
                <div class="body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque optio ipsa autem pariatur quae eveniet placeat distinctio vero quis amet accusamus soluta rerum, atque magni nesciunt sunt aut veritatis illum?
                </div>
            </div>
            <div class="bottom-container">
                <div class="date">
                    06 Jun 11:30:12
                </div>
                <div class="likes">
                    likes: 42
                </div>
            </div>
        </div>
    </div>
</body>
</html>