<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SkillLevel $skillLevel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $skillLevel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $skillLevel->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Skill Levels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="skillLevels form content">
            <?= $this->Form->create($skillLevel) ?>
            <fieldset>
                <legend><?= __('Edit Skill Level') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
