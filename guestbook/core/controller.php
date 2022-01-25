<?php
date_default_timezone_set("Africa/Lagos");
class Comment
{
   private $pdo;
   private $table;
  public function __construct($pdo, $table){
    $this->pdo = $pdo;
    $this->table = $table;
  }
  public function insert($fields)
    {
        $query = 'INSERT INTO `' . $this->table . '` (';

        foreach ($fields as $key => $value) {
            $query .= '`' . $key . '`,';
        }
        $query = rtrim($query, ',');

        $query .= ') VALUES(';

        foreach ($fields as $key => $value) {
            $query .= ':' . $key . ',';
        }

        $query = rtrim($query, ',');

        $query .= ')';

        $fields = $this->processDates($fields);

        $this->query($query, $fields);

        return $this->pdo->lastInsertId();
    }
    
  private function query($sql, $parameter = [])
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($parameter);
        return $query;
    }
    
    private function processDates($fields)
    {
        foreach ($fields as $key => $value) {
            if ($value instanceof DateTime) {
                $fields[$key] = $value->format('Y-m-d H:i:s');
            }
        }
        return $fields;
    }
    public function find($column, $value){
      $query = "SELECT * FROM " . $this->table . " WHERE " . $column . " = :value";
      $parameter = ['value' => $value];
      $query = $this->query($query, $parameter);
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}