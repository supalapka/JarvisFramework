<?php

//* BookModel @vitalii-pokrivchak
namespace app\models;

use app\db\BaseSQLOperations;
use app\db\DbConnection;

//* Class BookModel extends of Model
class BookModel extends Model
{
    public function __construct()
    {
    }

    /**
     ** @vitalii-pokrivchak
     ** get_all
     *
     * @return array
     */
    public function get_all()
    {
        $result = BaseSQLOperations::select("book", null, "Book");
            // echo "<pre>";
            // var_dump($result);

        if ($result) {
            return $result;
        }
        return false;
    }
    /**
     ** @vitalii-pokrivchak
     ** get
     *
     * @param  mixed $id
     * @return Book
     */
    public function get(int $id)
    {
        $result = BaseSQLOperations::select("book", "id = $id", "Book");
        if ($result) {
            return $result;
        }
        return false;
    }
    /**
     ** @HrabV
     ** write
     *
     * @return void
     */
    public function write()
    {
    }
    /**
     ** @HrabV
     ** update
     *
     * @return void
     */
    public function update()
    {
    }
    /**
     ** @HrabV
     ** delete
     *
     * @return void
     */
    public function delete()
    {
    }
}
