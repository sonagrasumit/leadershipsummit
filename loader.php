<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://raw.githubusercontent.com/maxwellito/vivus/master/src/vivus.js"></script>
    <script src="js/vivus.js"></script>
    <script src="min/jquery-1.10.2.min.js"></script>   	
    <script src="https://raw.githubusercontent.com/maxwellito/vivus/master/src/pathformer.js"></script>
    <script src="js/pathformer.js"></script>

    <title>Leadership Summit</title>
    
    <style>
    #logo_div{
        width:1000px;
        margin:auto auto;
    }
    @media only screen and (max-width:1000px){
        #logo_div{
            width:600px;
        }
    }@media only screen and (max-width:600px){
        #logo_div{
            width:350px;
        }
    }
    </style>

</head>
<body>
    
<div id="logo_div"></div>

<script>

    var brainviv = new 
        Vivus('logo_div',{type:'sync',duration: 150, file:'images/LSlogo.svg'},mycallback);
    function mycallback(){
        brainviv
        .stop()
        .reset()
        .destroy();
    }
   
   


</script>

</body>
</html>