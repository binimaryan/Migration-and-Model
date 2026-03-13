<!DOCTYPE html>
<html>
<head>
    <title>View Task</title>

    <style>

        body{
            background:#ffe6f0;
            font-family: Georgia, serif;
            text-align:center;
            padding:40px;
        }

        h1{
            color:#d63384;
            font-size:36px;
        }

        table{
            width:500px;
            margin:30px auto;
            border-collapse:collapse;
            background:white;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 5px 10px rgba(0,0,0,0.1);
        }

        th{
            background:#ffb3d9;
            padding:12px;
        }

        td{
            padding:12px;
            border-top:1px solid #ffd6e7;
        }

        .back-btn{
            background:#ff99cc;
            color:white;
            padding:10px 20px;
            border-radius:15px;
            text-decoration:none;
        }

    </style>

</head>

<body>

<h1>💗 Task Details 💗</h1>

<table>

<tr>
<th>ID</th>
<td>{{ $task->id }}</td>
</tr>

<tr>
<th>Title</th>
<td>{{ $task->title }}</td>
</tr>

<tr>
<th>Description</th>
<td>{{ $task->description }}</td>
</tr>

<tr>
<th>Status</th>
<td>
@if($task->is_completed)
Completed
@else
Pending
@endif
</td>
</tr>

</table>

<a href="{{ route('tasks.index') }}" class="back-btn">Back</a>

</body>
</html>