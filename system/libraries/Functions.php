<?php
    class CI_Functions {
        public function send_json_response($type, $httpcode, $message, $data = array()) {
            if ($type == ERROR_LOG) {
                // error response
                $json = array('code' => $httpcode, 'message' => $message);
            } else {
                // success response
                $json = array('code' => $httpcode, 'message' => $message, 'data' => $data);
            }

            echo json_encode($json);
        }
    }

?>
