<?php

// limite de execucao
set_time_limit(3600);

/**
 * @author Mageshop <vitor@tryideas.com.br>
 * Classe responsável pro sicronizar os pedidos com erros
 * Summary of NovaPC_Melhorenvio_Model_Cron
 */
class NovaPC_Melhorenvio_Model_Cron
{

    public function jobs()
    {
        $pageSize = 50; // Processar 50 pedidos por vez
        $currentPage = 1;

        do {
            $result = Mage::helper('melhorenvio')->syncOrders(null, $currentPage, $pageSize);
            $currentPage++;
        } while ($result);

    }
}
