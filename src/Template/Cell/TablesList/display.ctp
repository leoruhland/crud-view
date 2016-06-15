<?php
foreach ($tables as $table => $config) {

    $isActive = isset($config['action']) && ($this->request->controller == $config['url']['controller'] && $this->request->action == $config['url']['action']);
    $icon = isset($config['icon']) ? '<i class="fa '.$config['icon'].' fa-fw"></i> ' : '';
    ?>
    <li>
        <?php
        if(!isset($config['dropdown'])){
            echo $this->Html->link($icon . $config['title'], [
                'controller' => $config['url']['controller'],
                'action' => $config['url']['action'],
            ],['class' => ($isActive) ? 'active' : '', 'escape' => false]);

        } else {
            echo $this->Html->link($icon . $config['title'] . ' <span class="fa arrow"></span>', '#',['escape' => false]);

            echo '<ul class="nav nav-second-level collapse" aria-expanded="false" >';
            foreach($config['dropdown'] as $configDrop){
                $isActive = ($this->request->controller == $configDrop['url']['controller'] && $this->request->action == $config['url']['action']);
                $icon = isset($configDrop['icon']) ? '<i class="fa '.$configDrop['icon'].' fa-fw"></i> ' : '';
                echo '<li>';
                echo $this->Html->link($icon . $configDrop['title'], [
                    'controller' => $configDrop['url']['controller'],
                    'action' => $configDrop['url']['action'],
                    (isset($configDrop['url'][0]) ? $configDrop['url'][0] : '')
                ],['escape' => false]);
                echo '</li>';
            }
            echo '</ul>';
        }

        ?>
    </li>
    <?php

}
?>
