<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job - Workopia</title>
</head>
<body>
    <h1>Create Job</h1>
    <form >
        @csrf
        <label for="title">Job Title:</label>
        <input type="text" id="title" name="title" required>
        <button type="submit">Create Job</button>
    </form>
</body>
</html>
