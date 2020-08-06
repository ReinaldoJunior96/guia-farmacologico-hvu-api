<?php
/* Cabeçalho */
$url = 'http://localhost:8000/farmacos';
$cabecalho = array('Content-Type: application/json', 'Accept: application/json');
$ch = curl_init();
/* Request */
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecalho);
//curl_setopt($ch, CURLOPT_POSTFIELDS,     $campos);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$resposta = curl_exec($ch);
curl_close($ch);
$dados = json_decode($resposta);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        input {
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom-color: #8b92a3;
            border-width: 1px;
        }

        input:focus {
            outline: none;
        }

        .title-table {
            color: #8b92a3;
        }
    </style>
</head>

<body class="degrade">
    <div class="container margin-box-perso">
        <div class="shadow-lg p-3 mb-5 bg-white rounded ">
            <div class="row p-2">
                <img src="images/veterinary.png" width="50" class="rounded d-block p-2" alt="">
                <h3 class="yanone-kaffeesatz text-color-1 d-flex align-items-center mt-2">
                    Guia Farmacológico / Get
                </h3>


            </div>

            <table id="table_id" class="table mont-serrat">
                <thead>
                    <tr class="roboto-condensed title-table">
                        <td>Nome Comercial</td>
                        <td>Princípio Ativo</td>
                        <td>Grupo Farmacológico</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody class="roboto-condensed">
                    <?php foreach ($dados as $valores) { ?>
                        <tr>
                            <td class=""><?= ucfirst($valores->nome_comercial) ?></td>
                            <td><?= $valores->principio_ativo ?></td>
                            <td><?= $valores->grupo_farmacologico ?></td>
                            <td>
                                <?php echo "<a href='showFarmaco.php?farmaco=" . $valores->id . "'><i class='fas fa-eye text-color-icon'></i></a>" ?>
                            </td>
                            <td>
                                <a href=""><i class="fas fa-pen text-color-icon"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "language": {
                    "sEmptyTable": "<r>Nenhum registro encontrado</r>",
                    "sInfo": "<r>Mostrando de _START_ até _END_ de _TOTAL_ registros</r>",
                    "sInfoEmpty": "<r>Mostrando 0 até 0 de 0 registros</r>",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "<r>_MENU_ resultados por página</r>",
                    "sLoadingRecords": "<r>Carregando...</r>",
                    "sProcessing": "<r>Processando...</r>",
                    "sZeroRecords": "<r>Nenhum registro encontrado</r>",
                    "sSearch": "<r>Buscar :</r>",
                    "oPaginate": {
                        "sNext": "<r>Próximo</r>",
                        "sPrevious": "<r>Anterior</r>",
                        "sFirst": "<r>Primeiro</r>",
                        "sLast": "<r>Último</r>"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            });
        });
    </script>
</body>

</html>