<?php
session_start();

if(!isset($_SESSION['loggedInStatus']) || $_SESSION['loggedInStatus'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<html>
  <head>
    <title> Custom Search Function </Title>
  </head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link  rel="stylesheet"  href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" >
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
  <body>
    <br>
    <a  href="logout.php" class="btn btn-danger">Lou out</a>
    <table id="example" class="display" style="width:100%">
        <thead>
        <a style="margin: 0px 0px 0px 1250px;" href="index.php" class="btn btn-primary">Add rec</a>
            <tr>
                <th>Name</th>
                <th>lastname</th>
                <th>number</th>
                <th>email</th>
                <th>Hobby</th>
                <th>Gender</th>
                <th>Country</th>
                <th>state</th>
                <th>city</th>
                <th>image</th>
                <th>delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
        <?php 
include("conn.php");

$select = "SELECT d.*, c.country as countrys, s.state as states, t.city as citys
           FROM `data` d
           left JOIN `country` c ON d.country = c.cid
           left JOIN `state` s ON d.state = s.id
           left JOIN `city` t ON d.city = t.id
           GROUP BY d.id";
           
$result = mysqli_query($con, $select);
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["lastname"];?></td>
            <td><?php echo $row["number"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["hobby"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["countrys"];?></td>
            <td><?php echo $row["states"];?></td>
            <td><?php echo $row["citys"];?></td>
            <td><img src="uploads/<?php echo $row['image'];?>" style="height:50px;width:50px;"></td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id'];?>">Delete</button></td>
            <div class="modal fade" id="exampleModal<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are You Sure This Record Delete ???...
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">yes</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">no</button>
                        </div>
                    </div>
                </div>
            </div>
            <td><a class="btn btn-success" href="update.php?id=<?php echo $row["id"];?>">Update</a></td>
        </tr>
        <?php 
    }
} else {
    echo "Error: " . mysqli_error($con); 
}
?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>lastname</th>
                <th>number</th>
                <th>email</th>
                <th>hobby</th>
                <th>gender</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
            </tr>
        </tfoot>
    </table>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  new DataTable('#example', {
    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.footer().textContent;
                 let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);
                 input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
    }
});
</script>
</body>
</html>