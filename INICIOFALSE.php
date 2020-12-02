<!DOCTYPE html>
<html lang="en">
<head>
    <title>INICIO F</title>
    <link rel="stylesheet" href="../Css/Crud-I.css">
    <meta charset="utf-8">
    <link rel="icon" type="imagenes/jpg" href="../Imagenes/loool.jpg"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=3.0 minimum-scale=1.0>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
<Style type="text/css">
@import url('https://fonts.googleapis.com/css?family=McLaren&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap' rel='stylesheet');
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap' rel='stylesheet');

*{
    box-sizing: border-box;
}
body{
    font-family: 'Balsamiq Sans', cursive;
    margin: 0;
}
/*-------------------Estilo Base----------*/
img{
    display: block;
    width: 100%;
    max-width: 100%;
}
h1 h2 h3 h4{
    margin: 0;
}
.container{
    width: 100%;
    margin: auto;
}
.container--flex {
    display: flex;
    flex-wrap: wrap;
    align-items: center;

}
.colum{
    width: 100%;    
}
/*-------------------Estilo Header----------*/

.main-header {
    width: 100%;

}
.logo {
    font-size: 1.8em;
    color: black;
    padding: 10px;
    font-family: 'Ubuntu', sans-serif;

}
.main-header__contactInfo__text {
    background: rgba(112, 111, 111, 0.548);
    padding: 10px;
    margin: 0;
    color: black;

}
/*-------------------Estilo Menú----------*/

.main-nav {
    width: 100%;
    display: inline-block;
    z-index: 2000;
    padding: 10px;
    text-shadow: rgba(112, 111, 111, 0.329);
}

.main-nav li {
    float: left;
    background-color: (112, 111, 111, 0.548);
    color: white;
    text-decoration: none;

}
.main-nav  li ul li a {
    position: relative;
    display: block;
    padding: 8px 0;
    width: 110px;
    color: black;
    border-radius: 3px;
    font-size: 1.2em;
    text-align: center;
    cursor: pointer;

}
.main-nav li ul li a:hover {
    display: block;
    color: white;
    background: rgba(0,0,0,0.2);
    animation: 1s ms 1;
    font-size: 1em;
}

.despleg {
    display: inline-block;
    position: absolute;
    background: rgba(43, 41, 41, 0.596);
    height: 390px;
    width: 120px;
    display: none;
}  
.desple li a {

   color:#fff;
   font-family: 'Balsamiq Sans', cursive;
   text-decoration: none;
}


#menu li:hover .despleg {
    display: block;
    padding: 8px 4px;
    color:#fff;
    font-family: 'Balsamiq Sans', cursive;
    text-decoration: none;
    list-style: none;
    
}

.barra {

    color:rgb(112, 111, 111);
    padding: 15px 0 0 0;

}

@keyframes ms {
    0%{
        opacity: 0;
        transform: scale(1.6);
    }
}

.icon-menu{
    display: inline-block;
    color: white;
    border:1px solid white;
    border-radius: 3px;
    width: 40%;
    height: 40px;
    line-height: 42px;
    text-align: center;
    cursor: pointer;
    font-size: 1.5em;
}

.menu {

    position: absolute;
    top: 100px;
    left: 0;
    width: 100%;
    background: rgba(0,0,0, .85);
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
}
.menu__link{
    display: block;
    padding: 20px;
    color: white;
    text-decoration: none;
}
.menu__link:hover{
    background: #DE423A;
}
.menu__link--select{
    background: #DE423A;

}

/*-------------------Estilo Banner----------*/

.banner{
    margin-top: -60px;
    position: relative;

}

.banner:before{
    content: '';
    position: absolute;
    width: 100%;
    height:100%;
    background: rgba (0,0,0,0.7);
    z-index: 1000;
    top: 0;
}

.banner__img{
    width: 100%;
    height: 200%;
    object-fit: cover;
}

.banner__content{
    width: 100%;
    color: white;
    text-align: center;
    position: absolute;
    z-index: 1500;
    top:50%;
    transform: translateX(-50) translateY(-50%);
    font-size:1.5em;
    font-weight: bold;
}

/*-------------------Estilos Principales----------*/

.group--color .container{
    background: #DE423A;
    color: white;
    padding: 10px;
    text-align: center;
    display: inline-block;
}

.margin__title{
    margin: 15px;
    font-size: 1.8em;
    font-family: 'Ubuntu', sans-serif;
    font-weight: 100;
}
.main__txt{
    padding: 20px;
    text-align: center;
}

.colum__title{
    font-size: 1.2em;
 


}
.main__about__description .colum:nth-child(2){
    padding: 10px;
}
.btn {
    display: inline-block;
    text-align: center;
    text-decoration: none;
    width: 130px;
    background: #DE423A;
    color: white;
    padding: 15px;
    border-radius: 3px;
}
.group__title{
    font-family: 'Ubuntu', sans-serif;
    text-align: center;
    font-weight: 100;
    font-size: 1.8em;
    margin: 30px;

}
.today-special .colum{
    margin-bottom: 30px;
    text-align: center;
}

.today-special__img{
    margin: auto;
    max-width: 350px;
}

.today-special__title {
    text-align: center;
    font-size: 1.3em;
    padding-top: 10px;
    padding-bottom: 20px;

}
.today-special__price {
    font-size: 1.5em;
    color: #DE423A;
    font-width: bold;
}

.articulo {
    margin: 40px;
    padding: 35px;
    background: #F4F2F2;
}
/*-------------------Estilo footer----------*/

footer {
    width:100%;
    background: #444242; 
    color: white;
    padding-top: 20px;
    padding-left:10px;
    padding:10px;
}
.container-footer-all {
    width:100%;
    max-width:1200px;
    padding: 30px;
}

.container-body {
    display: flex;
    justify-content: space-between;
}
.colum1 {
    max-width:400px;
 }
    .colum1 h1 {
    font-size:22px;
    }
        .colum1 p {
            font-size:14px;
            color: #fff;
            margin-top: 20px;
        }

.colum2 {
    max-width:400px;
}
.colum2 h1 {
    font-size:22px;
    }
        .row {
            margin-top: 20px;
            display: flex;
        }
            .row img {
                width: 36px;
                height: 37px;
            }
                .row label {
                    margin-top:10px;
                    margin-left:20px;
                    color: #fff;
                }
                .row label a {
                    margin-top:10px;
                    margin-left:20px;
                    color: #fff;
                }

.colum3 {
    max-width:400px;
}
    .colum3 h1 {
        font-size:20px;
    }
        .row2{
            margin-top:20px;
        }
            .row2 img {
                width: 36px;
                height: 36px;
            }
                .row2 label {
                    margin-top:20px;
                    margin-left: 20px;
                    max-width: 140px;
                }

.container-footer {
     width:100%;
     background: #1F1E1E;
     padding: 10px;
}

.footer {
    max-width:1200px;
    display: flex;
    margin: auto;
    justify-content: space-between;
}

.copyright {
    color: white;
}
.copyright a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}
.information a {
    text-decoration: none;
    color: white;
}

@media screen and (max-width: 1100px){
    .container-body {
        flex-wrap: wrap;
    }
    .colum2, .colum3 {
        margin-top: 40px;
    }
}

/*-------------------EstiloS Responsive----------*/

@media screen and (min-width:480px){
.logo {
    color: white;
}
.main-header__contactInfoc {
    text-align: right;
}
.main {
    padding-bottom: 20px;
}
.banner {
    margin-top: -200px;
    z-index: -1000; 
}
.colum--50 {
    width: 49%;
}
.colum--50-25 {
    width:49%;
}

.main__about__description .colum:ntb-child(2) {
    padding-left: 10px;
    font-size: .9em;
}
.main__about__description .btn {
    margin: 0;
}
.today-special .colum {
    border: 5px solid #ddd;
    padding: 5px;
}
.today-special__img {
    height: 280px;
    object-fit: cover;
}

}

@media screen and (min-width: 1024px) {
.container {
    width: 1000px;
}
.logo {
    font-size: 2em;
    padding: 0; 
}

.main-header__contactInfo__text {
    padding-right: 5;
    font-size: 1.15em;
}
.main-nav {
    padding: 0;

}
.banner__content {
    font-size: 2.5em;
}
.icon-menu {
    display: none;
}
.menu {

    height: auto;
    width: auto;
}
.menu__link{
    padding: 20px;
}
.group--color .container{
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 15px;
}
}

/*-----------------------Estilo-Tabla-----------------*/

#tablas-container {
    width: 1000px;
    margin: 40px auto;

}
table{
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
    font-family:"arial";
}
th ,td {
   
    padding: 12px;
}
thead {
    background-color: #C15E5E; 
    border-bottom: solid 5px rgba(247, 78, 72, 0.507);
    color:white;
    font-family:"arial";
}
tr:hover td {
    background-color: #7a1523a9;
    color: white;
    
}
/*-------------------Estilo-Botoom-----------------*/

#man-con{
    padding-top: 200px;
    text-align: center;
}

.btn-black {
    color: white;
    display: inline-block;
}

/*-------------------Estilo-Title..-----------------*/

h4 {
    display: block;
    position: relative;
    background-color: #E0B9B9;
    color: black;
}

h4::after h4::before {
    content:'';
    position: absolute;
    width: 120px;
    height: 3px;
    background-color: currentColor;
    top: 5.8em;
}

h4::after 
h4::before {
    left: -140px;
}

h4::after{
    right: -140px;
}


</Style>
</head>

<body>  
    <header class="main-header">
        <div class="container container--flex">
        <div class="logo-container colum colum--50">            
            <h1 class=logo> Optica Osiris </h1>
        </div>
        <div class="main-header__contactInfoc colum colum--50  ">
            <p class="main-header__contactInfo__text">
                <span class="icon-text"> Trabajamos Por Tu Visión--Con La Mejor Calidad</span>
            </p>
        </div>
    </header> 
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="" class="menu__link menu__link--select">Inicio</a></li>
                <li class="barra"> | </li>
                <li class="menu__item"><a href="" class="menu__link">Quienes Somos</a></li>
                <li class="barra"> | </li>
                <li class="menu__item"><a href="" class="menu__link">Ofertas</a></li>
                <li class="barra"> | </li>
                <li class="menu__item"><a href="" class="menu__link">Productos</a></li>
                <li class="barra"> | </li>
                <li class="menu__item"><a href="https://www.civico.com/lugar/optica-osiris-bogota/" class="menu__link">Ubicanos</a></li><li class="barra"> | </li>
                <li class="menu__item"><a href="" class="menu__link">Contactanos</a></li>
                <li class="barra"> | </li>
                <li class="menu__item"><a href="#" class="menu__link">Gestión</a>
                    <ul class="despleg">
                        <li><a href="Consultar Usuario.php">Usuario</a></li>
                        <li><a href="Consultar Paciente.php">Paciente</a></li>
                        <li><a href="Consultar Medico.php">Medico</a></li>
                        <li><a href="Consultar Agenda.php">Agenda</a></li>
                        <li><a href="Registrar Historia Clinica.php">Historia Clinica</a></li>
                        <li><a href="Consultar Examen.php">Examen</a></li>
                        <li><a href="Consultar Consulta Medica.php">Consulta Medica</a></li>
                        <li><a href="Consultar Diagnostico.php">Diagnóstico</a></li>
                        
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

    <section class="banner">
        <img src="Imagenes/Té.gif" alt="" class="banner__img">
        <div class="banner__content"> Todo lo Que haz Buscado en Gafas </div>   
    </section>
    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title"> Bienvenido a Optica Osiris</h2>
                <p class="main__txt">Estilo Y Diseño a tu Disposición, Con lo Más reciente en Gafas, Para el Cuidado de Tus Ojos.
                </p>
            </div>
        </section>

        <section class="group main__about__description">
           <div class="container container--flex">
                <div class=" colum colum--50">
                    <img src="Imagenes/Gafas0.5.jpg" alt="">
                </div>
                <div class=" colum colum--50">
                    <h3 class="colum__title">Expertos En La Industria</h3>
                   <p class="colum__txt"> Los ópticos suministran y venden gafas y lentes de contacto bajo una receta prescrita por un optometrista (óptico oftálmico). Dan consejos a los clientes sobre el tipo de gafas que pueda satisfacer mejor sus necesidades. </p>
                    <a href="https://www.instagram.com/optica_osiris_torres/" class="btn btn--contact"> Contactos </a>
                </div>
            </div>
        </section>

        <section class="group today-special">
            <h2 class="group__title">Lo Más Reciente</h2>
            <div class="container container--flex">
                <div class="colum colum--50-25">
                    <img src="Imagenes/Gafas0.1.jpg" alt="" class="today-special__img">
                    <div class="today-special__title">Gafas </div>
                    <div class="today-special__price">$100.000</div>
                </div>
                <div class="colum colum--50-25">
                    <img src="Imagenes/Fondo15.png" alt="" class="today-special__img">
                    <div class="today-special__title">Gafas </div>
                    <div class="today-special__price">$100.000</div>
                </div>
                <div class="colum colum--50-25">
                    <img src="Imagenes/Fondo12.png" alt="" class="today-special__img">
                    <div class="today-special__title">Gafas </div>
                    <div class="today-special__price">$100.000</div>
                </div>
                <div class="colum colum--50-25">
                    <img src="Imagenes/Gafas0.2.png" alt="" class="today-special__img">
                    <div class="today-special__title">Gafas </div>
                    <div class="today-special__price">$100.000</div>
                </div>
                <div class="colum colum--50-25">
                    <img src="Imagenes/Fondo6.0.png" alt="" class="today-special__img">
                    <div class="today-special__title">Gafas </div>
                    <div class="today-special__price">$100.000</div>
                </div>
                 <div class="colum colum--50-25">
                    <img src="Imagenes/Gafas0.0.png" alt="" class="today-special__img">
                    <div class="today-special__title">Gafas </div>
                    <div class="today-special__price">$100.000</div>
                </div>

            </div>
            
        </section>
    </main>

	<article class="articulo">
		<h3>
			Optica Osiris
		</h3>
		<p> </p>
	</article>

<footer>
    <div class="container-footer-all">

        <div class="container-body">
            <div class="colum1">
                <h1>Más Información De la Compañia</h1>
                <p>"Óptica especializada en el cuidado de la salud visual. Con enfoque en la prevención, diagnóstico, tratamiento o corrección de los posibles problemas visuales de nuestros pacientes y con la posibilidad de remisión a diferentes servicios según sea la necesidad."</p>
            </div>
            <div class="colum2">
                <h1>Redes Sociales</h1>
                <div class="row">
                    <img src="Imagenes/icon_Facebook.png">
                    <label> 
                        <a href="https://www.facebook.com/%C3%93pticas-Osiris-Torres-266868784059388/?ref=page_internal">
                         Siguenos en Facebook 
                        </a>
                    </label>
                </div>
                <div class="row">
                    <img src="Imagenes/icon-Instagram.png">
                    <label>
                        <a href="https://www.instagram.com/optica_osiris_torres/">
                         Siguenos en Instagram
                        </a>
                    </label>
                         
                </div>

                <div class="row">
                    <img src="Imagenes/icon-whatsapp.png">
                    <label>Contactanos Por: <br>+54 310 8039012 </label>

                </div>
                
            </div>
            <div class="colum3">
                <h1>Informacion Contactos</h1>

                <div class="row2">
                    <img src="Imagenes/icono_casa.jpg">
                    <label> Colombia-Bogotá D.C<br>
                            Dirección: Cl. 8b ##80d-24.</label>
                </div>
                <div class="row2">
                    <img src="Imagenes/icono-Móvil.jpg">
                    <label> +54 310 8039012</label>
                </div>
                <div class="row2">
                    <img src="Imagenes/icono-Email.jpg">
                    <label> @gmail.com</label>
                </div>
            </div>
        </div>
    </div>   

        <div class="container-footer">
            <div class="foter">
                <div class="copyright">
                    DATOS &copy 2020 | <a href="">Magtimus</a>
                </div>
            
                <div class="information">
                     <a href=""> Información Compañia </a> |
                     <a href=""> Privacidad y Politica </a> |
                     <a href=""> Terminos y Condiciones </a> |
                </div>

            </div>
        </div>

</footer>

</body>

</html>




</body>
</html>