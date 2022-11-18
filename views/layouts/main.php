<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
?>
<?php $this->beginPage() ?>
<head>
    <?php echo $this->head() ?>
</head>
<?php echo $this->beginBody() ?>
<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <header id="header" class="headerburdeo">
                <a href="home" class="logo"><img src="images/logo_ici.png" alt="Volver a ICI"></a>
                <div class="logo2">Ingeniería Civil en Informática</div>
                <div class="icons">
                  <?php if(Yii::$app->user->isGuest){
                        echo Html::tag('a', Html::tag('a','Entrar',['href'=>'/site/login']));?>
                  <?php }else{?>
                     <a href="#" style="float:left; font-size:56px; top: -7px;" class="icon fa-user-circle"><span class="label">Instagram</span></a>
                     <div style="padding-left: 4.5em; padding-top: 0.6em;">
                           <?php echo Html::tag('h3', 'Hola '.Yii::$app->user->identity->Nombre.'');?> 
                           <p><?php echo Yii::$app->user->identity->Cargo; ?> | <a href="">Perfil</a> | <a href='/logout'  data-method="post">Salir</a> </p>
                     </div>
                  <?php }; ?>
                </div>
            </header>
            <crumb class="rastro"><?= Breadcrumbs::widget([
                  'links'=>isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
               ])
               ?>
            <!-- <a href="#" class="icon fa-home"></a> <a href="#" class="icon fa-chevron-left"></a>--> </crumb> 
            
            <div class="inner">
                <header class="main">
                  <h1><?= Html::encode($this->title) ?></h1>
                </header>
                <section>
                    <?php echo $content ?>
                <!-- Aca debe estar la informacion -->
                </section>
            </div>
        </div>
        <div id="sidebar">
            <div class="inner">
               <!-- Menu -->
               <nav id="menu">
                  <header class="major">
                     <h2>Sistema de Gestión de Carrera</h2>
                  </header>
                  <?php if(!Yii::$app->user->isGuest){?>
                  <ul>
                     <li><a href="#">Inicio</a></li>
                     <li>
                        <span class="opener">Inscripción actividades</span>
                        <ul>
                           <li><a href="#"> Inscribir Actividad</a></li>
                           <li><a href="#"> Mis Actividades</a></li>
                           <li><a href="#"> Nueva Actividad</a></li>
                           <li><a href="#"> Gestionar</a></li>
                        </ul>
                     </li>
                     <li>
                        <span class="opener">Preinscripcións Asignatura</span>
                        <ul>
                           <li><a href="#"> Preinscribir Asignatura</a></li>
                           <li><a href="#"> Mis Preinscripciones</a></li>
                           <li><a href="#"> Nueva Preinscripción</a></li>
                           <li><a href="#"> Gestionar</a></li>
                        </ul>
                     </li>
                     <li>
                        <span class="opener">Justificativo</span>
                        <ul>
                           <li><a href="/formulario"> Crear Justificativo</a></li>
                           <li><a href="/justificativo"> Mis Justificativos</a></li>
                           <li><a> Historial</a></li>
                        </ul>
                     </li>
                     <li>
                        <span class="opener">Solicitudes</span>
                        <ul>
                           <li><a href="#"> Nueva Solicitud</a></li>
                           <li><a href="#"> Mis Solicitudes</a></li>
                           <li><a href="#"> Gestionar</a></li>
                        </ul>
                     </li>
                     <li>
                        <span class="opener">Períodos</span>
                        <ul>
                           <li><a href="#"> Ver Periodos</a></li>
                           <li><a href="#"> Nuevo Periodo</a></li>
                           <li><a href="#"> Gestionar</a></li>
                        </ul>
                     </li>
                     <li>
                        <span class="opener">Información del Sitio</span>
                        <ul>
                           <li><a href="#"> Nueva Información</a></li>
                           <li><a href="#"> Administrar Información</a></li>
                           <li><a href="#"> Cambiar Orden</a></li>
                        </ul>
                     </li>
                     <li>
                        <span class="opener">Administración</span>
                        <ul>
                           <li><a href="#"> Cambiar de Rol</a></li>
                           <li><a href="#"> Administrar Roles</a></li>
                           <li><a href="#"> Administrar Noticias</a></li>
                           <li><a href="#"> Mantenedor de Documentos</a></li>
                           <li><a href="#"> Parámetros Generales</a></li>
                        </ul>
                     </li>
                     <li><a href="#">Documentos</a></li>
                  </ul>
                  <?php }; ?>
               </nav>
               <!-- Seccion -->
               <!-- Seccion -->
               <section>
                  <header class="major">
                     <h2>Contacto administrador</h2>
                  </header>
                  <!--<p>hohoho ho hohoho ho ho</p>-->
                  <ul class="contact">
                     <li class="fa-envelope-o"><a href="#">administrador@ubiobio.cl</a></li>
                     <li class="fa-phone">(000) 000-0000</li>
                  </ul>
               </section>
               <!-- Footer -->
               <footer class="footer" id="foot">
                  <img src="images/logo_ubb.png" width="235" height="70" alt="UBB"> 
                  <p class="copyright">Desarrollado por DCCTI & UDSw</p>
               </footer>
            </div>
         </div>
    </div>
    <?php echo $this->endBody()?>
</body>
</html>

<?php $this->endPage() ?>


