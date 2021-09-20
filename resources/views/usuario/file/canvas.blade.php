<!DOCTYPE html> 
<html> 
	<head>
    <title>jQuery UI Resizable : Defining the Size Limits</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/hot-sneaks/jquery-ui.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <style>
        #coach{text-align: center; width: 200px; border: 4px solid #eee;
        padding: 5px; float: left; margin: 10px;box-shadow:5px 5px 5px #888;}
        #coach{display: block; margin:auto}

        body {
            background: rgb(204,204,204); 
        }
        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] {  
            width: 21cm;
            height: 27.7cm; 
        }
        page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;  
        }
        @media print {
            body, page {
                margin: 0;
                box-shadow: 0;
            }
        }
        @import url("https://fonts.googleapis.com/css?family=Crimson+Text&display=swap");
        @import url("https://fonts.googleapis.com/css?family=Work+Sans&display=swap");
        body {
            background: #28305a;
            height: 100vh;
            margin: 0 20px;
        }
        .pie {
            -webkit-tap-highlight-color: transparent;
            background: #000;
            border-radius: 50%;
            box-shadow: 0 0 4px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            height: 400px;
            left: -200px;
            position: absolute;
            top: -200px;
            width: 400px;
            transform: translateX(-200px) translateY(-200px);
            transition: transform 300ms;
        }
        .pie-color:hover {
            opacity: 0.85;
        }
        .pie-color:active {
            opacity: 0.7;
        }
        .pie1 {
            clip-path: polygon(200px 200px, 344px 450px, 0 450px);
            transition-delay: 30ms;
        }
        .pie2 {
            clip-path: polygon(200px 200px, 344px 450px, 450px 344px);
            transition-delay: 60ms;
        }
        .pie3 {
            clip-path: polygon(200px 200px, 450px 0, 450px 344px);
            transition-delay: 90ms;
        }
        .pie-color {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }
        .pie-color1 {
            background: linear-gradient(135deg, #f12711, #f5af19);
            clip-path: polygon(200px 200px, 344px 450px, 0 450px);
        }
        .pie-color2 {
            background: linear-gradient(135deg, #444, #7e84f9);
            clip-path: polygon(200px 200px, 344px 450px, 450px 344px);
        }
        .pie-color3 {
            background: linear-gradient(135deg, #444, #b7e13f);
            clip-path: polygon(200px 200px, 450px 0, 450px 344px);
        }
        .card {
            left: 216px;
            position: absolute;
            top: 300px;
            width: 46px;
        }
        .discount {
            left: 288px;
            position: absolute;
            top: 258px;
            width: 46px;
        }
        .cart {
            left: 324px;
            position: absolute;
            top: 188px;
            width: 46px;
        }
        .menu {
            -webkit-tap-highlight-color: transparent;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 4px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            height: 200px;
            left: -100px;
            position: absolute;
            top: -100px;
            width: 200px;
        }
        .hamburger {
            cursor: pointer;
            height: 46px;
            left: 58%;
            position: relative;
            top: 58%;
            width: 46px;
        }
        .title {
            color: white;
            font-family: "Crimson Text", serif;
            font-size: 80px;
            line-height: 84px;
            margin-top: 60px;
            text-align: center;
        }
        .body {
            color: white;
            font-family: "Work Sans", sans-serif;
            font-size: 20px;
            justify-content: center;
            line-height: 28px;
            margin: 30px auto;
            max-width: 600px;
            text-align: center;
        }
        .hamburger path {
            transition: transform 300ms;
        }
        .hamburger path:nth-child(1) {
            transform-origin: 25% 29%;
        }
        .hamburger path:nth-child(2) {
            transform-origin: 50% 50%;
        }
        .hamburger path:nth-child(3) {
            transform-origin: 75% 72%;
        }
        .hamburger path:nth-child(4) {
            transform-origin: 75% 29%;
        }
        .hamburger path:nth-child(5) {
            transform-origin: 25% 72%;
        }
        .active .pie {
            transform: translateX(0) translateY(0);
        }
        .active .hamburger path:nth-child(1) {
            transform: rotate(45deg);
        }
        .active .hamburger path:nth-child(2) {
            transform: scaleX(0);
        }
        .active .hamburger path:nth-child(3) {
            transform: rotate(45deg);
        }
        .active .hamburger path:nth-child(4) {
            transform: rotate(-45deg);
        }
        .active .hamburger path:nth-child(5) {
            transform: rotate(-45deg);
        }

    </style>
</head> 
<body>
    <page id="PaginaCentral" size="A4" layout="landscape">
        <div id="coach2" class="ui-widget">
            <img id="coach" src="{{ $img }}" />
        </div>
    </page>
    <!-- <div class="btn-horientacion"><a><img width="90%" src="https://icon-library.com/images/landscape-icon-png/landscape-icon-png-23.jpg"></a></div>
    <div class="btn-regresar"><a href="{{ URL::previous() }}"><img width="90%" src="https://img1.freepng.es/20180215/lbq/kisspng-button-clip-art-return-cliparts-5a85c02cae21f6.3476191015187149247133.jpg"></a></div>
    <div class="btn-descargar"><a><img width="90%" src="https://img1.freepng.es/20180319/qrw/kisspng-portable-document-format-computer-icons-icon-pdf-hd-5ab050f9522e21.0383417015215045053366.jpg"></a></div> -->
    <input type="hidden" id="opcion" value="0">
    <div class="pie pie1" onclick="document.body.classList.remove('active')">
    <div class="pie-color pie-color1">
        <svg class="card" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
            <path
                d="M99.98 27.38c0-7.597-6.18-13.777-13.78-13.777H13.78C6.18 13.603 0 19.783 0 27.38v45.842C0 80.82 6.18 87 13.778 87H86.2c7.6 0 13.8-6.18 13.8-13.778v-45.84zm-92.678 0c0-3.555 2.9-6.433 6.455-6.433H86.18c3.555 0 6.455 2.878 6.455 6.434v4.213H7.302zM86.18 79.657H13.757c-3.556 0-6.455-2.9-6.455-6.434V44.185h85.312v29.037c.02 3.556-2.88 6.434-6.434 6.434zM23.852 60.82s-3.725-.973-4.466-1.122c-.783-.19-.867-.635-.867-1.015v-.424c0-.255.02-.51.23-.72.128-.127.32-.212.53-.212h3.47c.298 0 .51.064.827.91l.042.127c.04.17.19.445.72.445.316 0 .824-.085 1.438-.254.57-.17 1.058-.635 1.29-1.207.234-.593.17-1.228-.19-1.757-.846-1.334-2.264-2.2-3.936-2.37 0-.128-.02-.297-.02-.51 0-.845-.87-1.523-1.97-1.523s-1.968.657-1.968 1.524c0 .19 0 .36-.02.487-2.668.128-4.572 2.117-4.572 4.848v.804c0 2.137 1.333 4 3.238 4.508l5.354 1.46c.254.064.423.318.423.635v.466c0 .19 0 .7-.232.932-.127.148-.318.21-.487.21h-3.47c-.276 0-.403-.083-.488-.19-.233-.232-.317-.613-.38-.867-.064-.19-.234-.444-.763-.444-.338 0-.846.086-1.418.234-.572.148-1.038.592-1.292 1.164-.254.592-.19 1.248.127 1.8.868 1.46 2.307 2.348 3.916 2.432v.487c0 .445.233.847.636 1.143.36.254.825.38 1.333.38h.02c1.1 0 1.968-.676 1.968-1.523v-.508c2.603-.212 4.593-2.37 4.593-5.1v-.636c.022-2.2-1.48-4.085-3.618-4.614zm7.704 10.54H83.98v-4.19H31.555z"
            />
            </svg>
    </div>
    </div>
    <div class="pie pie2" onclick="document.body.classList.remove('active')">
    <a href="{{ URL::previous() }}" class="pie-color pie-color2">
        <svg class="discount" xmlns="http://www.w3.org/2000/svg" viewBox="-375 377 100 100" width="100" height="100">
            <path
                fill="#fff"
                d="M-311.266 425.624c-.106 0-.212 0-.34.022-1.057.127-1.755.783-2.115 2.01-.318 1.1-.36 2.645-.128 4.57.19 1.567.783 6.307 3.407 6.307.105 0 .21 0 .317-.02 1.947-.234 2.603-2.37 2.074-6.667-.507-4.317-1.502-6.222-3.216-6.222zm-28.166-9.967c-.106 0-.212 0-.34.02-.634.086-1.12.34-1.5.827-.784 1.016-1.038 3.005-.7 5.756.508 4.21 1.61 6.242 3.365 6.242.106 0 .19 0 .296-.02 1.12-.128 1.798-.868 2.094-2.265.297-1.397.148-3.153 0-4.36-.508-4.274-1.502-6.2-3.216-6.2zm63.654 10.306l-12.887-7.13c-1.037-.573-1.397-1.885-.783-2.9l7.597-12.613c.613-1.016.147-1.84-1.06-1.82l-14.728.275c-1.185.02-2.137-.93-2.116-2.116l.275-14.73c.022-1.206-.782-1.67-1.82-1.058l-12.61 7.576c-1.017.614-2.33.275-2.9-.783l-7.132-12.887c-.57-1.037-1.524-1.037-2.095 0l-7.13 12.887c-.573 1.037-1.885 1.397-2.9.783l-12.634-7.597c-1.017-.613-1.842-.147-1.82 1.06l.274 14.728c.02 1.185-.93 2.137-2.116 2.116l-14.73-.275c-1.184-.022-1.67.782-1.057 1.82l7.598 12.61c.614 1.017.275 2.33-.783 2.9l-12.887 7.132c-1.037.57-1.037 1.524 0 2.095l12.887 7.13c1.037.573 1.397 1.885.783 2.9l-7.597 12.634c-.613 1.017-.147 1.842 1.06 1.82l14.728-.274c1.185-.02 2.137.93 2.116 2.116l-.275 14.73c-.022 1.205.782 1.67 1.82 1.057l12.61-7.598c1.017-.614 2.33-.275 2.9.783l7.132 12.887c.57 1.037 1.524 1.037 2.095 0l7.13-12.887c.573-1.037 1.885-1.397 2.9-.783l12.613 7.597c1.016.613 1.84.147 1.82-1.06l-.275-14.728c-.02-1.185.93-2.137 2.116-2.116l14.73.275c1.185.022 1.67-.782 1.058-1.82l-7.597-12.61c-.613-1.017-.274-2.33.784-2.9l12.887-7.132c1.06-.592 1.06-1.524.022-2.095zm-62.067 8.19c-.402.042-.783.063-1.185.063-1.905 0-3.577-.592-5.08-1.82-3.11-2.54-3.935-6.2-4.337-9.46-.487-4.04.148-7.28 1.947-9.65 1.523-1.967 3.66-3.173 6.137-3.47.36-.042.72-.063 1.1-.063 2.73 0 5.185 1.27 6.9 3.555 1.395 1.82 2.22 4.17 2.623 7.407.444 3.64 0 6.772-1.29 9.078-1.398 2.476-3.747 3.98-6.815 4.36zm8.634 10.686c-.192.486-.72 1.82-2.308 2.01-.084.02-.17.02-.275.02-1.12 0-2.412-.655-2.582-2.115-.084-.72.148-1.355.36-1.82l13.184-33.817c.36-.762.803-1.777 2.263-1.947.106-.02.212-.02.318-.02 1.122 0 2.307.677 2.498 2.18.084.656-.064 1.08-.233 1.502zm26.345-5.08c-1.396 2.498-3.767 4.02-6.856 4.402-.424.043-.826.085-1.23.085-1.882 0-3.533-.593-5.056-1.82-3.11-2.518-3.936-6.222-4.338-9.502-.487-4.042.17-7.3 1.946-9.65 1.545-1.968 3.66-3.174 6.137-3.47.36-.042.74-.063 1.12-.063 1.948 0 4.74.613 6.92 3.555 1.398 1.82 2.223 4.19 2.625 7.406.444 3.598 0 6.75-1.27 9.058z"
            />
            </svg>
        </a>
    </div>
    <div class="pie pie3" onclick="document.body.classList.remove('active')">
    <div class="pie-color pie-color3 btn-horientacion">
        <svg class="cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
            <path
                d="M98.993 14.537c-.816-.966-2.018-1.503-3.263-1.503H25.698c-.064 0-.107.022-.172.022l-9.36-9.404c-.816-.794-1.91-1.245-3.05-1.245H4.295C1.932 2.407 0 4.34 0 6.7c0 2.363 1.932 4.295 4.294 4.295h7.063l7.73 7.728 9.574 56.893c.344 2.06 2.148 3.585 4.23 3.585h50.388c2.36 0 4.293-1.93 4.293-4.293 0-2.36-1.93-4.293-4.292-4.293h-46.76l-1.588-9.447h54.423c2.104 0 3.908-1.524 4.23-3.606l6.354-39.545c.215-1.267-.128-2.533-.944-3.478zm-60.177 38.02H33.49L31.56 41.03h7.256zm0-20.115H30.1L28.273 21.6h10.542zm16.38 20.116h-7.793V41.03h7.793zm0-20.116h-7.793V21.6h7.793zm16.38 20.116h-7.792V41.03h7.793zm0-20.116h-7.792V21.6h7.793zm14.128 20.116h-5.54V41.03h7.386zm3.22-20.116h-8.78V21.6h10.52zm-47.618 50.13c-4.143 0-7.514 3.37-7.514 7.514 0 4.143 3.37 7.514 7.514 7.514s7.514-3.37 7.514-7.514-3.37-7.514-7.514-7.514zm34.758 0c-4.143 0-7.514 3.37-7.514 7.514 0 4.143 3.37 7.514 7.514 7.514 4.165 0 7.514-3.37 7.514-7.514s-3.35-7.514-7.514-7.514z"
            />
            </svg>
    </div>
    </div>
    <div class="menu" onclick="document.body.classList.toggle('active')">
        <svg onclick="imprimir_pdf()" class="hamburger" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
            <g
            fill="none"
            stroke="#000"
            stroke-width="7.999"
            stroke-linecap="round"
            >
            <path d="M 55,26.000284 L 24.056276,25.999716" />
            <path d="M 24.056276,49.999716 L 75.943724,50.000284" />
            <path d="M 45,73.999716 L 75.943724,74.000284" />
            <path d="M 75.943724,26.000284 L 45,25.999716" />
            <path d="M 24.056276,73.999716 L 55,74.000284" />
            </g>
        </svg>
    </div>
</body>
    <script>
        var horientacion;
        $(document).ready(function() {
            var resizeConfiguration = {
                alsoResize: "#coach",
                // maxWidth: 1400,
                // maxHeight: 800,
                // minWidth: 300,
                containment: "#PaginaCentral"
                // minHeight: 300
            };
            $("#coach").resizable(resizeConfiguration);    
            $("#coach2").draggable();
        });

        $(".btn-horientacion").off("click").click(function () {
            if($("#opcion").val() == 0){
                $("#PaginaCentral").removeAttr('layout');
                $("#opcion").attr('value',1);
                horientacion = 'portrait';
            } else {
                $("#PaginaCentral").attr('layout','landscape');
                $("#opcion").attr('value',0);
                horientacion = 'landscape';
            }
        });

        function imprimir_pdf() {
            const element = document.getElementById("coach");
            var opt = {
                margin:       1,
                filename: 'recorte_lamina.pdf',
                jsPDF:        { unit: 'in', format: 'letter', orientation: horientacion }
            };
            html2pdf().set(opt).from(element).save();
        }
    </script>
</html>