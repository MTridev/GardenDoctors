<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garden Doctors</title>

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>


<!-- We made the view called header from header.blade.php -->

    {{ View:: make('header')}}  
    @yield('content')

<!-- We made the view called header from footer.blade.php -->

    {{ View:: make('footer')}}  



<style>


    .navbar-default{
        width: 100%;
    }

    .navbar-collapse{
        margin-top: 2%;
    }

    .navbar-header{

        width: 10%;

    }

    .customized-login{
        height: 500px;
        padding-top: 110px;
    }
    img.carousel-img{
        height: 350px !important;
    }
    .customized-product{
        height: 650px;
    }

    .slider-text{
        background-color: #469E2A;
        opacity: 0.8;
    }

    .trending-img{
        height: 100px;
        width: 150px;

    }

    .trending-images{

        float: left;

        border-radius: 25px;
        border: 2px solid #469E2A;
        padding: 20px;
        width: 200px;
        height: 200px;

        margin-right: 2%;
        margin-bottom: 2%;
        height: 250px;
        width: 200px;

    }

    .trending-block{
        margin: 1%;


    }

    .img-productDetail{
        height: 300px !important;
        outline-color:#469E2A;;
        outline-style: outset;

    }
    .search-box{ 
        width: 450px !important;
    }
    .checkoutBtn{
        margin-left: 40%;
    }
    .Cart-Header, .bottomBtnCheckout , .bookServiceHeader{
        margin-left: 40%;
    }
    .footer{
        bottom: -10% !important;
        width:100%;
        position: sticky !important;

    }

    .homePageFooterpadding{
        padding-bottom: 25%;

    }
    .DetailpageFooterpadding{
        padding-bottom: 15%;

    }

    .Footerpadding{
        padding-bottom: 35%;
    }

    .searchpageFooterpadding{
        padding-bottom: 36%;

    }

    .aboutUspageFooterpadding{
        padding-bottom: 8%;

    }

</style>


</body>
</html>