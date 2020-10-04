<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
            body {
                flex-direction: column;
                display: flex;
                font-family: 'Nunito';
                margin: 0;
                padding: 0;
                letter-spacing: 1px;
                justify-content: space-between;
                min-height: 100vh;
            }
            
            .footer {
                width: 100%;
                height:100px;
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
                color:white;
                background-color:black;
                margin-top:40px;
            }
            .title {
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
                width:100%;
            }
            .main-content {
                width:100%;
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
            }
            .text {
                padding:0 16px;
                border-left: 6px solid #7B8898;
                width:60%;
                color: #7B8898;
                font-size: 1.1875em;
                font-weight: 400;
                font-style: normal;
                font-family: "Mercury SSm A", "Mercury SSm B", Georgia, Times, "Times New Roman", "Microsoft YaHei New", "Microsoft Yahei", "微软雅黑", 宋体, SimSun, STXihei, "华文细黑", serif;
                line-height: 1.5;
                animation: fadeInLorem 1000ms linear
            }

            
        </style>
    </head>
    <body>
       <div style="height: 60px;width: 100%;display: flex;justify-content: center;align-items: center;align-content:center;margin-bottom:20px;border-bottom: 1px solid #d4d2d2;text-align:center;">
       <span>HEADER</span>
       </div>

       <div class="content">
            <h1 class="title">{{$page->caption}}</h1>
            <div class="main-content">
            <?php echo($page->content) ?>
            </div>
       </div>

        <div class="footer">
                FOOTER
        </div>
    </body>
</html>
