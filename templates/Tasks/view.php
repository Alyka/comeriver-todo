<h1><?= h($task->title) ?></h1>
<p><?= h($task->description) ?></p>
<p><small>Created: <?= $task->created->format(DATE_RFC850) ?></small></p>
<span style="margin-right: 10px;"><?= $this->Html->link('Edit', ['action' => 'edit', $task->id]) ?></span>
<span><?= $this->Html->link('Home', ['action' => 'index']) ?></span>
