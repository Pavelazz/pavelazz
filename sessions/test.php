<style>
    table {
        border-collapse: collapse;
    }
    td {
        border: 1px solid black;
    }
    th {
        border: 1px solid black;
    }
    
   
    </style>
<table>
    
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOGIN</th>
            <th>AGE</th>
            <th>ID_GROUP</th>
</tr>
</thead>
<tbody>

<?php
    $host = 'my_db'; 
    $user = 'root';
    $pass = '1234';
    $name = 'test';

    $link = mysqli_connect($host, $user, $pass, $name);

    $query = 'SELECT `NAME`, `ID`, `AGE`, `ID_GROUP`, `LOGIN` FROM `students`'; 
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo '<tr>';
        echo '<td>'.$row['ID'].'</td>';
        echo '<td>'.$row['NAME'].'</td>';
        echo '<td>'.$row['LOGIN'].'</td>';
        echo '<td>'.$row['AGE'].'</td>';
        echo '<td>'.$row['ID_GROUP'].'</td>';
        echo '</tr>';

      

    }
?> </tbody>