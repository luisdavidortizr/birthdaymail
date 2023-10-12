<?php

class Validate {
    // Check if any field is empty
    public function checkEmpty($data, $fields) {
        $msg = null;
        foreach($fields as $value) {
            if(empty($data[$value])) {
                $msg .= "<p>$value field is empty</p>";
            }
        }
        return $msg;
    }

    // Check if email is correct
    public function validEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
          return true;
        }
        return false;
    }

    // Check if subscriber is at least 12 years old
    public function validDate($dateString) {
        $inputDate = new DateTime($dateString);
        $currentDate = new DateTime();
        $diff = $currentDate->diff($inputDate);
        return $diff->y >= 12;
    }
}

?>