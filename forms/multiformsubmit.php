<?php
if (!empty($_POST)) {
    header("access-control-allow-credentials:true");
    header("access-control-allow-headers:Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token");
    header("access-control-allow-methods:POST, GET, OPTIONS");
    header("access-control-allow-origin:".$_SERVER['HTTP_ORIGIN']);
    header("access-control-expose-headers: AMP-Access-Control-Allow-Source-Origin");
    header("amp-access-control-allow-source-origin:https://".$_SERVER['HTTP_HOST']);
    header("Content-Type: application/json");
    $typeoOfAdvice = isset($_POST['type_of_advice']) ? $_POST['type_of_advice'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $postcode = isset($_POST['postcode']) ? $_POST['postcode'] : '';
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $Surname = isset($_POST['Surname']) ? $_POST['Surname'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $gclid = isset($_POST['gclid']) ? $_POST['gclid'] : '';
    $pl_matchtype = isset($_POST['pl_matchtype']) ? $_POST['pl_matchtype'] : '';
    $pl_adgroupid = isset($_POST['pl_adgroupid']) ? $_POST['pl_adgroupid'] : '';
    $pl_device = isset($_POST['pl_device']) ? $_POST['pl_device'] : '';
    $pl_devicemodel = isset($_POST['pl_devicemodel']) ? $_POST['pl_devicemodel'] : '';
    $pl_creative = isset($_POST['pl_creative']) ? $_POST['pl_creative'] : '';
    $pl_keyword = isset($_POST['pl_keyword']) ? $_POST['pl_keyword'] : '';
    $pl_adposition = isset($_POST['pl_adposition']) ? $_POST['pl_adposition'] : '';
    $pl_network = isset($_POST['pl_network']) ? $_POST['pl_network'] : '';
    $pl_searchterm = isset($_POST['pl_searchterm']) ? $_POST['pl_searchterm'] : '';
 
    $post = array(
        'email' => $email,
        'typeOfAdvice' => $typeoOfAdvice,
        'postcode'  => $postcode,
        'firstName' => $firstName,
        'Surname' => $Surname,
        'phone' => $phone,
        'gclid' => $gclid,
        'pl_matchtype' => $pl_matchtype,
        'pl_campaignid' => $pl_campaignid,
        'pl_adgroupid' => $pl_adgroupid,
        'pl_device' => $pl_device,
        'pl_devicemodel' => $pl_devicemodel,
        'pl_creative' => $pl_creative,
        'pl_keyword' => $pl_keyword,
        'pl_adposition' => $pl_adposition,
        'pl_network' => $pl_network,
        'pl_searchterm' => $pl_searchterm,
       
    );
    header("Content-Type: application/json");
    echo json_encode($post);
    $post_data['email'] = urlencode($_POST['email']);
    $post_data['typeOfAdvice'] = urlencode($_POST['type_of_advice']);
    $post_data['postcode'] = urlencode($_POST['postcode']);
    $post_data['firstName'] = urlencode($_POST['firstName']);
    $post_data['Surname'] = urlencode($_POST['Surname']);
    $post_data['phone'] = urlencode($_POST['phone']);
    $post_data['gclid'] = urlencode($_POST['gclid']);
    $post_data['pl_matchtype'] = urlencode($_POST['pl_matchtype']);
    $post_data['pl_campaignid'] = urlencode($_POST['pl_campaignid']);
    $post_data['pl_adgroupid'] = urlencode($_POST['pl_adgroupid']);
    $post_data['pl_device'] = urlencode($_POST['pl_device']);
    $post_data['pl_devicemodel'] = urlencode($_POST['pl_devicemodel']);
    $post_data['pl_creative'] = urlencode($_POST['pl_creative']);
    $post_data['pl_keyword'] = urlencode($_POST['pl_keyword']);
    $post_data['pl_adposition'] = urlencode($_POST['pl_adposition']);
    $post_data['pl_network'] = urlencode($_POST['pl_network']);
    $post_data['pl_searchterm'] = urlencode($_POST['pl_searchterm']);
    foreach($post_data as $key => $value) {
        $post_items[] = $key.
        '='.$value;
    }
    $post_string = implode('&', $post_items);
    $curl_connection = curl_init('https://maker.ifttt.com/use/dYY3Q_K0w_UT_y5De35t9w');
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
    curl_exec($curl_connection);
    curl_close($curl_connection);
   
}
?>  
