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

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?= $brand ?></a>
            </div>
            <?= $this->element('sidebar'); ?>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?= $this->Flash->render(); ?>
                    <?= $this->fetch('content'); ?>
                    <?= $this->fetch('action_link_forms'); ?>
                </div>
            </div>
        </div>
        <?= $this->fetch('script'); ?>
    </body>
    </html>
