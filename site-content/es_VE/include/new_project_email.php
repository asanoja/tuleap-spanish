<?php
//
// Copyright (c) Enalean, 2013. All rights reserved
// Copyright (c) Xerox Corporation, Codendi Team, 2001-2009. All rights reserved
// 
//

$summary_page_link = get_server_url().'/projects/'.$project->getUnixName();

// Message preamble with Web pointers and server names
$message = 
'<p align="center"><strong>Su proyecto '.$project->getPublicName().' ha sido aprobado.</strong></p>

<p>Información principal del proyecto:
<ul>
  <li><strong>Nombre completo</strong>:    '.$project->getPublicName().'</li>
  <li><strong>Nombre corto</strong>:    '.$project->getUnixName().'</li>
  <li><strong>Página resumen</strong>: <a href="'.$summary_page_link.'">'.$summary_page_link.'</a></li>
</ul>
</p>

<p>Por favor revise cuidadosamente la <a href="'.get_server_url().'/site">documentación del sitio</a> acerca de las herramientas y servicios
ofrecidos por la '.$GLOBALS['sys_name'].' a los administradores (se incluye la guia de usuario).</p>

<p>Lo invitamos a visitar <a href="'.$summary_page_link.'">la página resumen</a> de su proyecto,
cree una descripción corta de su proyecto y asignele una categoria en el Mapa de Software.</p>

<p>Como administrador del proyecto, puede <a href="'.get_server_url().'/project/admin/?group_id='.$project->getID().'">administrar plenamente el ambiente de su proyecto</a>. Puede crear monitores, tareas, listas de correo, 
foros, repositorios git, etc</p>

<p><em>Nota</em>: Si tiene un respositorio CVS o subversion y asi lo desea, puede transferirlo como '.$GLOBALS['sys_name'].' luego contacte
al equipo de '.$GLOBALS['sys_name'].'.</li>
</p>

<p>Avisanos si podemos ser de mas ayuda.</p>

<p>-- El Equipo '.$GLOBALS['sys_name'].'</p>';

?>
