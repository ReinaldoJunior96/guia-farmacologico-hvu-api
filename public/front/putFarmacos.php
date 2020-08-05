<?php
$farmacos = array(
    'nome_comercial' => $nomeComercial[$i],
    'principio_ativo' => $principioAtivo[$i],
    'grupo_farmacologico' => $grupoFarmacologico[$i],
    'descricao' => $descricao[$i],
    'uso_clinico' => $usoClinico[$i],
    'indicacao' => $indicacao[$i],
    'contraindicacao' => $contraindicacao[$i],
    'efeito_adverso' => $efeitoAdverso[$i],
);
$dados_json = json_encode($farmacos);
$url       = 'http://localhost:8000/farmacos';
$cabecalho = array('Content-Type: application/json', 'Accept: application/json');
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,            $url);
curl_setopt($ch, CURLOPT_HTTPHEADER,     $cabecalho);
curl_setopt($ch, CURLOPT_POSTFIELDS,     $dados_json);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST,           true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'PUT');
$resposta = curl_exec($ch);
curl_close($ch);
print_r($resposta);
