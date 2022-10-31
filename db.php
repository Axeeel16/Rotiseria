<?php
function mostrar_tabla_productos_con_paginacion(){

 $Enlace=new mysqli("localhost","root","","rotiseria");
 
 $registro = $Enlace->query("Select * from productos")
				or die ($Enlace->error);

// maximo por pagina
$limit = 4;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM productos LIMIT $offset, $limit";
$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php
 
echo "<div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-1 bg-dark'>";
echo "<table class='table table-dark table-striped'>        
          <th>#</th>
		  <th>Nombre</th>
		  <th>Descripcion</th>
		  <th>Precio</th>
		  <th colspan='5'>Cantidad</th>
      

        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 
	$id_producto=$fila['id_producto']; 
	$nombre=$fila['nombre']; 
	$descripcion=$fila['descripcion']; 
	$precio=$fila['precio'];

   


  echo "<tr>
           <td>$id_producto</td>
           <td>$nombre</td>
           <td>$descripcion</td>
           <td>$precio</td>
     
         
          
           <td> 
															<div  class='' align='center'>
																 <a href='verdetalle.php?valor=$id_producto' class='' >
																 <img width='23px' src='imagenes/eye.png' title='Vista'>
																</a>
															</div>
														</td>
														
									<td class='/*IMAGEN*/'> 
															<div  class='eye' align='center'>
																 <a href='Inserta_y_Muestra_Foto.php?valor=$id_producto' class='' >
																	<img width='18px' src='imagenes/usuario.png' title='Foto de Perfil'>
																</a>
															</div>
														</td>
														
								
								
								<td class='/*MODIFICAR*/'>
																		<div  class='trash' align='center'>
																			<a href='mod_usuar.php?valor=$id_producto' class='link_m'>
																				<img width='13px' src='imagenes/lapiz.png' title='Modificar'>
																			</a>
																		</div>
																</td>
								<td class='/*ELIMINAR*/'>
																		<div class='trash'>
																			<a href='baja_usuar.php?valor=$id_producto' class='eliminar_registro'>	
																				<img width='13px' src='imagenes/trash.png' title='Eliminar'>
																			</a>
																		</div>
																	</td>
																	
								<td class='/*Codigo de barras*/'>
																		<div class='trash'>
																			<a href='prueba.php?valor=$id_producto' class=''>
																				<img width='26px' height='12px' src='imagenes/barcode.png' title='Generar Codigo de Barras'>																				
																			</a>
																		</div>
																	</td>
			
        </tr>";
}
echo "</tbody>  ";
?>

   </table>

	
</div>
<br>
	<div class="hola">
		<nav aria-label="Page navigation example">
		  <ul class="pagination ">
			<?php
			  
				 $totalPag = ceil($total/$limit);
				 $links = array();
				 for( $i=1; $i<=$totalPag ; $i++)
				 {
					$links[] = "<li class='page-item'> <a href=\"?pag=$i\" class='page-link'>$i</a></li>";
				 }
				 echo implode("", $links);
			  ?>
		  </ul>
		</nav>
	</div>
   <?php
}