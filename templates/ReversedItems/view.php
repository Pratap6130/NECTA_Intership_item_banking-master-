<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReversedItem $reversedItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reversed Item'), ['action' => 'edit', $reversedItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reversed Item'), ['action' => 'delete', $reversedItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reversedItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reversed Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reversed Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="reversedItems view content">
            <h3><?= h($reversedItem->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $reversedItem->hasValue('item') ? $this->Html->link($reversedItem->item->title, ['controller' => 'Items', 'action' => 'view', $reversedItem->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reversedItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item User Id') ?></th>
                    <td><?= $this->Number->format($reversedItem->item_user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reversed By User Id') ?></th>
                    <td><?= $this->Number->format($reversedItem->reversed_by_user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($reversedItem->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($reversedItem->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
