<!DOCTYPE html>
<html>
<head>
<title>Tasks</title>

<style>

body{
    background:#ffe6f0;
    font-family: Georgia, serif;
    text-align:center;
    padding:40px;
}

h1{
    color:#d63384;
    font-size:40px;
}

.create-btn{
    background:#ff99cc;
    color:white;
    padding:10px 20px;
    text-decoration:none;
    border-radius:20px;
    font-weight:bold;
}

table{
    width:80%;
    margin:30px auto;
    border-collapse:collapse;
    background:white;
    box-shadow:0 5px 10px rgba(0,0,0,0.1);
    border-radius:15px;
    overflow:hidden;
}

th{
    background:#ffb3d9;
    padding:12px;
}

td{
    padding:12px;
    border-top:1px solid #ffd6e7;
}

.btn{
    text-decoration:none;
    padding:6px 12px;
    border-radius:10px;
    font-size:14px;
}

.view{
    background:#ffcce6;
    color:#d63384;
}

.edit{
    background:#ffb3d9;
    color:white;
}

.delete{
    background:#ff6699;
    color:white;
    border:none;
    padding:6px 12px;
    border-radius:10px;
    cursor:pointer;
}

</style>

</head>

<body>

<h1>💗 Task List 💗</h1>

<a href="{{ route('tasks.create') }}" class="create-btn">+ Create Task</a>

<table>

<thead>

<tr>
<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>Status</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($tasks as $task)

<tr>

<td>{{ $task->id }}</td>

<td>{{ $task->title }}</td>

<td>{{ $task->description }}</td>

<td>
@if($task->is_completed)
Completed
@else
Pending
@endif
</td>

<td>

<a href="{{ route('tasks.show',$task->id) }}" class="btn view">View</a>

<a href="{{ route('tasks.edit',$task->id) }}" class="btn edit">Edit</a>

<form action="{{ route('tasks.destroy',$task->id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')

<button type="submit" class="delete">Delete</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</body>
</html>