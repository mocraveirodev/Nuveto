    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
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