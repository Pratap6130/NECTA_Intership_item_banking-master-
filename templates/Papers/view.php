<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paper $paper
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Paper'), ['action' => 'edit', $paper->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Paper'), ['action' => 'delete', $paper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paper->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Papers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Paper'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="papers view content">
            <h3><?= h($paper->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($paper->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($paper->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($paper->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($paper->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Items') ?></h4>
                <?php if (!empty($paper->items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Topic Id') ?></th>
                            <th><?= __('Content') ?></th>
                            <th><?= __('Content Sw') ?></th>
                            <th><?= __('Item Categorie Id') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Skill Id') ?></th>
                            <th><?= __('Paper Id') ?></th>
                            <th><?= __('Publisher') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Editor') ?></th>
                            <th><?= __('Publish Date') ?></th>
                            <th><?= __('Volume') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Has Dual Language') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($paper->items as $item) : ?>
                        <tr>
                            <td><?= h($item->id) ?></td>
                            <td><?= h($item->topic_id) ?></td>
                            <td><?= h($item->content) ?></td>
                            <td><?= h($item->content_sw) ?></td>
                            <td><?= h($item->item_categorie_id) ?></td>
                            <td><?= h($item->weight) ?></td>
                            <td><?= h($item->price) ?></td>
                            <td><?= h($item->statuse_id) ?></td>
                            <td><?= h($item->skill_id) ?></td>
                            <td><?= h($item->paper_id) ?></td>
                            <td><?= h($item->publisher) ?></td>
                            <td><?= h($item->title) ?></td>
                            <td><?= h($item->editor) ?></td>
                            <td><?= h($item->publish_date) ?></td>
                            <td><?= h($item->volume) ?></td>
                            <td><?= h($item->url) ?></td>
                            <td><?= h($item->has_dual_language) ?></td>
                            <td><?= h($item->created) ?></td>
                            <td><?= h($item->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $item->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $item->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
