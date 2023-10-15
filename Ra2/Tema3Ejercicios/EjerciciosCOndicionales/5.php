<?php
/**
 * Script que muestre una lista de enlaces en función del perfil de usuario:
 * Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
 * Perfil Usuario: Pagina1, Pagina2
 * 
 * Autor: Javier Postigo Arévalo
 * Fecha: 04-10-2023
 */

 $perfil = "usuario";

 if (strtolower($perfil) == "administrador") {
    echo "<p>Perfil Administrador</p>";
    echo "<p><a href='pagina1.html' >Página1</a></p>";
    echo "<p><a href='pagina2.html' >Página2</a></p>";
    echo "<p><a href='pagina3.html' >Página3</a></p>";
    echo "<p><a href='pagina4.html' >Página4</a></p>";
 } else if (strtolower($perfil) == "usuario")  {
    echo "<p>Perfil usuario</p>";
    echo "<p><a href='pagina1.html'>Página1</a></p>";
    echo "<p><a href='pagina2.html' >Página2</a></p>";

 }
