<?php
echo "
<h2>Base de Datos: Escuela</h2>
<div class='top-bar'>
  <div class='top-bar-left'>
    <ul class='dropdown menu' data-dropdown-menu>
      <li class='menu-text'>BD Escuela</li>
      <li>
        <a href='#'>Personas</a>
        <ul class='menu vertical'>
          <li><a href='listar1.php'>Listar</a></li>
          <li><a href='index.php'>Insertar</a></li>
          <li><a href='eliminar1.php'>Eliminar</a></li>
          <li><a href='consultar1.php'>Consultar por genero</a></li>
          <li><a href='modificar1.php'>Modificar</a></li>
        </ul>
      </li>
      <li>
        <a href='#'>Menu Ajax</a>
        <ul class='menu vertical'>
          <li><a href='#' id='op_concepto'>Concepto AJAX</a></li>
          <li><a href='#'id='op_desarrollador'>Desarrollador</a></li>
          <li><a href='#' id='op_sql'>Consulta SQL</a></li>
        </ul>
      </li>
      <li><a href='reportes.php'>Reportes Parametrizados</a></li>
    </ul>
  </div>
  <div class='top-bar-right'>
    <ul class='menu'>
      <li><input type='search' placeholder='Buscar persona' id='txtBuscar'></li>
      <li><button type='button' class='button' id='cmdBuscar'>Buscar</button></li>
    </ul>
  </div>
</div>
<hr>
<div class='reveal' id='Modal1' data-reveal>
  <div id='divres'></div>
  <button class='close-button' data-close aria-label='Close modal' type='button'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
";



?>