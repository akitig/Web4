<h1>Create Project</h1>

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title">
    <button type="submit">Create</button>
</form>