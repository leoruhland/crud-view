<?php
foreach ($tables as $table => $config) {
    $isActive = ($this->request->controller == $config['controller'] && $this->request->action == $config['action']);
    $icon = isset($config['icon']) ? '<i class="fa '.$config['icon'].' fa-fw"></i> ' : '';
    ?>
    <li>
        <?= $this->Html->link($icon . $config['title'], [
            'controller' => $config['controller'],
            'action' => $config['action'],
        ],['class' => ($isActive) ? 'active' : '', 'escape' => false]); ?>
    </li>
    <?php
}
?>
