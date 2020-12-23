<footer class="container-fluid shadow bg-light border-top pt-3 pb-3">

<div class="container">
    <div class="row p-3 p-md-5">
        <div class="col-12 text-center">
            <h2>Contáctanos</h2>
            <p>Si tienes cualquier duda contáctanos para darte asistencia.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4 p-3 text-center">
            <h5 style="font-size: 32px;"><i class="far fa-map"></i></h5>
            <p>
                <b>Dirección</b><br>
                Col. San José del Jaral,<br>
                Atizapán de Zaragoza,<br>
                Edo de México, C.P.52924
            </p>
        </div>

        <div class="col-12 col-md-4 p-3 text-center">
            <h5 style="font-size: 32px;"><i class="far fa-envelope-open"></i></h5>
            <p>
                <b>Correo</b><br>
                info@panta.com.mx
            </p>
        </div>

        <div class="col-12 col-md-4 p-3 text-center">
            <h5 style="font-size: 32px;"><i class="fas fa-mobile-alt"></i></h5>
            <p>
                <b>Whatsapp</b><br>
                55.1832.7451
            </p>
        </div>
    </div>
</div>

</footer>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>




<?php 
        // $word = "index";
        // $mystring = $_SERVER['REQUEST_URI'];
         
        if(  $_SERVER['REQUEST_URI'] == "/index.php" | $_SERVER['REQUEST_URI'] == "/" | $_SERVER['REQUEST_URI'] == "" ){
?>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function () { scrollFunction() };
var portada = document.getElementById("portada");
var primerbloque = document.getElementById("primerbloque");


function scrollFunction() {
    
    if (document.body.scrollTop < 10) {
        portada.classList.add('portada-scroll');
        primerbloque.classList.add('aumentar-margen');
    }
    
    
    if (document.documentElement.scrollTop < 10) {
        portada.classList.remove('portada-scroll');
        primerbloque.classList.remove('aumentar-margen');
    }

}
</script>
<?php } ?>


</body>
</html>