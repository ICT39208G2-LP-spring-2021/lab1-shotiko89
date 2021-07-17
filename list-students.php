<!-- 5. დაწერეთ სკრიპტი list-students.php რომლის გამოყენებითაც ცხრილის სახით გამოიტანთ სტუდენტების სიას. ცხრილში უნდა იყოს სვეტები: სახელი, გვარი, პირადი ნომერი -->

<!DOCTYPE html>
<html>

<head>
</head>

<body>

  <table>
    <tr>
      <td>სახელი</td>
      <td>გვარი</td>
      <td>პირადი ნომერი</td>
    </tr>

    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'gtu_lms');

    if ($mysqli->connect_error) {
      die('შეცდომა მონაცემთა ბაზასთან კავშირისას');
    }

    $query = "SELECT FirstName, LastName, PersonalNumber from students";
    $result = $mysqli->query($query);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["PersonalNumber"] . "<td></tr>";
      }
    }
    $mysqli->close();
    ?>
  </table>


</body>

</html>