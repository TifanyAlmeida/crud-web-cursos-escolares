<?php

 header("Content-type: text/html5; charset=utf-8");

// cores e dígitos
$cor_fundo = "azulescuro";
$cor_fonte = "bege";
$cor_borda = "azulescuro";
$digitos = 7;

// dimensões do contador
$x = 70;
$y = 15;

// tamanho da fonte
$fonte = 3;

// define as margens
$margem_x = 10;
$margem_y = 0;


// chama função que retorna o próximo valor do contador
$contador = RetornaProximoValor($digitos);

// informa ao navegador o tipo de imagem que será retornada
header("Content-type: image/png");

// cria a imagem
$imagem = ImageCreate($x,$y);

// define as cores
$bege = ImageColorAllocate($imagem,182,146,46);
$azulescuro = ImageColorAllocate($imagem,10,35,81);

// obtém o identificador das cores escolhidas
$cor_fundo = $$cor_fundo;
$cor_fonte = $$cor_fonte;
$cor_borda = $$cor_borda;

// desenha um retângulo com a cor do fundo
ImageFilledRectangle($imagem,0,0,$x,$y,$cor_fundo);

// desenha a borda
ImageRectangle($imagem,0,0,$x-1,$y-1,$cor_borda);

// escreve o valor atual do contador
ImageString($imagem,$fonte,$margem_x,$margem_y,$contador,$cor_fonte);

// Gera a imagem PNG a ser enviada ao navegador
ImagePNG($imagem);

// Libera a memória utilizada
ImageDestroy($imagem);



function RetornaProximoValor ($digitos)
{
    // arquivo onde será armazenado o valor do contador
	$arquivo = "contador.txt";

	// abre o arquivo e lê o valor atual
    if(file_exists($arquivo))
    {
    	$ponteiro = fopen ($arquivo, "r");
        	$valor = fgets($ponteiro, 4096);
    	fclose ($ponteiro);
    }
    else
        $valor = 0;

	$valor++;
	
	// grava o novo valor no arquivo
	$ponteiro = fopen ($arquivo, "w");
    flock ($ponteiro, LOCK_EX);
        fwrite($ponteiro, "$valor");
    flock ($ponteiro, LOCK_UN);
    fclose ($ponteiro);

    while (strlen($valor) < $digitos)
        $valor = "0".$valor;

    return $valor;
}

?>