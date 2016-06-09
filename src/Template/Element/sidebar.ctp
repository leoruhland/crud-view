
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <?= $this->cell('CrudView.TablesList', [
                'tables' => $menu,
                'blacklist' => (isset($actionConfig)) ? \Cake\Utility\Hash::get($actionConfig, 'scaffold.tables_blacklist') : []
                ]) ?>
            </ul>
        </div>
    </div>
