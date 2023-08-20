<?php

interface Crud
{
    public function create();

    public function update(int $id);

    public function show(int $id);

    public function delete(int $id);
}