<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Topic $topic
 * @var string[]|\Cake\Collection\CollectionInterface $subjects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $topic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Topics'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="topics form content">
            <?= $this->Form->create($topic) ?>
            <fieldset>
                <legend><?= __('Edit Topic') ?></legend>
                <?php
                    echo $this->Form->control('subject_id', ['options' => $subjects]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('number_of_items');
                    echo $this->Form->control('total_weight');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
