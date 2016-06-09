<div class="login-panel panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Please Sign In</h3>
    </div>
    <div class="panel-body">
        <?= $this->Flash->render(); ?>

        <?= $this->Form->create() ?>
            <fieldset>
                <?= $this->Form->input('username') ?>
                <?= $this->Form->input('password') ?>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                    </label>
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <?= $this->Form->button('Login', ['class' => 'btn btn-lg btn-success btn-block']) ?>
            </fieldset>
            <?= $this->Form->end() ?>

    </div>
</div>
