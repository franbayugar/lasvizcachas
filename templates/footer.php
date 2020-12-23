</main> <!-- fin del contenedor principal -->

<!-- FOOTER -->
<?php
if (!isset($login)) {
    if (isset($_SESSION['user'])) {
        echo '        <div class="text-center mt-3"><a href="../logout">Salir</a></div>
    ';
    } else {
        echo '        <div class="text-center mt-3"><a href="../loginPage">Ingresar</a></div>
    ';
    }
}
?>
<footer id="footer" class="p-4">
    <div class="container text-center">
        <p>Agro Las Vizcachas S. A.</p>
        <p>Playa de camiones - Parque Industrial de Tres Arroyos</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
</script>

</html>