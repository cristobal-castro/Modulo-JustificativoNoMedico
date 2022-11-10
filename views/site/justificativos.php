<?php

/** @var yii\web\View $this */

$this->title = 'Formulario';
$this->params['breadcrumbs'][] = $this->title;
?>
<body>
    <h3>Mis justificativos (Estudiante) </h3>
                  <div class="summary">
                     <div style="display: flex; justify-content: flex-end">Viendo 1 - 3 de 3 resultados</div>
                  </div>
                  <table id="inscripcion-grid" class="alt">
                     <thead>
                        <tr>
                           <th><a class="asc" href="/sistemaiciui/ici/frontend/web/ing-civil-informatica-chi.php?r=solicitud%2Fadmin&amp;sort=-fecha_envio" data-sort="-fecha_envio">Fecha de envío</a></th>
                           <th><a href="/sistemaiciui/ici/frontend/web/ing-civil-informatica-chi.php?r=solicitud%2Fadmin&amp;sort=tipo_solicitud" data-sort="tipo_solicitud">Asignatura</a></th>
                           <th><a href="/sistemaiciui/ici/frontend/web/ing-civil-informatica-chi.php?r=solicitud%2Fadmin&amp;sort=tipo_solicitud" data-sort="tipo_solicitud">Docente</a></th>
                           <th><a href="/sistemaiciui/ici/frontend/web/ing-civil-informatica-chi.php?r=solicitud%2Fadmin&amp;sort=id_periodo" data-sort="id_periodo">Periodo</a></th>
                           <th><a href="/sistemaiciui/ici/frontend/web/ing-civil-informatica-chi.php?r=solicitud%2Fadmin&amp;sort=estado" data-sort="estado">Estado</a></th>
                           <th class="action-column">Acciones</th>
                        </tr>
                        <tr id="w0-filters" class="filters">
                           <td></td>
                           <td>&nbsp;</td>
                           <td></td>
                           <td>
                              <select id="solicitudsearch-id_periodo" class="form-control" name="SolicitudSearch[id_periodo]">
                                 <option value="">Todos los periodos</option>
                                 <option value="35">Periodo 2019-1</option>
                                 <option value="54">Periodo 2019-2</option>
                                 <option value="55">Periodo 2020-1</option>
                                 <option value="56">Periodo 2020-2</option>
                                 <option value="57">Periodo 2021-1</option>
                                 <option value="58">Periodo 2021-2</option>
                                 <option value="57">Periodo 2022-1</option>
                                 <option value="58">Periodo 2022-2</option>
                              </select>
                           </td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                        </tr>
                     </thead>
                     <tbody>
                        <tr  data-key="690">
                           <td>20/07/2021 17:30</td>
                           <td>Sistemas Operativos</td>
                           <td>FERNANDO SOTO</td>
                           <td>Periodo 2022-2</td>
                           <td><b style="color: red;" class="icon fa-close"> Rechazada</b></td>
                           <td class="action-field-lg">
                            <select class="acciones fa">
                                <option class="fa"> &#xf078; Acción </option>
                                <option class="fa"> &#xf06e; Ver detalle </option>
                                <option class="fa" disabled> &#xf1c1; Información adicional </option>
                             </select>
                           </td>
                        </tr>
                        <tr data-key="683">
                           <td>08/06/2021 12:05</td>
                           <td>Seguridad Informática</td>
                           <td>FERNANDO SOTO</td>
                           <td>Periodo 2022-1</td>
                           <td><b style="color: orangered" class="icon fas fa-clock"> En espera</b></td>
                           <td class="action-field-lg">
                              <select class="acciones fa" >
                                 <option class="fa"> &#xf078; Acción </option>
                                 <option class="fa"> &#xf06e; Ver detalle </option>
                                 <option class="fa"> &#xf1c1; Información adicional </option>
                              </select>
                           </td>
                        </tr>
                        <tr data-key="682">
                           <td>08/06/2021 10:46</td>
                           <td>Electivo NodeJs</td>
                           <td>FERNANDO SOTO</td>
                           <td>Periodo 2022-1</td>
                           <td><b style="color:#00d000" class="icon fa-check"> Aceptado</b></td>
                           <td class="action-field-lg">
                            <select class="acciones fa" >
                               <option class="fa"> &#xf078; Acción </option>
                               <option class="fa"> &#xf06e; Ver detalle </option>
                               <option class="fa" disabled> &#xf1c1; Información adicional </option>
                            </select>
                         </td>
                        </tr>
                     </tbody>
                  </table>
</body>