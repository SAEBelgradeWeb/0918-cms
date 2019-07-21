<?php require "partials/header.php" ?>
    <h1>Contact us</h1>

    <form action="/contact/submit" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
<?php require "partials/footer.php" ?>