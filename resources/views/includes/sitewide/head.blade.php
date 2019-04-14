<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset ('favicon.ico') }}" />
	<title>3DFS Software-Defined Electricity</title>
    <!-- Bootstrap core CSS -->
	<link href="{{ asset ('css/app.css') }}" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{ asset ('css/styles.css') }}" rel="stylesheet">
    
    @if(Route::current()->getName() == 'about')
 		<link href="{{ asset('css/about.css') }}" media="all" rel="stylesheet" type="text/css"/>
	@endif
    
  </head>  
  <body>  