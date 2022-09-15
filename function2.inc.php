<?php
    function validate_mobile($mobile)
    {
        return preg_match('/^[6-9]\d{9}$/', $mobile);
    }
?>