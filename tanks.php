<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/tanks.css">
    </head>
    <body>
        <div id="game-over-overlay">
        </div>

        <div id="game-over">
            <h1>Игра окончена</h1>
            <button id="play-again">Играть снова</button>
        </div>

        <div class="wrapper">
            <div id="instructions">
                <div>
                    движение <span class="key">стрелками</span> или <span class="key">wasd</span>
                </div>
                <div>
                    стрелять <span class="key">пробелом</span>
                </div>
            </div>
            <div class="statistic">
                <div id="level">Уровень <span id="level-cnt"></span></div>
                <div id="score">Очки <span id="score-cnt"></span></div>
            </div>

        </div>

        <script type="text/javascript" src="js/resources.js"></script>
        <script type="text/javascript" src="js/input.js"></script>
        <script type="text/javascript" src="js/sprite.js"></script>
        <script type="text/javascript" src="js/logic.js"></script>
    </body>
</html>