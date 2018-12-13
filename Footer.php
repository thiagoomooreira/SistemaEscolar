<?php include("Url.php");?>
<!-- Jquery e Script -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo("$Url")?>/SistemaEscolar/materialize/js/materialize.min.js"></script>
<script src="<?php echo("$Url")?>/SistemaEscolar/Arquivos/js/script.js"></script>

<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
</body>

</html>