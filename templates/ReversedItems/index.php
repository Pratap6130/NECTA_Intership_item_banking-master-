<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ReversedItem> $reversedItems
 */
?>
<div class="reversedItems index content">
    <?= $this->Html->link(__('New Reversed Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reversed Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('item_user_id') ?></th>
                    <th><?= $this->Paginator->sort('reversed_by_user_id') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reversedItems as $reversedItem): ?>
                <tr>
                    <td><?= $this->Number->format($reversedItem->id) ?></td>
                    <td><?= $reversedItem->hasValue('item') ? $this->Html->link($reversedItem->item->title, ['controller' => 'Items', 'action' => 'view', $reversedItem->item->id]) : '' ?></td>
                    <td><?= $this->Number->format($reversedItem->item_user_id) ?></td>
                    <td><?= $this->Number->format($reversedItem->reversed_by_user_id) ?></td>
                    <td><?= h($reversedItem->created_at) ?></td>
                    <td><?= h($reversedItem->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reversedItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reversedItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reversedItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reversedItem->id)]) ?>
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
