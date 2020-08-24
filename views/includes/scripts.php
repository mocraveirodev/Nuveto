    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- SMOOOTH SCROLL -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
    <!-- MODAIS -->
    <?php
        if(isset($_SESSION['mailresult'])){
            if($_SESSION['mailresult'] != ""){
                echo "<script>$('#modalOk').modal('show');</script>";
                unset($_SESSION['mailresult']);
            }
        }

        if(isset($_SESSION['ErrorInfo'])){
            if($_SESSION['ErrorInfo'] != ""){
                echo "<script>$('#modalErro').modal('show');</script>";
                unset($_SESSION['ErrorInfo']);
            }
        }

        if(isset($_SESSION['abreLogin'])){
            if($_SESSION['abreLogin'] == "login"){
                echo "<script>$('#modalLogin').modal('show');</script>";
                unset($_SESSION['abreLogin']);
                unset($_SESSION['errologin']);
            }
        }
    ?>