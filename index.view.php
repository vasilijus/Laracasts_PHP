<html>
<body>
    <h2>Testing classes</h2>
    <ul>
    <?php foreach($tasks as $task) : ?>

        <?php if($task->completed) : ?>
        <strike>
        <?php endif ?>

            <li><?php echo $task->description; ?> </li>
        
        <?php if($task->completed) : ?>
        </strike>
        <?php endif ?>

    <?php endforeach ?>
    </ul>

</body>
</html>