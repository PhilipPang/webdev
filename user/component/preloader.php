

    <div id="preloader">
        <img src= "http://localhost/user/images/logo.png" id="loadinglogo">
        <img src= "http://localhost/user/images/loading2.gif" id=thegif>
        <img src= "http://localhost/user/images/loading.gif" id="loadinggif">
    </div>

    <style>
        #loading{
            position:absolute;
            border:1px solid;
            background-color: white;
            width:1920px;
            height:1080px;
            top:100px;
            left: 500px;
        }

        #loadinggif{
            position: absolute;
            width: 500px;
        }

        #preloader{
            background-color: #ffffff;
            position:absolute;
            height: 100%;
            width:100%;
            margin-top: 100px;
            margin-left: 200px;
            z-index: 100;
            display: block;
            animation: fadeIn 0.1s;
        }

        #loadinglogo{
            position: absolute;
            top:250px;
            left:500px;
        }

        #loadinggif{
            position: absolute;
            width:500px;
            top:500px;
            left:600px;
        }

        #thegif{
            position: absolute;
            top:300px;
            left: 650px;
        }

        @keyframes fadeIn {
            0% { opacity: 0.5; }
            100% { opacity: 1; }
        }
    </style>

    <script>
        function loading(){
        let loading= document.getElementById("preloader");

        window.addEventListener("load", setTimeout(function(){
            loading.style.transform="translateX(2500px)";
            loading.style.transitionDuration= "2s";
            }, 2000));

        window.addEventListener("load",setTimeout(function(){
            loading.style.display="none";
            }, 5000));
        }

        loading()
    </script>
