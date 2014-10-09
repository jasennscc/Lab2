<?php


    if (isset($_POST['string']) && isset($_POST['number']))
    { // Retrieve entered values
        $strIn = $_POST['string'];
        $numIn = $_POST['number'];

        if ($numIn = "test")
        { // Loop to display all headers
        for ($index = 1; $index <= 7; $index++)
            checkIn($strIn, $index);
        }
        else
            checkIn($strIn, $numIn);

    }

    function checkIn($strIn, $numIn)
    {
            switch ($numIn)
            {
                case 1: echo "<h1>" . $strIn . "</h1>"; break;
                case 2: echo "<h2>" . $strIn . "</h2>"; break;
                case 3: echo "<h3>" . $strIn . "</h3>"; break;
                case 4: echo "<h4>" . $strIn . "</h4>"; break;
                case 5: echo "<h5>" . $strIn . "</h5>"; break;
                case 6: echo "<h6>" . $strIn . "</h6>"; break;
                default: echo $numIn . " is not a valid header tag."; break;
            }
    }

?>

<html>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="part1">
        <p> Enter a string:
            <input name="string" type="text">
        </p>
        <p> Enter a header size:
            <input name="number" type="text">
        </p>
        <p> <input name = "Submit" type="submit"</p>
    </form>
</html>