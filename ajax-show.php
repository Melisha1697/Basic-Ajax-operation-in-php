<?php
    // database connection
    $connect = mysqli_connect("localhost", "root", "",
     "ajax_lab") or die("Connection Failed");
    // select query to fetch data
    $sql = "SELECT * FROM employee";
    // query execution
    $result = mysqli_query($connect, $sql);
    // checking if data is fetched or not
    if(mysqli_num_rows($result) > 0){
        $output = "<table class='table table-hover'><thead>
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td>CONTACT</td>
                            <td>EMAIL</td>
                        </tr>
                    </thead><tbody>";
        while($row = mysqli_fetch_assoc($result)){
            $output .= "<tr>
                            <td>{$row['emp_id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['contact']}</td>
                            <td>{$row['email']}</td>
                        </tr>";
        }
        $output .= "</tbody></table>";
        echo $output;
    }else{
        echo "No data found";}
?>