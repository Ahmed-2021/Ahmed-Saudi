<?php

namespace App\Database\Models;


interface crud
{
    public function create();
    public function read();
    public function update();
    public function delete();
}