<h1>Edit Project</h1>

<form action="{{ route('projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Title:</label>
    <input type="text" name="title" value="{{ $project->title }}">
    <button type="submit">Update</button>
</form>