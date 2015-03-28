<html>
    <head>
        <title>Time</title>
        <link rel="stylesheet" href="./libs/pickadate/lib/themes/default.css" id="theme_base">
        <link rel="stylesheet" href="./libs/pickadate/lib/themes/default.date.css" id="theme_date">
        <link rel="stylesheet" href="./libs/pickadate/lib/themes/default.time.css" id="theme_time">

        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./libs/pickadate/lib/picker.js"></script>
        <script src="./libs/pickadate/lib/picker.date.js"></script>
        <script src="./libs/pickadate/lib/picker.time.js"></script>
       
       
    </head>
    <body>
       
        <input class="datepicker" type="text" placeholder="Try me">
        <input class="timepicker" type="text" placeholder="Try me">
        
        <script type="text/javascript">
            $('.datepicker').pickadate();
            $('.timepicker').pickatime();
        </script>
     
    </body>
</html>
