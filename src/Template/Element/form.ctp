<?= $this->fetch('before_form'); ?>

<div class="<?= $this->CrudView->getCssClasses(); ?>">
    <?= $this->element('action-header') ?>
    
    <?= $this->Form->create(${$viewVar}, ['role' => 'form', 'url' => $formUrl, 'type' => 'file', 'data-dirty-check' => $enableDirtyCheck, 'novalidate']); ?>
    <?= $this->CrudView->redirectUrl(); ?>
    <div class="row">
        <div class="col-lg-<?= $this->exists('form.sidebar') ? '8' : '12' ?>">
            <?php foreach($fields as $field => $options): ?>
                <?= $this->Form->input($field, $options); ?>
            <?php endforeach; ?>
        </div>

        <?php if ($this->exists('form.sidebar')) : ?>
            <div class="col-lg-2">
                <?= $this->fetch('form.sidebar'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-lg-<?= $this->exists('form.sidebar') ? '8' : '12' ?>">
            <div class="form-group">
                <?= $this->element('form/buttons') ?>
            </div>
        </div>
    </div>
    <?= $this->Form->end(); ?>
</div>

<?= $this->fetch('after_form'); ?>
