<body>
    <form action="postform.php" method="post">
        <textarea name="miniblog" id="miniblog" cols="30" rows="10"></textarea>
        <br />
        <input type="submit" class="btn btn-primary">
    </form>

    <?php
        require_once 'php/meekrodb.2.3.class.php';

        $results = DB::query("SELECT post FROM miniblog");
        foreach ($results as $row) {
            echo "<div class='microBlog'>" . $row['post'] . "</div>";
        }
    ?>
</body>
