<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserLog $userLog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Log'), ['action' => 'edit', $userLog->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Log'), ['action' => 'delete', $userLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLog->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Log'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="userLogs view content">
            <h3><?= h($userLog->action_perfomed) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userLog->hasValue('user') ? $this->Html->link($userLog->user->username, ['controller' => 'Users', 'action' => 'view', $userLog->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Action Perfomed') ?></th>
                    <td><?= h($userLog->action_perfomed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $userLog->hasValue('item') ? $this->Html->link($userLog->item->title, ['controller' => 'Items', 'action' => 'view', $userLog->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userLog->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($userLog->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($userLog->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
