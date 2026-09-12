<?php
require 'data/flores.php';
if (!isset($_GET['id']))
    {
        header('Location: erro.php');
        exit;
    }
foreach ($flores as $flor)
    {
        if ($flor['id'] == $_GET['id'])
            {
                $flor_encontrada = $flor;
                break;
            }
    }
if (!isset($flor_encontrada))
    {
        header('Location: erro.php');
        exit;
    }
?>

<?php
$titulo_pagina = 'Floriografia - ' . $flor_encontrada['nome'];
include 'includes/header.php';
?>

<?php include 'includes/components/secao-flor.php'; ?>

<?php include 'includes/footer.php'; ?>