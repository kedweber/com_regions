<? defined('KOOWA') or die; ?>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.modal'); ?>

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator'); ?>

<script src="media://lib_koowa/js/koowa.js" />

<form action="" class="form-horizontal -koowa-form" method="post">
    <div class="row-fluid">
        <div class="span8">
            <fieldset>
                <legend><?= @text('Content'); ?></legend>
                <div class="control-group">
                    <label class="control-label"><?= @text('Title'); ?></label>
                    <div class="controls">
                        <input class="required" type="text" name="title" value="<?= $region->title ?>" placeholder="<?= @text('Title'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('Slug'); ?></label>
                    <div class="controls">
                        <input type="text" name="slug" value="<?= $region->slug ?>" placeholder="<?= @text('Slug'); ?>" />
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend><?= @text('Fieldset'); ?></legend>
                <?= @service('com://admin/cck.controller.element')->cck_fieldset_id($region->cck_fieldset_id)->row($region->id)->table('regions_regions')->getView()->assign('row', $region)->layout('list')->display(); ?>
            </fieldset>
        </div>
        <div class="span4">
            <fieldset>
                <legend><?= @text('DETAILS'); ?></legend>
                <div class="control-group">
                    <label class="control-label"><?= @text('PUBLISHED'); ?></label>
                    <div class="controls">
                        <?= @helper('select.booleanlist', array('name' => 'enabled', 'selected' => $region->enabled)); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('Translated'); ?></label>
                    <div class="controls">
                        <?= @helper('select.booleanlist', array('name' => 'translated', 'selected' => $region->translated)); ?>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</form>