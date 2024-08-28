<meta charset="UTF-8">

<!-- Titulo e Icone - HEAD -->
<title>Guilherme Art Custom</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="shortcut icon" href="img/icon.png" type="image/x-icon"> -->

<!-- CDN's -->

<!-- Include from the CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.4/html2canvas.min.js"></script>

<!-- Bootstrap 4 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Fontawesome 5 -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- GoogleFonts - OpenSans -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!-- Folha de Estilo(CSS) - Direta -->

<style type="text/css">

body {
	min-width: 100%;
	background-image: url("assets/img/background_tools.png") !important;
	background-size: cover;
	margin: 0;
	/* background-color: #ccc; */
	padding-top: 1em;
}

.jumbotron{
	background-color: #fff !important;
}


* {
	font-family: 'Open Sans', sans-serif;
}

input {
  padding: 0.25rem 0.5rem;
  font-size: 1rem;
}

.navbar-brand{
	font-size:24px;
	color:white; 
	margin: 0 5% 0% 10%;
	float:left;
}

.input-data{
	margin: 0% 5% 0 0;
}

i{
	margin-right: 3%;
}

ul{
	margin-top: 2%;
	/*line-height:250%; */
	list-style-type: none;
}

ul li{
	margin-top: 3%;
}

a:link, a:link:active, a:visited, a:visited:active {
	color: #000;
	text-decoration: none;
}

tbody tr {
	text-align: center;
}

.form-row{
	margin-top: 1%;
}

@media screen and (min-width: 850px) and (max-width: 995px) {
	img{
		width: 90%;
		height: 90%;
		margin-left:0%;
		float:left;
	}

	.titlelogo{
		width: 100px;
	}

}

@media screen and (max-width: 440px) and (max-width: 738px), (max-width: 800px) {

	body{
		min-width: 100%;
		background-image: url("assets/img/background.jpg") !important;
	}

	img{
		width: 90%;
		height: 90%;
		margin-left:5%;
	}

	.row, .navbar {   
		flex-direction: column;
	}

	.navbar-brand{
		margin: 0 1% 0% 5%;
		float:left;
	}

	.input-data{
		margin: 0% 5% 0 5%;
	}

	i {
		margin-right: 3%;
	}
	
}

</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 