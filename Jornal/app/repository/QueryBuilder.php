<?php

namespace App\repository;

class QueryBuilder {


    public static function insert(array $data, string $table):string
    {
        $sql = 'INSERT `'.$table.'` (' . self::fields($data) . ') VALUES (' . self::insertedPlaceHolders($data) . ')';
        return $sql;
    }

    public static function fields(array $data = []):string
    {
        $placeholders = array_keys($data);

        $sql = "";

        for ($i = 0;$i < count($placeholders);$i++)
        {
            if ($i > 0) {
                $sql .= ",";
            }

            $sql .= "`" . $placeholders[$i] . "`";
        }

        return $sql;
    }


    public static function insertedPlaceHolders(array $data = []):string
    {
        $placeholders = array_keys($data);
        $sql = '';
        for ($i = 0; $i < count($placeholders);$i++)
        {
            if ($i > 0) {
                $sql .= ",";
            }

            $sql .= ":" . $placeholders[$i];
        }

        return $sql;
    }

    public static function updatePlaceholders(array $data = []):string
    {
        $sql = '';
        $counter = 0;
        $total = count($data);

        foreach ($data as $field => $value)
        {
            $counter++;
            $sql .= '`' . $field . '` =:' . $field;
            if ($counter < $total)
            {
                $sql .= ', ';
            } else {
                $sql .= ' ';
            }
        }


        return $sql;
    }

    public static function update(array $data, string $table, array $where):string
    {
        $sql = 'UPDATE `' . $table . ' SET ' . self::updatePlaceholders($data) . ' WHERE ' . self::where($where);
        return $sql;
    }

    public static function findOneBy(string $table):string
    {
        return "SELECT * FROM `" . $table . "` WHERE id=:id";
    }

    public static function findAll(string $table):string
    {
        return "SELECT * FROM `" . $table . "`";
    }

    public static function where(array $conditions = []):string
    {
        $sql = '';

        $total = count($conditions);
        $num = 0;
        foreach ($conditions as $field => $value)
        {
            $num++;
            $sql .= '`' . $field . '` =:'. $field; 
            if ($num < $total)
            {
                $sql .= ' AND ';
            }
        }

        return $sql;
    }

    public static function findAllBy(string $table, array $where):string
    {

        $sql = "SELECT * FROM `" . $table . "` WHERE " . self::where($where);

        return $sql;

    }
}