<div style="text-align: center"></div><?php
  if (!empty($_GET['id']) && !empty($_GET['value'])) {

$id = $_GET['id'];
$value = $_GET['value'];

try {

    $objDb = new PDO('mysql:host=localhost;dbname='project', 'root', 'jyoti9185');
    $objDb->exec('SET CHARACTER SET utf8');

    $sql = "SELECT DISTINCT District 
            FROM `finaldata1`
            WHERE `State`=?";
    $statement = $objDb->prepare($sql);
    $statement->execute(array($value));
    $list = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($list)) {
	
        $out = array('<option value="">Select District</option>');

        foreach($list as $row) {
            $out[] = '<option value="'.$row['id'].'">'.$row['District'].'</option>';
        }

        echo json_encode(array('error' => false, 'list' => implode('', $out)));

    } else {
        echo json_encode(array('error' => true));
    }

} catch(PDOException $e) {
    echo json_encode(array('error' => true));
}

   } else {
echo json_encode(array('error' => true));
  } 
?>
