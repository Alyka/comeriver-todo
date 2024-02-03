<!-- File: templates/Articles/index.php -->

<div style="display: flex; justify-content: space-between;">
    <h1>Tasks</h1>
    <?= $this->Html->link('Create', ['action' => 'add'], ['class' => 'button']) ?>
</div>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($tasks as $task): ?>
    <tr>
        <td>
            <?= $this->Html->link($task->title, ['action' => 'view', $task->id]) ?>
        </td>
        <td>
            <?= $task->description ?>
        </td>
        <td>
            <?= $task->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <div style="display: flex;">
                <?= $this->Html->link('Edit', ['action' => 'edit', $task->id], ['class' => 'button', 'style' => 'margin-right: 10px;']) ?>
                <?= $this->Form->postButton(
                    'Delete',
                    ['action' => 'delete', $task->id],
                    ['confirm' => 'Are you sure?'])
                ?>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
