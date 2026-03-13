<!DOCTYPE html>
<html>
<head>
<title>Edit Task</title>

<style>
body{
    background:#ffe6f0;
    font-family: Georgia, serif;
    text-align:center;
    padding:40px;
}

.container{
    background:white;
    width:400px;
    margin:auto;
    padding:30px;
    border-radius:20px;
    box-shadow:0 5px 10px rgba(0,0,0,0.1);
}

h1{
    color:#ff4da6;
}

input, textarea{
    width:90%;
    padding:10px;
    margin:10px 0;
    border-radius:10px;
    border:1px solid #ffb3d9;
}

button{
    background:#ff66a3;
    color:white;
    padding:10px 20px;
    border:none;
    border-radius:15px;
    cursor:pointer;
}

a{
    display:block;
    margin-top:15px;
    color:#d63384;
}
</style>
</head>

<body>

<div class="container">

<h1>💗 Edit Task 💗</h1>

<form action="{{ route('tasks.update',$task->id) }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="title" value="{{ $task->title }}">

<textarea name="description">{{ $task->description }}</textarea>

<label>Status</label>
<br>
<select name="is_completed">
    <option value="0" {{ old('is_completed', $task->is_completed) == 0 ? 'selected' : '' }}>
        Pending
    </option>
    <option value="1" {{ old('is_completed', $task->is_completed) == 1 ? 'selected' : '' }}>
        Completed
    </option>
</select>

<br>
<button type="submit">Update Task</button>

</form>

<a href="{{ route('tasks.index') }}">Back</a>

</div>

</body>
</html>