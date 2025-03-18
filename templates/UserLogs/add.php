<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserLog $userLog
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $items
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="userLogs form content">
            <?= $this->Form->create($userLog) ?>
            <fieldset>
                <legend><?= __('Add User Log') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('action_perfomed');
                    echo $this->Form->control('item_id', ['options' => $items]);
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
