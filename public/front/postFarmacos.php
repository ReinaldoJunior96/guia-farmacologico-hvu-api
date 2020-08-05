<?php
/*
$nomeComercial = array(
    "ACEPRAN 0,2%",
    "Afectrim",
    "Cloridrato de Ondansetrona Injetável",
    "Legalon",
    "Maxicam Injetável 0,2%",
);
$principioAtivo = array(
    "Acepromazina",
    "Sulfametoxazol associado a trimetoprim",
    "Ondansetrona",
    "Silimarina",
    "Meloxicam",
);
$grupoFarmacologico = array(
    "Sedativo",
    "Antimicrobianos",
    "Antiemético",
    "Nutraceutico hepatoprotetor",
    "Anti-inflamatório"
);
$descricao = array(
    "A Acepromazina é um derivado fenotiazínico mais comumente utilizado como medicação pré-anestésica, sedativo e tranquilizante.",
    "As sulfas foram os primeiros antimicrobianos de uso sistêmico eficazes. Atuam bloqueando a síntese de ácido fólico da bactéria, afetando assim a produção de RNA e DNA pela mesma. Em doses terapêuticas são bacteriostáticos. (SPINOSA,2017).  Atua sobre uma ampla faixa de micro-organismos Gram-positivos e Gram-negativos (Streptococcus pyogenes, Streptococcus pneumoniae, N. meningitidis, Staphylococcus aureus, E. coli, Salmonella, Shigella, Proteus mirabilis e Pasteurella). ",
    "A ondansetrona é um potente antagonista, altamente seletivo, dos receptores 5-HT3. Seu mecanismo de ação no controle da náusea e do vômito ainda não é bem conhecido. ",
    "Medicamento fitoteráfico hepatoprotetor (com propriedades de proteção do fígado). Seu componente ativo é a silimarina (Silybum marianum (L.) Gaertn), que age como estabilizador das membranas das células do fígado (hepatócitos), resguardando sua integridade e, assim, a função fisiológica do fígado; protege experimentalmente a célula hepática da influência nociva de substâncias tóxicas externas ou internas",
    "Anti-inflamatório não esteroide com atividade inibidora preferencialmente da cicloxigenase-2 (cox-2), que confere um duplo benefício terapêutico, resultando em excelente atividade antiinflamatória, analgésica e antiexsudativa com mínimos efeitos gastrolesivos ou ulcerogênicos."
);
$usoClinico = array(
    "Tranquilização, medicação pré anestésica",
    "Afecções bacterianas gastrointestinais, respiratórias, urinárias ",
    "Náuseas e vômitos profusos, incluindo os resultantes da administração de antineoplásicos ",
    "Tratamento dos distúrbios digestivos que ocorrem nas doenças do fígado e nas lesões tóxicas do fígado, e como tratamento de suporte na doença inflamatória crônica do fígado e na cirrose hepática.",
    "Inflamações e dores de origem inflamatória.",
);
$indicacao = array(
    "Indicado como sedativo e tranquilizantes para facilitar procedimentos diagnósticos, contenção para exames e radiografias, tratamento de feridas e abscessos, sondagem uretral e nos casos onde se deseja obter um efeito tranquilizante.",
    "Infecções respiratórias (pneumonias, bronquites e broncopneumonias) causadas pelos gêneros E. coli, Klebsiella pneumoniae, Pasteurella, Bordetella bronchiseptica, Streptococcus; infecções urinárias (uretrite, cistite, nefrite e pielonefrite) causadas porStaphylococcus, Streptococcus, E. coli, P. mirabilis, Klebsiella, Enterobacter; infecções gastrintestinais (estomatites, gastrites, enterites e gastroenterites) causadas por Nocardia sp., Yersiria, Salmonella, Staphylococcus spp., Shigella; infecções dermatológicas (dermatites, piodermatites) causadas por Staphylococcus, alguns bastonetes Gram-negativos. No tratamento contra protozoários como: Eimeria spp. (bezerros, ovinos, caprinos, potros e suínos),Isospora spp. (cães e gatos), Isospora suis (suínos) e Toxoplasma sp. (cães e gatos).",
    "Vômitos e náuseas.",
    "Doenças que cursem com lesões hepáticas.",
    "Patologias dolorosas ou degenerativas, agudas ou crônicas, do aparelho osteomioarticular: osteítes, artrites, artrites reumatoides, osteoartrites, espondiloses, espondiloartroses anquilosantes, displasias coxo-femurais, calcificação de discos intervertebrais, reparação de fraturas, traumatismos e pós-operatório de artroplastias. Afecções oculares: uveítes, conjuntivites, pós-operatórios. Desordens de ordem reprodutiva como retenção de placenta.Metrites e mastites. Analgesia pré e pós-operatória."
);
$contraindicacao = array(
    " ",
    " ",
    " ",
    " ",
    " ",
);
$efeitoAdverso = array(
    "Hipotensão, colapso circulatório, agressividade paradoxal e, em equideos, protrusão do pênis, taquipneia, taquicardia e convulsões.",
    "A toxicidade das sulfas pode ser aguda ou crônica. A toxicidade aguda é bastante rara e normalmente está associada a altas doses ou então à administração rápida da sulfa pela via intravenosa. Os sintomas são aumento de salivação, diarreia, hiperpneia, excitação, fraqueza muscular e ataxia. A toxicidade crônica mais comumente observada é a cristalúria sulfonamídica, sendo este efeito relacionado com a precipitação das sulfas e principalmente de seus metabólitos acetilados nos túbulos contornados renais. Tem sido ainda descrita, em cães, principalmente para aquelas sulfas que contêm o núcleo pirimidínico (p.ex., a sulfadiazina), a ceratoconjuntivite seca (SPINOSA, 2017).",
    "Constipação, reações extrapiramidais, arritmias e hipotensão.",
    "Raros: diarreia leve. Muito raros: Hipersensibilidade, erupções cutâneas, dispneia. ",
    "Vômitos, ulcerações gastrointestinais, gastrite, nefrotoxicidade. "
);




function storeFarmaco($nomeComercial, $principioAtivo, $grupoFarmacologico, $descricao, $usoClinico,
                      $indicacao, $contraindicacao, $efeitoAdverso){
    for($i = 0; $i < count($nomeComercial) ; $i++){
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
        /*$dados_json = json_encode($farmacos);
        $url       = 'http://localhost:8000/farmacos';
        $cabecalho = array('Content-Type: application/json', 'Accept: application/json');
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,            $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER,     $cabecalho);
        curl_setopt($ch, CURLOPT_POSTFIELDS,     $dados_json);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST,           true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'POST');
        $resposta = curl_exec($ch);
        curl_close($ch);
        print_r($resposta);*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Olá, mundo!</title>
    <style>
        .mont-serrat {
            font-family: 'Montserrat', sans-serif;
        }

        input {
            border-top: none;
            border-right: none;
            border-left: none;
            border-bottom-color: #0bd96f;
        }

        input:focus {
            outline: none;
        }

        a {
            color: #333333;
            text-decoration: none !important;
        }

        a:hover {
            color: #2b2b2b;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="shadow p-3 mb-5 bg-white rounded mt-5">
        <div class="row">
            <div class="col-6 d-flex align-items-center ">
                <div class="">
                    <div class="row d-flex justify-content-center">
                        <h3 class="mont-serrat font-weight-light">Guia Farmacológico</h3>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img src="images/veterinary.png" class="img-fluid  col-6" alt="Imagem responsiva">
                    </div>
                </div>
            </div>
            <div class="col-6 mont-serrat">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome Comercial</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Princípio Ativo</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Senha">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Grupo Farmacológico</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Efeito Adverso</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Senha">
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Uso Clínico</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Indicação</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Contraindicação</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>-->
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <div class="btn-group mb-3">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            Request
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">GET</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">POST</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
</html>

