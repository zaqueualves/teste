<?php
$stringComEmoticons = "Olá! 😊 Esta é uma string 𝕱𝖊𝖑𝖎𝖕𝖊 com um : , sdemoticon 😀";

// Substitui caracteres que não estão no intervalo ASCII imprimível, excluindo acentos e caracteres especiais
$stringSemEmoticons = preg_replace('/[^\x20-\x7Eáàãâéêíóôõúüç.,;]/u', '', $stringComEmoticons);

echo $stringSemEmoticons; // Output: Olá!  Esta é uma string com um emoticon  
?>
