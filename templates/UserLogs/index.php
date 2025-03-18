<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UserLog> $userLogs
 */
?>
<div class="userLogs index content">
    <?= $this->Html->link(__('New User Log'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Logs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('action_perfomed') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userLogs as $userLog): ?>
                <tr>
                    <td><?= $this->Number->format($userLog->id) ?></td>
                    <td><?= $userLog->hasValue('user') ? $this->Html->link($userLog->user->username, ['controller' => 'Users', 'action' => 'view', $userLog->user->id]) : '' ?></td>
                    <td><?= h($userLog->action_perfomed) ?></td>
                    <td><?= $userLog->hasValue('item') ? $this->Html->link($userLog->item->title, ['controller' => 'Items', 'action' => 'view', $userLog->item->id]) : '' ?></td>
                    <td><?= h($userLog->created_at) ?></td>
                    <td><?= h($userLog->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userLog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userLog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLog->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
