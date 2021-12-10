
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn1 = mysqli_connect("localhost", "root", "Nuclearbomb2.", "personal_project");

        // Check connection
        if ($conn1 === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

       

      ?>
    </center>
</body>

</html>
