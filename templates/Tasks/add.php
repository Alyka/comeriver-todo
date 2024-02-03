<h1>Create task</h1>
<?php
    echo $this->Form->create($task);
    echo $this->Form->control('title');
    echo $this->Form->control('description', ['rows' => '4']);
    echo $this->Form->button(__('Save task'));
    echo $this->Form->end();
?>
