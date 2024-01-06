<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JoeMama So...</title>

    <style>
        body{
            background-color: #494d5f;
            overflow-x:hidden;
            overflow-y:hidden;
            text-align: center;
            margin: 0px !important;
        }
        .top{
            height: 30vh;
            width: 100vw;
            display: flex;
            
        }
        .img-box{
            flex-grow: 1;
        }
        .img-box img{
            height: 100%;
            /* width: 100%; */
        }
        .joke{
            height: 30vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000; 
        }
        .bottom{
            height: 30vh;
            width: 100vw;
            display: flex;

        }
        h1{
            color:yellow;
        }
    </style>

</head>

<body>
    <div class="main">
        <div class="top">
            <div class="img-box"><img src="{{ asset('images/meme1.gif') }}" alt="Your Image"></div>
            <div class="img-box"><img src="{{ asset('images/meme2.webp') }}" alt="Your Image"></div>
            <div class="img-box"><img src="{{ asset('images/meme3.gif') }}" alt="Your Image"></div>  
        </div>
        <div class="joke"><h1>{{ $joke }}</h1></div>
        <div class="bottom">
            <div class="img-box"><img src="{{ asset('images/meme4.gif') }}" alt="Your Image"></div>
            <div class="img-box"><img src="{{ asset('images/meme5.gif') }}" alt="Your Image"></div>
            <div class="img-box"><img src="{{ asset('images/meme6.gif') }}" alt="Your Image"></div> 
        </div>
    </div>
</body>
</html>