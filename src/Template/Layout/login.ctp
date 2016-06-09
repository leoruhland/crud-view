<!DOCTYPE html>
<html lang="<?= \Locale::getPrimaryLanguage(\Cake\I18n\I18n::locale()) ?>">
<head>
    <?= $this->Html->charset(); ?>
    <title><?= $this->get('title');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('icon'); ?>
    <?= $this->fetch('meta'); ?>
    <?= $this->fetch('css'); ?>
    <?= $this->fetch('headjs'); ?>
</head>
<body>
    <div id="wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">

                    <?= $this->fetch('content'); ?>
                    <?= $this->fetch('action_link_forms'); ?>

            </div>

        </div>
    </div>
        <?= $this->fetch('script'); ?>
    </body>
    </html>
