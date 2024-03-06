<?php
// Caminho da imagem relativo ao diretório de imagens
$caminhoImagem = 'pexels-photo-1423600.jpeg';

// Define o tipo de conteúdo como imagem
header('Content-Type: image/jpeg');

// Exibe a imagem para o usuário
readfile($caminhoImagem);
?>