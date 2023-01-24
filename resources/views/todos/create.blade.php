<form method="POST" action="{{ route('todos.store') }}">
    @csrf
    
    <input type="text" name="title" required>

    <textarea name="desc" cols="30" rows="10" required></textarea>

    <select name="status">
        <option value="pending" selected>Pending</option>
        <option value="inprogress">In-Progress</option>
        <option value="finished">finished</option>
    </select>
    
    <button type="submit">Submit</button>
</form>