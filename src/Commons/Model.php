<?php

namespace Hoang9104\Setup\Commons;

class Model
{

    protected $conn;

    public function __construct()
    {
        // THỰC HIỆN KẾT NỐI TỰ ĐỘNG KHI KHỞI TẠO BẤT KÌ
        // CLASS NÀO LIÊN QUAN ĐẾN MODEL

    }
    public function __destruct()
    {
        $this->conn = null;
    }
}
