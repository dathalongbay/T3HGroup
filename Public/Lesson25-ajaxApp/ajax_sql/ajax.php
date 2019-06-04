<?php
require_once 'database.php';
$db = new Database();
$offset = isset($_POST['offset']) ? $_POST['offset'] : 0;
$limit = isset($_POST['limit']) ? $_POST['limit'] : 0;

$conn = Database::$connection;
$sql = "SELECT * FROM posts LIMIT $offset,$limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$html = '';
if (!empty($data)) {
    foreach($data as $post) {
        $html .= '<div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="'.$post['post_image'].'" alt="Card image cap">
                <div class="card-body">
                    <h2>'.$post['post_name'].'</h2>
                    <p class="card-text">'.$post['post_content'].'</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>';
    }
}


$respond = array();
$respond['success'] = 1;
$respond['html'] = $html;
echo json_encode($respond);
exit();