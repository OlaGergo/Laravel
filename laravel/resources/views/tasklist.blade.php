 <!--<ul>
    <?php foreach($tasks as $tasks):?>
        <li><?=$tasks;?></li>
    <?php endforeach; ?>
</ul> -->
<ul>
        @foreach($tasks as $task)
        <li>{{$task}} </li>
        @endforeach 
</ul>

<div>{{$foo}}</div>
