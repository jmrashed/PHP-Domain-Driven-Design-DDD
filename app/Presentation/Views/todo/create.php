<!-- app\Presentation\Views\todo\create.php -->

<?php include __DIR__ . '/../layouts/app.php'; ?>

<!-- Content specific to the create todo page -->
<section>
    <h1>Create a New Todo Item</h1>
    <form method="POST" action="/todos/create">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
</section>

<?php include __DIR__ . '/../layouts/app_footer.php'; ?>