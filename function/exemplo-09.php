<?php

$hierarquia = array(

    array(
        'nome_cargo' => 'CEO',
        'subordinados' =>array(
            //inicio: Diretor comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Termino: Gerente de Vendas

                )
            ),
            //Termino: Diretor Comercial
            //Inicio: Diretor Financeiro 
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Inicio: Gerente de Contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor de Contas a Pagar
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Termino: Supervisor de Contas a pagar
                        )
                    )
                    
                ),
                //Termino: Gerente de Contas a pagar
                //Inicio: Gerente de Compras 
                array(
                    'nome_cargo' => 'Gerente de Compras',
                    'subordinados' => array(
                         //Inicio: Supervisor de Surprimentos
                         array(
                             'nome_cargo' => 'Supervisor de Surprimentos',
                             'subordinados' => array(

                                array(
                                    'nome_cargo' =>'Funcionário'
                                )

                             )
                         )
                         //Termino: Supervisor de Surprimento
                    )
                )

            )
            //Termino: Diretor Financeiro
        )
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach($cargos as $cargo){

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        //Verifica se existe (isset) subordinado dentro do array e se existe ao menos 1
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);

?>