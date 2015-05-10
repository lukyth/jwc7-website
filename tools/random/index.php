<!-- Kawin T. Metsiritrakul create at 30/04/2015 | enjoy !! -->    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>JWC7 | Random Group</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            @font-face {
              font-family: 'fontt';
              src: url('font/2554 ed_crub Artnarong.ttf')  format('truetype');
            }
            body {
                font-family: fontt;
                background: url('pic/bg.png') no-repeat black;
                overflow: hidden;
            }
            .paper{
                width:1093px;
                height: 654px;
                background: url('pic/paper.png') no-repeat;
                position: absolute;
                top: 120px;
            }
            .white{
                background: url('pic/paper-white.png') no-repeat;
                opacity: 0;
            }
            .red{
                background: url('pic/paper-red.png') no-repeat;
                opacity: 0;
            }
            .black{
                background: url('pic/paper-black.png') no-repeat;
                opacity: 0;
            }
            .yellow{
                background: url('pic/paper-yellow.png') no-repeat;
                opacity: 0;
            }
            .green{
                background: url('pic/paper-green.png') no-repeat;
                opacity: 0;
            }
            .gray{
                background: url('pic/paper-gray.png') no-repeat;
                opacity: 0;
            }
            .purple{
                background: url('pic/paper-purple.png') no-repeat;
                opacity: 0;
            }
            .glass{
                width: 272px;
                height: 296px;
                background: url('pic/glass.png') no-repeat;
                background-size: 272px 296px;
                position: absolute;
                top: 87px;
                left: 430px;
            }
            .glass > img{
                position: absolute;
                top: 0px;
                left: -33px;    
                display: none;
                -webkit-animation: soul 1.5s infinite; /* Chrome, Safari, Opera */
                animation: soul 1.5s infinite;
            }

            /* Chrome, Safari, Opera */
            @-webkit-keyframes soul {
                0% {top: 0px;}
                50% {top: -20px;}
                100% {top: 0px;}
            }

            /* The animation code */
            @keyframes soul {
                0% {top: 0px;}
                50% {top: -20px;}
                100% {top: 0px;}
            }

            .hand{                
                width: 896px;
                height: 874px;
            }
            .hand-left{
                background: url('pic/hand-left.png') no-repeat;
                background-size: 896px 874px;
                position: absolute;
                top: -900px;
                left: -550px;
            }
            .hand-right{
                background: url('pic/hand-right.png') no-repeat;
                background-size: 896px 874px;
                position: absolute;
                top: -900px;
                left: 800px;
            }
            .container{
                width: 1093px;
                height: 768px;
                position: absolute;
                top: 0px;
                left: 50%;
                margin-left: -542px;
            }
            .btnn{
                width: 402px;
                height: 141px;
                background: url('pic/btn.png') no-repeat;
                position: absolute;
                left: 50%;
                top: 370px;
                margin-left: -190px;
                z-index: 1000;
                cursor: pointer;
            }
            .btnn:hover{
                background: url('pic/btn-point.png') no-repeat;
            }
            .flash{
                width: 100%;
                height: 100%;
                background: white;
                display: none;
                position: absolute;
                top: 0px;
                left: 0px;
                z-index: 1100;
            }
            .roll-cen{
                background: url('pic/roll-cen.png') no-repeat;
                width: 10px;
                height: 124px;
                position: absolute;
                left: 550px;
                top: 560px;
                display: none;

                font-size: 48px;
                text-align: center;
            }
            .roll-name{
                margin-top: 30px;
            }
            .roll-left{
                background: url('pic/roll-left.png') no-repeat;
                width: 24px;
                height: 162px;
                position: absolute;
                left: 526px;
                top: 542px;
                display: none;
            }
            .roll-right{
                background: url('pic/roll-right.png') no-repeat;
                width: 24px;
                height: 162px;
                position: absolute;
                left: 545px;
                top: 542px;
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="container" style="background-color">
            <div class="paper"></div>

            <div class="paper white"></div>
            <div class="paper yellow"></div>
            <div class="paper red"></div>
            <div class="paper gray"></div>
            <div class="paper purple"></div>
            <div class="paper black"></div>
            <div class="paper green"></div>

            <div class="glass">
                <img class="soul1" src="pic/soul-1.png">
                <img class="soul2" src="pic/soul-2.png">
                <img class="soul3" src="pic/soul-3.png">
            </div>
            <div class="hand hand-left"></div>
            <div class="hand hand-right"></div>
            <div class="btnn" id="ran-btn" onclick="startRandom();"></div>
            <div class="roll-cen">
                <label class="roll-name" style="display:none" id="roll-name"></label>
            </div>
            <div class="roll-left"></div>
            <div class="roll-right"></div>
        </div>
        <audio id="music">
          <source src="sound/sound.mp3" type="audio/mpeg">
        </audio>
        <audio id="music2">
          <source src="sound/sound2.mp3" type="audio/mpeg">
        </audio>
        <audio id="boom">
          <source src="sound/boom.mp3" type="audio/mpeg">
        </audio>
        <div class="flash"></div>
    </body>
    <script src="js/jquery-1.11.2.js"></script>
    <script>
        var gl = [[87,650],[87,200],[-50,230],[-50,430],[-50,630],[300,150],[300,430],[300,700]];
        var hl = [[-700,-130],[-700,-580],[-837,-550],[-837,-350],[-837,-150],[-487,-630],[-487,-350],[-487,-80]];
        var hr = [[-675,820],[-675,370],[-812,400],[-812,600],[-812,800],[-462,320],[-462,600],[-462,870]];

        var glLast = [[87,650,'gray','มุกดาหารหมอกมัว'],[87,200,'black','หมอกเมฆนิลกาฬ'],[-50,230,'white','เพชรดีมณีแดง'],[-50,430,'green','เขียวใสแสงมรกต'],[-50,630,'red','แดงแก่ก่ำโกเมนเอก'],[300,150,'yellow','เหลืองใสสดบุษราคัม'],[300,430,'purple','แดงสลัวเพทาย']];
        var hlLast = [[-700,-130,'gray'],[-700,-580,'black'],[-837,-550,'white'],[-837,-350,'green'],[-837,-150,'red'],[-487,-630,'yellow'],[-487,-350,'purple']];
        var hrLast = [[-675,820,'gray'],[-675,370,'black'],[-812,400,'white'],[-812,600,'green'],[-812,800,'red'],[-462,320,'yellow'],[-462,600,'purple']];

        var hasChoose = [];
        var counter20 = 0;
        var counter5 = 0;
        var counter3 = 0;
        var maxCount = 20;

        var curran = -1;
        var musicnum = "";

        function showName(realname){
            document.getElementById('roll-name').innerHTML = realname;
            $('.roll-left').fadeIn(200);
            $('.roll-right').fadeIn(200);
            $('.roll-cen').fadeIn(200);
            $('.roll-left').animate({'left' : '-=250'},800);
            $('.roll-right').animate({'left' : '+=250'},800);
            $('.roll-cen').animate({'left' : '-=250', width:'500px'},{ duration : 800,
                    complete: function(){
                        $('.roll-name').fadeIn(200);
                        $('.roll-cen').animate({'left' : '-=0'},{ duration : 3800,
                            complete: function(){
                                 $('.roll-name').fadeOut(500);
                                $('.roll-left').fadeOut(500);
                                $('.roll-right').fadeOut(500);
                                $('.roll-cen').fadeOut(500);
                                $('.roll-left').animate({'left' : '+=250'},800);
                                $('.roll-right').animate({'left' : '-=250'},800);
                                $('.roll-cen').animate({'left' : '+=250', width:'10px'},1);
                            }
                        });
                    }
                });
        }

        function startRandom(){
            if(glLast.length > 0){
                $('.btnn').fadeOut(500,function(){                        
                    $('.glass').animate({top:'87px', left:'430px'},1400);
                    $('.hand-left').animate({top:'-700px',left:'-350px'},1000)
                                   .animate({top:'+=0'},400);
                    $('.hand-right').animate({top:'+=0'},400)
                                    .animate({top:'-675px',left:'600px'},{
                                        duration : 1000,
                                        complete : function(){musicnum
                                            if(glLast.length <= 3) musicnum = "2";
                                            document.getElementById('music'+musicnum).volume = 1;
                                            document.getElementById('music'+musicnum).currentTime=0;
                                            document.getElementById('music'+musicnum).play();
                                            $('.flash').fadeIn(200, function(){
                                                if(glLast.length > 3) $('.soul1').css({'display':'block'});
                                                else $('.soul2').css({'display':'block'});
                                                $('.flash').fadeOut(200,function(){
                                                    $('.flash').animate({top:'+=0'},{
                                                        duration : 2000,
                                                        complete : function(){
                                                            callRan1();
                                                        }
                                                    });
                                                });         
                                           });
                                        }
                                    });
                });
            }
        }

        function callRan1(){
            if(glLast.length < 3){
                maxCount = 10;
            }
            var looper1 = setInterval(function(){ 
                counter20++;
                ran1();

                if (counter20 >= maxCount)
                {
                    clearInterval(looper1);
                    counter20 = 0;
                    callRan2();
                }

            }, 100);
        }

        function callRan2(){
            var looper2 = setInterval(function(){ 
                counter5++;
                ran2();

                if (counter5 >= 5)
                {
                    clearInterval(looper2);
                    counter5 = 0;
                    callRan3();
                }

            }, 200);
        }

        function callRan3(){
            var looper3 = setInterval(function(){ 
                counter3++;
                ran1();

                if (counter3 >= 3)
                {
                    clearInterval(looper3);
                    counter3 = 0;
                    callLast();
                }

            }, 300);
        }

        function ranLastNum1(){
            var ran = Math.floor((Math.random() * glLast.length));
            $('.glass').animate({top:glLast[ran][0]+'px',left:glLast[ran][1]+'px'},5000);
            $('.hand-left').animate({top:hlLast[ran][0]+'px',left:hlLast[ran][1]+'px'},5000);
            $('.hand-right').animate({top:hrLast[ran][0]+'px',left:hrLast[ran][1]+'px'},{
                duration : 5000,
                complete: function(){
                       console.log('ran = '+glLast[ran][2]);
                       saveFile(ran);
                       flash(glLast[ran][2]+"",glLast[ran][3]+"");
                       glLast.splice(ran, 1);
                       hlLast.splice(ran, 1);
                       hrLast.splice(ran, 1);
                    }
                });
        }

        function ranLastNum2(){
            var ran = Math.floor((Math.random() * glLast.length));
            $('.glass').animate({top:glLast[ran][0]+'px',left:glLast[ran][1]+'px'},250);
            $('.hand-left').animate({top:hlLast[ran][0]+'px',left:hlLast[ran][1]+'px'},250);
            $('.hand-right').animate({top:hrLast[ran][0]+'px',left:hrLast[ran][1]+'px'},{
                duration : 250,
                complete: function(){
                       console.log('ran = '+glLast[ran][2]);
                       saveFile(ran);                       
                       flash(glLast[ran][2]+"",glLast[ran][3]+"");
                       glLast.splice(ran, 1);
                       hlLast.splice(ran, 1);
                       hrLast.splice(ran, 1);
                    }
                });
        }

        function flash(name,realname){

            var music =  document.getElementById('music'+musicnum);
            $('#music'+musicnum).animate({'top':'+=0'},{ duration: 80, complete : function() { music.volume = 0.8;
                $('#music'+musicnum).animate({'top':'+=0'},{ duration: 80, complete : function() { music.volume = 0.5;
                    $('#music'+musicnum).animate({'top':'+=0'},{ duration: 80, complete : function() { music.volume = 0.3;
                        $('#music'+musicnum).animate({'top':'+=0'},{ duration: 80, complete : function() { music.volume = 0.01;} } );
                    } } );
                } } );
            } } );

           document.getElementById('boom').currentTime=0;
           document.getElementById('boom').play();


           $('.flash').fadeIn(200, function(){
                $('.'+name).css({'opacity':'1'});
                if(glLast.length > 2) $('.soul1').css({'display':'none'});
                else $('.soul2').css({'display':'none'});
                console.log('name = '+name);
                $('.flash').fadeOut(1000);
                showName(realname);
                $('.glass').animate({top:'+=0'},3200)
                           .animate({top:'87px', left:'430px'},1400);
                $('.hand-left').animate({top:'+=0'},3200)
                               .animate({top:'-700px',left:'-350px'},1400)
                               .animate({top:'-900px',left:'-550px'},1400)
                $('.hand-right').animate({top:'+=0'},3200)
                                .animate({top:'-675px',left:'600px'},1400)
                                .animate({top:'-900px',left:'800px'},{ duration : 1400,
                                    complete : function(){
                                        if(glLast.length >= 1) $('.btnn').fadeIn(500);
                                    }
                                });

           });
        }

        function callLast(){
            var ranlast = Math.floor((Math.random() * 2));
            console.log(ranlast);
            if(ranlast == 0) {
                var ran = Math.floor((Math.random() * 8));
                $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},1500);
                $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},1500);
                $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},1500);

                $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},1000);
                $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},1000);
                $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},1000);

                curran = ran;

                ran = Math.floor((Math.random() * 8));
                if(curran != ran){
                    $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},3500);
                    $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},3500);
                    $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},3500);
                }
                else{
                    ran = Math.floor((Math.random() * 8));
                }

                $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},1000);
                $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},1000);
                $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},1000);

                ranLastNum1();
            }
            else{
                var ran = Math.floor((Math.random() * 8));
                $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},700);
                $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},700);
                $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},700);

                $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},1000);
                $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},1000);
                $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},1000);

                ranLastNum2();
            }
        }

        function ran1(){
            var ran = Math.floor((Math.random() * 8));
            if(ran != curran){
                $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},500);
                $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},500);
                $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},500);
                curran = ran;
            }
        }

        function ran2(){
            var ran = Math.floor((Math.random() * 8));
            if(ran != curran){
                $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},900);
                $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},900);
                $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},900);
                curran = ran;
            }
        }

        function ran3(){
            var ran = Math.floor((Math.random() * 8));
            if(ran != curran){
                $('.glass').animate({top:gl[ran][0]+'px',left:gl[ran][1]+'px'},1000);
                $('.hand-left').animate({top:hl[ran][0]+'px',left:hl[ran][1]+'px'},1000);
                $('.hand-right').animate({top:hr[ran][0]+'px',left:hr[ran][1]+'px'},1000);
            }
        }

        function saveFile(ran){
            console.log('write');
        }

    </script>