<?php include "cabecalho.php"; ?>
<style>
    div{
        /* border:1px solid; */
    }
    img{
        width: 250px;

    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12"> <img src="logo.svg" /> <center> Logo da Loja virtual - Compre aqui  </center>      </div>
    </div>
   <div class="row">
        <div class="col-md-2">
            Menu Lateral
            <ul>
                <li>Computador</li>
                <li>PLaca de video</li>
                <li>Video game</li>
                <li>HD</li>
                <li>Processador</li>
            </ul>
        </div>
        <div class="col-md-10">

            <?php for( $i = 0; $i < 10 ; $i++ ) {   ?>
                <div class="row">
                    <div class="col-md-3"> <h1> <?php echo $i; ?> </h1> </div>
                    <div class="col-md-3"> <img src="notebook.jpeg" /> </div>
                    <div class="col-md-3"> <img src="playstation5.jpg" /> </div>
                    <div class="col-md-3"> <img src="placa-video.jpeg" /> </div>
                </div>
            <?php }                                 ?>

          
           
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>