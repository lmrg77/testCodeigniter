<?php

function main_menu(){
    return array(
        array(
            'title' => 'Insertar Empleado',
            'url' => base_url(),
        ),
        array(
            'title' => 'Insertar Solicitud',
            'url' => base_url('/solicitud'),
        ),
        array(
            'title' => 'Ver Empleados',
            'url' => base_url('/empleado/show'),
        ),
        array(
            'title' => 'Ver Solicitudes',
            'url' => base_url('/solicitud/show'),
        ),
    );
}