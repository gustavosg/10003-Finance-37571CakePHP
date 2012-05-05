<?php
$title = __d('cake_dev', 'Sistema Finance-37571 com CakePHP');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title> Sistema Finance-37571 com CakePHP</title>
        <?php
        echo $this->Html->meta('icon');

//		echo $this->Html->css('cake.generic');
        echo $this->Html->css('gsg');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1><?php echo $this->Html->link($title, ''); ?></h1>
            </div>
            <div id="content">

                <div id="navigation">
                    <h3>Acesso Rapido:</h1>
                        <ul>

                            <li/>
                            <a href="/Finance-37571CakePHP/"> P�gina Inicial</a>

                            <li/>
                            <a href="/Finance-37571CakePHP/accounts"> Contas</a>
                            <li/>
                            <a href="/Finance-37571CakePHP/categories">Categorias</a>
                            <li/>
                            <a href="/Finance-37571CakePHP/subcategories">Sub-Categorias</a>
                            <li/>
                            <a href="/Finance-37571CakePHP/expenditures">Despesas</a>
                            <li/>
                            <a href="/Finance-37571CakePHP/budgets">Or�amentos</a>
                            <li/>
                            <a href="/Finance-37571CakePHP/budgetrecords">Items de Or�amentos</a>

                            <h3>Relat�rios Personalizados:</h3>
                            <li/>
                            <a href="/Finance-37571CakePHP/budgetrecords/TotalPrevisto">Total previsto (or�amento)</a>

                            <li/>
                            <a href="/Finance-37571CakePHP/budgetrecords/GastoMes">Valor gasto em um m�s/Gasto extratificado por m�s</a>
                            <li/>
                            <a href="/Finance-37571CakePHP/expenditures/SaldoMes">Saldo em determinado m�s</a>
                            <li/>	
                            <a href="/Finance-37571CakePHP/expenditures/GastoCategoriaMes">Gastos por categoria em um determinado m�s</a>

                            <li/>
                            <a href="/Finance-37571CakePHP/expenditures/GastoContaMes">Gastos por conta em um determinado m�s</a>

                        </ul>
                </div>
                <div id="window">
                    <br>

                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->fetch('content'); ?>
                </div>
            </div>
            <div id="footer">

                <?php
                echo "<footer >
			Gustavo Souza Gon�alves - 37571 <br> Marco Aur�lio D. Acaroni - 38441 <br>
			PUC Minas - 2011-2012
			</footer>";
                ?>

                <?php
//                        echo $this->Html->link(
//					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
//					'http://www.cakephp.org/',
//					array('target' => '_blank', 'escape' => false)
//				);
                ?>
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
