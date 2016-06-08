
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <?= $this->cell('CrudView.TablesList', [
                'tables' => $menu,
                'blacklist' => \Cake\Utility\Hash::get($actionConfig, 'scaffold.tables_blacklist')
                ]) ?>
            </ul>
        </div>
    </div>
