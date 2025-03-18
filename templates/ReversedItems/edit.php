<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReversedItem $reversedItem
 * @var string[]|\Cake\Collection\CollectionInterface $items
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reversedItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reversedItem->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reversed Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="reversedItems form content">
            <?= $this->Form->create($reversedItem) ?>
            <fieldset>
                <legend><?= __('Edit Reversed Item') ?></legend>
                <?php
                    echo $this->Form->control('item_id', ['options' => $items]);
                    echo $this->Form->control('item_user_id');
                    echo $this->Form->control('reversed_by_user_id');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
