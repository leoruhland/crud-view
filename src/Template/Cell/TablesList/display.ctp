<?php
foreach ($tables as $table => $config) {

    $isActive = isset($config['action']) && ($this->request->controller == $config['action']['controller'] && $this->request->action == $config['action']['action']);
    $icon = isset($config['icon']) ? '<i class="fa '.$config['icon'].' fa-fw"></i> ' : '';
    ?>
    <li>
        <?php
        if(!isset($config['dropdown'])){
            echo $this->Html->link($icon . $config['title'], [
                'controller' => $config['action']['controller'],
                'action' => $config['action']['action'],
            ],['class' => ($isActive) ? 'active' : '', 'escape' => false]);

        } else {
            echo $this->Html->link($icon . $config['title'] . ' <span class="fa arrow"></span>', '#',['escape' => false]);

            echo '<ul class="nav nav-second-level collapse" aria-expanded="false" >';
            foreach($config['dropdown'] as $configDrop){
                $isActive = ($this->request->controller == $configDrop['action']['controller'] && $this->request->action == $config['action']['action']);
                $icon = isset($configDrop['icon']) ? '<i class="fa '.$configDrop['icon'].' fa-fw"></i> ' : '';
                echo '<li>';
                echo $this->Html->link($icon . $configDrop['title'], [
                    'controller' => $configDrop['action']['controller'],
                    'action' => $configDrop['action']['action'],
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
