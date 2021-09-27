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
    </style>
</head> 
<body>
    <page id="PaginaCentral" size="A4" layout="landscape">
        <div id="coach2" class="ui-widget">
            <img id="coach" src="{{ $img }}" />
        </div>
    </page>
    <input type="hidden" id="opcion" value="0">
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