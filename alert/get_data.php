<?php

//Lay IP cua User
function getUserIP() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } else if (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } else if (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } else if (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}

//Lay chuoi Json tu server IP Stack
function sendJsontoServer() {
    $userIP = getUserIP();
    $access_key = "?access_key=7de9c30f885d330914c4ab0d2128970c";
    $array_json = "http://api.ipstack.com/" . $userIP . $access_key;
    //$json= {"ip": "113.162.178.207", "type": "ipv4", "continent_code": "AS", "continent_name": "Asia", "country_code": "VN", "country_name": "Vietnam", "region_code": "SG", "region_name": "Ho Chi Minh", "city": "Ho Chi Minh City", "zip": "700000", "latitude": 10.779999732971191, "longitude": 106.65499877929688, "location": {"geoname_id": 1566083, "capital": "Hanoi", "languages": [{"code": "vi", "name": "Vietnamese", "native": "Ti\u1ebfng Vi\u1ec7t"}], "country_flag": "https://assets.ipstack.com/flags/vn.svg", "country_flag_emoji": "\ud83c\uddfb\ud83c\uddf3", "country_flag_emoji_unicode": "U+1F1FB U+1F1F3", "calling_code": "84", "is_eu": false}};
    $json = file_get_contents($array_json);
    $obj = json_decode($json);
    return $obj;
}

//Lay chuoi JSON thoi tiet hien tai cua Vi tri User
function getCurrentData($region, $coutry_name, $access_key) {
    $location = $region . "," . $coutry_name . "&units=metric";
    $array_json = "http://api.openweathermap.org/data/2.5/weather?q=" . $location . $access_key;
    $json = file_get_contents($array_json);
    $obj = json_decode($json);
    return $obj;
}

//Lay chuoi JSON chua du lieu du bao thoi tiet trong 5 ngay
function getForcast($city_id, $access_key) {
    $array_json = "http://api.openweathermap.org/data/2.5/forecast?id=" . $city_id . "&units=metric" . $access_key;
    $json = file_get_contents($array_json);
    $obj = json_decode($json);
    return $obj;
}