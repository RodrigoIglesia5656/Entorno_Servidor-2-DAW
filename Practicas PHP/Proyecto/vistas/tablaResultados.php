 <h3>Ficha del Evento Deportivo</h3>
 <div class="table-container">
     <table class="ficha-evento">
         <tr>
             <th>Campo</th>
             <th>Valor</th>
         </tr>
         <tr>
             <td>Nombre del Evento</td>
             <td><?= $nombreEvento; ?></td>
         </tr>
         <tr>
             <td>Fecha</td>
             <td><?= $fecha; ?></td>
         </tr>
         <tr>
             <td>Ubicación</td>
             <td><?= $ubicacion; ?></td>
         </tr>
         <tr>
             <td>Deportes</td>
             <td>
                 <?php
                    if (!empty($deportes)) {
                        $primero = true;
                        foreach ($deportes as $deporte) {
                            if (!$primero) {
                                echo ", ";
                            }
                            echo $deporte;
                            $primero = false;
                        }
                    }
                    ?>
             </td>
         </tr>

     </table>
 </div>
 </body>

 </html>