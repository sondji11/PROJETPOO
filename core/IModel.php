<?php
namespace App\Core;

interface Imodel
{
public function insert():int;
public function update():int;

public  static function findall():array;
public  static function delete(int $id):int;
public static function findById( int $id):object|null;
public static function findBy(string $sql,array $data=null,bool $single=false ):object|null|array;


} 