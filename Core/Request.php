<?php

namespace Core;

class Request {
    public function get($key, $default = null) {
        return isset($_GET[$key]) ? $_GET[$key] : $default;
    }
}


?>