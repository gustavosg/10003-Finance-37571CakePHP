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

                <div id="leftfloat">
                    <h3>Acesso Rapido:</h1>
                        <ul>
                            <li/>
                            <a href="accounts"> Contas</a>
                            <li/>
                            <a href="categories">Categorias</a>
                            <li/>
                            <a href="subcategories">Sub-Categorias</a>
                            <li/>
                            <a href="expenditures">Despesas</a>
                            <li/>
                            <a href="budgets">Orçamentos</a>
                            <li/>
                            <a href="budgetrecords">Items de Orçamentos</a>
                        </ul>
                </div>


                <div id="window">

                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
            <div id="footer">

                <?php
                echo "<footer style='position: fixed; right: 3px; bottom: 0px;'>
			Gustavo Souza Gonçalves - 37571 <br> Marco Aurélio D. Acaroni - 38441 <br>
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
