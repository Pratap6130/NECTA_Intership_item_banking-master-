<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserLog $userLog
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $items
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userLog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userLog->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="userLogs form content">
            <?= $this->Form->create($userLog) ?>
            <fieldset>
                <legend><?= __('Edit User Log') ?></legend>
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
